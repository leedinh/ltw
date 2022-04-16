<?php

class Model{
    protected static $_connection = null;
    
    public function __construct(){
        if (self::$_connection === null){
            $host = 'localhost';
            $dbname = 'laptop';
            $user = 'root';
            $password = '';
            try {
                self::$_connection =new PDO("mysql:host=$host;dbname=$dbname",$user,$password);

                if (self::$_connection) {
                    echo "Connected to the $dbname database successfully!";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            
        }
    }
}

?>
