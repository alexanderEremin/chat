<?php
declare(strict_types = 1);

include_once "chat/data/users/Users.php";
include_once "chat/data/auth/Auth.php";
include_once "chat/data/messages/Messages.php";

class Server{
    private $mUser;
    private $mChat;
    private $mAuth;

    public function __construct(){
        $this->mUser = new Users();
        $this->mChat = new Messages();
        $this->mAuth = new Auth();
    }

    /**
     * @return array Полный список пользователей с которыми есть переписка
     */
    public function getListUser() : array{
        return $this->mUser->getListUser();
    }
    /**
     * @return array Полный список пользователей с которыми есть переписка
     */
    public function getUser(string $token) : array{
        return $this->mUser->getUser($token);
    }

    /**
     * Полный список сообщений
     * @param string $token токен пользователя
     *
     */
    public function getMessages(string $token) : array{
        return $this->mChat->getMessageUser($token);
    }

    /**
     * Создает новый чат
     * @param string $username Имя нового пользователя
     */
    public function createNewChat(string $username) : string{
        $token = $this->mAuth->createToken($username);
        $this->mChat->createNewChat($username, $token); // TODO Проверку, вдруг ошибка создания чата
        return $token;
    }

    /**
     * Сообщение от пользователя
     * @param string $message Сообщение
     * @param string $token токен авторизации
     */
    public function addMessageUser(string $message, string $token) : bool{
        try{
            if($this->mAuth->auth($token)){
                if($this->mChat->addMessageUser($message, $token)) {
                    echo "mesageADD";
                    return true;
                }else {
                    echo "mesageADD=++++++++++++++";
                    return false;
                }
            }else{
                echo "---------------------";
                return false;
            }
        }catch (Exception $e){
            echo $e->getFile() . " line -> " . $e->getLine();
            return false;
        }
    }

    /**
     * Сообщение от администратора
     * @param string $message Сообщение
     * @param string $adminName  имя админа
     *
     * TODO для админа отдельный метод, пока без авторизации (((( почему в php нет перегрузки методов ((((((
     */
    public function addMessageAdmin(string $message, string $token) : bool{
        try {
            $this->mChat->addMessageAdmin($message, $token);
            return true;
        }catch (Exception $e){
            echo $e->getFile() . " line -> " . $e->getLine();
            return false;
        }
    }
}