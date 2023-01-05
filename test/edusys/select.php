<?php
include './services/dbservices.php';
include './config.php';
include './services/jsonService.php';

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
    <table>
        <tbody>
            <?php
            $dbservices = new dbServices($hostName,$userName,$password,$dbName);

            //all user
            $dbcon= $dbservices->dbConnect();
            // if(!$dbcon->connect_error){
            //     $result = $dbservices->select('user_tb');
            //     // print_r($result);

            //     foreach($result as $val){
            //         echo "<tr>";
            //         foreach($val as $a){
            //             echo "<td>$a</td>";
            //         }
            //         echo "</tr>";
            //     }
            // }

                //only show role = 2
            // if(!$dbcon->connect_error){
            //     $sql = "SELECT `uid`, `fname`, `lname`, `email`,`role` FROM `user_tb` WHERE role=2";
            //     $result = $dbcon->query($sql);
            //     foreach($result as $val){
            //         foreach($val as $a){
            //             // echo $a;
            //         }
            //     }
            // }

            //update fname and lname of user that the uid =10003
            // if(!$dbcon->connect_error){
            //     $sql = "UPDATE `user_tb` SET `fname`='yusuke',`lname`='imai' WHERE uid=10003";
            //     $dbcon ->query($sql);
            // }


            // if(!$dbcon->connect_error){
            //     if($dbservices->update('user_tb',['fname'=>'"test"','lname'=>'"test"'],['uid'=>10003,'uid'=>10004])){
            //         echo 'updated';
            //     }else{
            //         echo 'not updated';
            //     }
            // }
            //hitorisikadenai
            
            // if(!$dbcon->connect_error){
            //     $result = $dbservices->select('user_tb',['role'=>0,'fname'=>'"Trace"','fname'=>'"Dorene"'],'AND',['email','pass']);
            //     $user = $result->fetch_assoc();
            //     print_r($user);
            // }
            //hitorisikadenai

            if(!$dbcon->connect_error){
                $result = $dbservices->select('user_tb',['role'=>0,'fname'=>'"Trace"'],'AND',['email','pass']);

    
                foreach($result as $val){
                    foreach($val as $a){
                        echo $a;
                    }
                }
            }

            ?>
        
        </tbody>
    </table>
    
</body>
</html>