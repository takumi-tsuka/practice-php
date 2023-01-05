<?php
include './services/dbservices.php';
include './services/jsonService.php';
include './config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbservice = new dbServices($hostName,$userName,$password,$dbName);
        $dbcon= $dbservice->dbConnect();
        if(!$dbcon->connect_error){
            $sql = "SELECT * FROM course_tr INNER JOIN course_tb WHERE course_tr.cid = course_tb.cid ";
            $result = $dbcon->query($sql);

            // $result = $dbservice->innerjoin('user_tb','course_tr','uid');
            foreach($result as $val){
                foreach($val as $a){
                    echo $a;
                }
            }
        }
    ?>
</body>
</html>