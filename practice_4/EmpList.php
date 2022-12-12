<?php
    if(file_exists('./EmpData/EmpData.txt')){
        $file = fopen('./EmpData/EmpData.txt','r');
        $data = fread($file,filesize('./EmpData/EmpData.txt'));
        $data = json_decode($data,true);
        fclose($file);
    }
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
    <table border="1">
        <thead>
            <tr>
                <th>name</th>
                <th>position</th>
                <th>department</th>
                <th>salary</th>
                <th>Mstatus</th>
                <th>New salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($data as $val){
                    echo "<tr>";
                    foreach($val as $a){
                        echo "<td>$a</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <?php
        $sum =0;
        foreach($data as $val){
            $sum += $val['newSalary'];
        }
        // echo $sum;
        echo "<h1>average is ".$sum/count($data)."</h1>";
        $avg = $sum/count($data);
        foreach($data as $val){
            if($avg < $val['newSalary']){
                echo "<h1>".$val['name']."</h1>";
            }
        }
    ?>
</body>
</html>
