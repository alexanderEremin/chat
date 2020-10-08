<?php
declare(strict_types = 1);
include "../data/Server.php";
$api = new Api();
header("Access-Control-Allow-Orgin: *");
header('Content-type: application/json; charset=utf-8');
http_response_code(200);

/**
 * Отдаст список пользователей
 */
if(isset($_POST['userlist'])){
    print_r(json_encode($api->getListUser()));
}
/**
 * отдаст все сообщения конкретного пользователя
 */
if(isset($_POST['chat']) and isset($_POST['token'])){
    print_r(json_encode($api->getMessages($_POST['token'])));
}
/**
 * Создаст новый чат
 */
if(isset($_POST['newchat'])){
    print_r(json_encode($api->createNewChat($_POST['newchat'])));
}
/**
 * тестовый коннект
 */
if(isset($_POST['test'])){
    print_r('{"test": "ok"}');
}
/**
 * Сообщения от пользователя
 */
if(isset($_POST['message']) and isset($_POST['token'])){
    print_r(json_encode($api->addNewMessageUser($_POST['message'], $_POST['token'])));
}
/**
 * Сообщения от пользователя
 */
if(isset($_POST['message']) and isset($_POST['tokenuser'])){
    print_r(json_encode($api->addNewMessageAdmin($_POST['message'], $_POST['tokenuser'])));
}
class Api{
    private $mServer;
    public function __construct(){
        $this->mServer = new Server();
    }

    /**
     * @return array Полный список пользователей с которыми есть переписка
     */
    public function getListUser() : array{
        return $this->mServer->getListUser();
    }

    /**
     * @param $token string токен пользователя
     * выводит список сообщений
     */
    public function getMessages(string $token) : array{
        return $this->mServer->getMessages($token);
    }

    /**
     * @param string $username Создает новый чат
     */
    public function createNewChat(string $username) : string{
        return $this->mServer->createNewChat($username);
    }

    /**
     * @param string $message новое сообщение
     * @param string $token токен авторизации
     */
    public function addNewMessageUser(string $message, string $token) : array{
        $result = array();
        if($this->mServer->addMessageUser($message, $token))
            $result["result"] = "ok";
        else
            $result["result"] = "error";
        return $result;
    }

    /**
     * @param string $message новое сообщение
     * @param string $adminName токен авторизации
     *
     * TODO для админа отдельный метод, пока без авторизации (((( почему в php нет перегрузки методов ((((((
     */
    public function addNewMessageAdmin(string $message, string $adminName){
        $result = array();
        if($this->mServer->addMessageAdmin($message, $adminName))
            $result['result'] = "ok";
        else
            $result['result'] = "error";
        return $result;
    }
}