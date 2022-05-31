<?php

Class Product extends Model{
    var $pid;
    var $model;
    var $price;
    var $manufacturer;
    var $category;
    var $productname ;

    public function get() {
        $SQL = 'SELECT * FROM product';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public function find($pid) {
        $SQL = 'SELECT * FROM product WHERE pid = :pid';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['pid'=>$pid]); 
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetch();
    }

    public function getModel($model) {
        $SQL = 'SELECT * FROM product WHERE model = :model';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['model'=>$model]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public function getCategory($category)  {
        $SQL = 'SELECT * FROM product WHERE manufacturer = :category';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute(['category'=>$category]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

    public function printSummary() {
        $SQL = 'SELECT manufacturer, model, category, price FROM product';
        $stmt = self::$_connection->prepare($SQL);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Product');
        return $stmt->fetchAll();
    }

}