<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $pos = $_POST['pos'];
        $dep = $_POST['dep'];
        $salary = $_POST['salary'];
        $mstatus = $_POST['Mstatus'];
        if($mstatus == 'married'){
            $newSalary = $salary+$salary*0.1;
        }else{
            $newSalary = $salary;
        }
        $newArray = ['name'=>$name,'position'=>$pos,'department'=>$dep,'salary'=>$salary,'mstatus'=>$mstatus,'newSalary'=>$newSalary];
        $dataArray = [];
        if(!file_exists("./EmpData/EmpData.txt")){
            array_push($dataArray,$newArray);
            $file = fopen("./EmpData/EmpData.txt",'w');
            fwrite($file,json_encode($dataArray));
            fclose($file);
        }else{
            $file = fopen("./EmpData/EmpData.txt",'r');
            $dataArray = fread($file,filesize("./EmpData/EmpData.txt"));
            $dataArray= json_decode($dataArray,true);
            fclose($file);
            array_push($dataArray,$newArray);
            $file = fopen("./EmpData/EmpData.txt",'w');
            fwrite($file,json_encode($dataArray));
            fclose($file);
        }
    }
    
?>