<?php

class User extends Model {
    var $username;
    var $password_hash;

    public function find($user_id){
        $SQL = 'SELECT * FROM User WHERE user_id = :user_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['user_id'=>$this->user_id]); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }

    public function get(){
        $SQL = 'SELECT * FROM User';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetchAll();
    }
    
    public function findUser($username){
        $SQL = 'SELECT * FROM User WHERE username = :username';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username'=>$username]); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        return $stmt->fetch();
    }

    public function update(){
        $SQL = 'UPDATE User SET name = :name, email = :email, phone = :phone, username = :username WHERE user_id = :user_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['name'=>$this->name,'user_id'=>$this->user_id, 'email'=>$this->email,'phone'=>$this->phone, 'username'=>$this->username]);
        return $stmt->rowCount();
    }

    public function create(){
        $SQL= 'INSERT INTO User(username, password_hash) VALUE(:username, :password_hash)';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['username' => $this->username, 'password_hash'=>$this->password_hash]);
        return $stmt->rowCount();
    }

    public function delete(){
        $SQL = 'DELETE FROM User WHERE user_id = :user_id';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['user_id'=>$this->user_id]);
        return $stmt->rowCount();
    }
}