<?php

class TestModel{
    function get(){
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

    //
    function addData($article_data){
        $dsn="mysql:host=localhost:3306;dbname=blog";
        $username="root";
        $password="";
        $conn=new PDO($dsn,$username,$password);
        $conn->exec("SET NAMES 'utf8'");

        $title=$article_data["title"];
        $content=$article_data["content"];
        $pic=$article_data["pic"];
        $cateId=$article_data["cateId"];

        $sql="insert into blog_article(title,content,pic,cateId) values(?,?,?,?);";
        $stmt=$conn->prepare($sql);
        $stmt->execute(array($title,$content,$pic,$cateId));
    }
}

?>