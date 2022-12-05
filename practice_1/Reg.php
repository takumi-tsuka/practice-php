<?php
    $fsalary = 0;
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $position = $_POST['position'];
        $department = $_POST['department'];
        $salary = $_POST['salary'];
        $mstatus = $_POST['mstatus'];

        if($mstatus == 'married'){
            $fsalary = $salary + $salary*0.1;
        }else{
            $fsalary = $salary;
        }

        $newArray = ['name'=>$name,'position'=>$position,'department'=>$department,'salary' => $salary,'mstatus'=>$mstatus,'fsalary'=>$fsalary];
        if(file_exists('./data/Empdata.txt')){
            $dataFile = fopen('./data/Empdata.txt','r');
            $readData = fread($dataFile,filesize('./data/Empdata.txt'));
            fclose($dataFile);
            $dataArray = json_decode($readData,true);
            array_push($dataArray,$newArray);
            $dataFile = fopen('./data/Empdata.txt','w'); //$dataArrayにpushしてるから、ここで'w'使ってすべてoverwriteしてる？
            fwrite($dataFile,json_encode($dataArray));
            fclose($dataFile);
        }else{
            $dataArray = [];
            array_push($dataArray,$newArray);
            $dataFile = fopen('./data/Empdata.txt','w');
            fwrite($dataFile,json_encode($dataArray));
            fclose($dataFile);
        }
    }
?>