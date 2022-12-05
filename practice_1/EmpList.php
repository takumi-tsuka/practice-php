<?php
if(file_exists('./data/Empdata.txt')){
    $dataFile = fopen('./data/Empdata.txt','r');
    $Array = fread($dataFile,filesize('./data/Empdata.txt'));
    fclose($dataFile);
    $dataArray = json_decode($Array,true);
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
    <table border ="1">
        <thead>
            <tr>
                <th>full name</th>
                <th>position</th>
                <th>department</th>
                <th>salary</th>
                <th>marriage status</th>
                <th>final salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sum = 0;
                foreach($dataArray as $datas){
                    echo '<tr>';
                    foreach($datas as $data){
                        echo "<td>$data</td>";
                    }
                    echo '</tr>';
                    $sum +=$datas['fsalary'];
                }
            ?>
        </tbody>
    </table>
    <?php
    echo "<h1>average of final salary :".$sum/count($dataArray)."</h1>";
    foreach($dataArray as $datas){
        if($datas['fsalary']>$sum/count($dataArray)){
            echo "<h2>higher than avg:".$datas['name']."</h2>";
        }
    }
        
    ?>
</body>
</html>