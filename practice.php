<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $course = $_POST['course'];
    $dataArray = [];
    $newArray =["name"=> $name,"course"=>$course];
    print_r($dataArray);
    if(file_exists("./data/practice.json")){
        $file = fopen("./data/practice.json",'r');
        $dataArray = fread($file,filesize("./data/practice.json"));
        $dataArray = json_decode($dataArray,true);
        fclose($file);
        array_push($dataArray,$newArray);
        $file = fopen("./data/practice.json",'w');
        fwrite($file, json_encode($dataArray));
        fclose($file);
        echo "added";
    }else{
        $file = fopen("./data/practice.json",'w');
        array_push($dataArray,$newArray);
        fwrite($file,json_encode($dataArray));
        fclose($file);
        echo "made file and added";
    }
}
// $eden = 1;
// $takumi = 2;
// // echo $eden ;
// // echo $takumi;
// $newArray = ['stID' =>$eden,'eden'=>$takumi];
// print_r($newArray);

?>