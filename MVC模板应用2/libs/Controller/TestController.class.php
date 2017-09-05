<?php

class TestController{
    //此方法用于展示blog_article表中的信息
    function show(){
        global $sm;

        $testModel=M("Test");
        $data=$testModel->get();

        $sm->assign("data",$data);
        $sm->display("test.tpl");
    }

    //此方法用于将用户输入的信息存入blog_article
    function add(){
        //获取用户上传的头像名称
        $picname=$_FILES['pic']["name"];
        //设置保存到服务器本地的路径
        $picpath="image/".$picname;
        //将用户上传的图片从临时路径存储到服务器的一个本地路径
        move_uploaded_file($_FILES['pic']["tmp_name"],$picpath);

        $article_data=array(
            "title"=>$_POST["title"],
            "content"=>$_POST["content"],
            "pic"=>$picpath,
            "cateId"=>$_POST["cateId"]
        );

        $m=M('Test');
        $m->addData($article_data);
    }
}

?>