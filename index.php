<?php

use Workerman\Worker;

require_once __DIR__ . '/vendor/autoload.php';

include_once "chat/data/Server.php";

$server = new Server();
// Create a Websocket server
$ws_worker = new Worker('websocket://192.168.1.222:2346');

$client = [];

// Новый пользователь подключился
$ws_worker->onConnect = function ($connection) use (&$client){
    $connection->onWebSocketConnect = function ($connection) use (&$client){
        if (isset($_GET['token']) and $_GET['token'] != "" and $_GET['token'] != null) {
            $client[$_GET['token']] = $connection;
            echo "new Connect";
        }
    };
};

// Пришел запрос от пользователя в ответ - Отправить данные пользователю
$ws_worker->onMessage = function ($connection, $data) use (&$client, $server) {
    $queryArray = explode(",.!", $data);
    $res = array();
    switch ($queryArray[0]){
        case "createnewuser": // Создать нового пользователя
            $res["datatype"] = "createuser";
            $res["data"] = $server->createNewChat($queryArray[1]);
            // Оповестить админа о новом пользователе
            $echo["datatype"] = "newuseradd";
            $echo["data"] = $res["data"];
            if(isset($client["admin"]))
                $client["admin"]->send(json_encode($echo));
            break;
        case "getlistusers": // запрос полного списка пользователей
            $res["datatype"] = "listusers";
            $res["data"] = $server->getListUser();
            break;
        case "userdata": // запрос данных конкретного пользователя
            $res["datatype"] = "userdata";
            $res["data"] = $server->getUser($queryArray[1]);
            break;
        case "getmessages": // Запрос имеющихся сообщений выбранного пользователя (токен)
            $res["datatype"] = "listmessages";
            $res["data"] = $server->getMessages($queryArray[1]);
            break;
        case "newmessageadmin": // Отправка нового сообщения от администратора (сообщение и токен)
            $res["datatype"] = "messageadd";
            if($queryArray[1] == "" || $queryArray[2] == "undefined")
                $res["data"] = "error";
            else {
                // ответ админу
                $res["data"] = $server->addMessageAdmin($queryArray[1], $queryArray[2]) ? "ok" : "error";
                $res["message"] = $queryArray[1];
                // сообщение пользователю о том что написал админ
                $usermessage["datatype"] = "adminmessageadd";
                $usermessage["data"] = $queryArray[1];
                if(isset($client[$queryArray[2]]))
                    $client[$queryArray[2]]->send(json_encode($usermessage));
            }
            break;
        case "newmessage": // Отправка нового сообщения от пользователя (сообщение)
            $res["datatype"] = "messageadd";
            if($queryArray[1] == "")
                $res["data"] = "error";
            else
                $res["data"] = $server->addMessageUser($queryArray[1], $queryArray[2]) ? "ok" : "error";

            if($res["data"] === "ok" and isset($client["admin"])){ //  Если письмо ушло без ошибок но сообщаем об этом
                $echo["datatype"] = "newmessageadd";
                $echo["data"] = $queryArray[1];
                $echo["token"] = $queryArray[2];
                // сообщаем админу
                if(isset($client["admin"]))
                    $client["admin"]->send(json_encode($echo));
                // сообщаем отправителю
                if(isset($client[$queryArray[2]]))
                    $client[$queryArray[2]]->send(json_encode($echo));
            }
            break;
    }
    $connection->send(json_encode($res));
    //print_r($res);
};

// Закрыть соединение
$ws_worker->onClose = function ($connection) {
    echo "Connection closed\n";
};

// Run worker
Worker::runAll();