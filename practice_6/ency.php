<?php
    $file = fopen("./data/contactlist.json","r"); //open contact.json by read mode
    $data = fread($file,filesize('./data/contactlist.json'));  //read contact.json
    fclose($file);  //close the json file
    $key = "Hotdog";  //key
    $cipher_alog = "aes-256-gcm";  //select algorithm
    $ivlen = openssl_cipher_iv_length($cipher_alog); //get the length of the algorithm key
    $iv = openssl_random_pseudo_bytes($ivlen); //use the length of the key to generate a pseudo random number with same length
    $enc_text = openssl_encrypt($data,$cipher_alog,$key,0,$iv,$tag); //encrypt $data
    $ivdata = [$iv,$tag]; //keep $ivdata and $tag
    // print_r($ivdata);
    // $aaa = implode(",",$ivdata);
    // echo "<br>";
    // print_r($aaa);

    // save $ivdata in ivs.dat
    $file = fopen("./data/ivs.dat","w");
    fwrite($file,implode(",",$ivdata));  //implode -> change from array to stings
    fclose($file);

    //save $enc_text = encrypted $data in contactlist.json
    $file = fopen("./data/contactlist.json","w");  //open contactlist.json by weite mode
    fwrite($file,$enc_text);  //write $enctext in $file = contactlist.json
    fclose($file);
    echo "<h1>$enc_text</h1>";
    echo "<br>";
    $dec_text = openssl_decrypt($enc_text,$cipher_alog,$key,0,$iv,$tag);
    echo "<h1>$tag</h1>";
    echo "<br>";
    echo "<h1>$dec_text</h1>";
?>