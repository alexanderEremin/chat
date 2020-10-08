<?php

include_once "chat/data/db/ConnectDB.php";

class Users{
    private $pdo;
    public function __construct(){
        $connect = new ConnectDB();
        $this->pdo = $connect->getConnect();
    }

    /**
     * @return array  - список пользователей с которыми есть перепика
     */
    public function getListUser() : array{
        $query = $this->pdo->query("SELECT * FROM guess");
        $query->execute();
        $this->listUser = $query->fetchAll(PDO::FETCH_ASSOC);
        return $this->listUser;
    }
    /**
     * @param string $token токен запрашиваемого пользователя
     * @return array - запрашиваемый пользователь
     */
    public function getUser(string $token) : array{
        $query = $this->pdo->prepare("SELECT * FROM guess WHERE token = :token");
        $query->bindParam(":token", $token);
        $query->execute();
        $res = $query->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}