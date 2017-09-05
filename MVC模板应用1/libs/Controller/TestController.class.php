<?php

class TestController{
    function show(){
        global $sm;

        $testModel=M("Test");
        $data=$testModel->get();

        $sm->assign("data",$data);
        $sm->display("test.tpl");
    }
}

?>