<?php

class TestController{
    function show(){
        $testModel=new TestModel();
        $data=$testModel->get();

        $testView=new TestView();
        $testView->display($data);
    }
}

?>