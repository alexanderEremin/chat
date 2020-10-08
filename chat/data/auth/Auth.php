<?php
declare(strict_types = 1);

include_once "chat/data/db/ConnectDB.php";

class Auth{
    private $pdo;
    public function __construct(){
        $this->pdo = new ConnectDB();
    }
    /**
     * Проверка есть ли пользователь с таким токеном авторизации
     * @param string $token Токен авторизации
     * @return bool если есть, то true, если нет пользователя с таким токеном то false
     */
    public function auth(string $token) : bool{
        $query = $this->pdo->getConnect()->prepare("SELECT * FROM `guess` WHERE token = :token");
        $query->bindParam(":token", $token);
        $query->execute();
        $isExists = $query->fetchColumn();
        if($isExists != 0) {
            return true;
        }else {
            return false;
        }
    }

    /**
     * Создание токена авторизации для нового пользователя
     * @param string $username Имя нового пользователя
     * @return string токен нового пользователя
     */
    public function createToken(string $username) : string{
        return md5($username.time()."trulya-trulya-lyz");
    }

}