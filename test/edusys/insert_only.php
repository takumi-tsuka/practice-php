<?php 
    include './services/dbservices.php';
    include './services/jsonService.php';
    include './config.php';
    $dbSrv = new dbServices($hostName,$userName,$password,$dbName);
    if($dbSrv->dbConnect()){
        $dbSrv->insert('user_tb',[10505,'"test"','"test"','"test133@mail.com"','"test"',0],[`uid`, `fname`, `lname`, `email`, `pass`, `role`]);
    }else{
        echo "problem";
    }
?>