<?php

class TestModel{
    function get(){
//        return "hello MVC";
        $dsn="mysql:host=localhost:3306;dbname=blog";
        $username="root";
        $password="";
        $conn=new PDO($dsn,$username,$password);
        $conn->exec("SET NAMES 'utf8'");

        $sql="select * from blog_article,blog_cate where blog_article.cateId=blog_cate.cateId";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
}

?>