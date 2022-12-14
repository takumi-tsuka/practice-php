<?php
    $file = fopen("data/simpleProducts.json","r");
    $datas = fread($file,filesize("data/simpleProducts.json"));
    $datas = json_decode($datas,true);
    fclose($file);
    print_r($datas);
?>