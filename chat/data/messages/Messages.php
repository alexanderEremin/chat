<?php
declare(strict_types = 1);

include_once "chat/data/db/ConnectDB.php";

class Messages{
    private $pdo;
    public function __construct(){
        $this->pdo = new ConnectDB();
    }

    /**
     * Список сообщений конкретного пользователя
     * @param string $token токен для определения пользователя
     * @return array массив сообщений
     */
    public function getMessageUser(string $token) : array {
        $query = $this->pdo->getConnect()->prepare("SELECT message_to, message, time_message FROM chat WHERE token = :token");
        $query->bindParam(":token", $token);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Создание нового чата
     * @param string $username  имя пользователя
     * @param string $token токен пользователя
     */
    public function createNewChat(string $username, string $token) : bool{
        $status = true;
        $query = $this->pdo->getConnect()->prepare("INSERT INTO guess (name, token, status) VALUES (:name, :token, :status)");
        $query->bindParam(":name", $username, PDO::PARAM_STR);
        $query->bindParam(":token", $token, PDO::PARAM_STR);
        $query->bindParam(":status", $status, PDO::PARAM_BOOL);
        if($query->execute())
            return true;
        else
            return false;
    }

    /**
     * Добавить новое сообщение от пользователя к администратору
     * @param string $message сообщение
     * @param string $token токен пользователя
     * @return bool удачно или не удачно
     */
    public function addMessageUser(string $message, string $token) : bool{
        $messageTo = "admin";
        try{
            $query = $this->pdo->getConnect()->prepare("INSERT INTO chat (user_name, message_to, message, token) 
                                                            VALUES (:user_name, :message_to, :message, :token)");
            $query->bindParam(":user_name", $token, PDO::PARAM_STR);
            $query->bindParam(":message_to", $messageTo, PDO::PARAM_STR);
            $query->bindParam(":message", $message, PDO::PARAM_STR);
            $query->bindParam(":token", $token, PDO::PARAM_STR);
            $query->execute();
            echo "addMessage";
            return true;
        }catch (PDOException $e){
            echo $e->getFile() . " line -> " . $e->getLine();
            return false;
        }
    }

    /**
     * Добавить новое сообщение от администратора к пользователю
     * @param string $message сообщение
     * @param string $token токен пользователя
     * @return bool удачно или не удачно
     */
    public function addMessageAdmin(string $message, string $token) : bool{
        $admin = "admin";
        try{
            $query = $this->pdo->getConnect()->prepare("INSERT INTO chat (user_name, message_to, message, token) 
                                                            VALUES (:user_name, :message_to, :message, :token)");
            $query->bindParam(":user_name", $admin, PDO::PARAM_STR);
            $query->bindParam(":message_to", $token, PDO::PARAM_STR);
            $query->bindParam(":message", $message, PDO::PARAM_STR);
            $query->bindParam(":token", $token, PDO::PARAM_STR);
            $query->execute();
            return true;
        }catch (PDOException $e){
            echo $e->getFile() . " line -> " . $e->getLine();
            return false;
        }
    }
}