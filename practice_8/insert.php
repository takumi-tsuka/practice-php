<?php
include './dbservices.php';
include './config.php';
include './jsonService.php';


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
            // $json = new jsonService('./data/students.json');
            $json1 = new jsonService('./data/teachers.json');
            $techArray = $json1->jsontoArray();

            // $dataArray = $json->jsontoArray();
            // print_r($dataArray);

            // foreach($dataArray as $val){
            //     echo "<tr>";
            //     foreach($val as $a){
            //         echo "<td>$a</td>";
            //     }
            //     echo "</tr>";
            // }
            ?>
        </tbody>
    </table>
    <?php
        $dbService = new dbServices($hostName,$userName,$password,$dbName);

        $dbcon = $dbService->dbConnect();
        if($dbcon->connect_error){
            echo "error";
        }else{
            
            // foreach($dataArray as $json){
            //     $fields = [];
            //     $values = [];
            //     foreach($json as $key=>$val){
            //         array_push($fields,$key);
            //         if($key == 'stID'){
            //             array_push($values,$val);
            //         }else{
            //             array_push($values,"'$val'");
            //         }
            //     }
            //     $dbService->insert('st_tb',$values,$fields);
            // }

            foreach($techArray as $tech){
                $fields = [];
                $values = [];
                foreach($tech as $key=>$a){
                    array_push($fields,$key);
                    if($key == 'id'){
                        array_push($values,$a);
                    }else{
                        array_push($values,"'$a'");
                    }
                }
                $dbService->insert('teach_tb',$values,$fields);
            }
            $dbcon->close();
        }

    ?>
</body>
</html>