
<?php
include './config.php';

$dbcon = new mysqli($hostName,$userName,$password,$dbName);

// $email = "mail@mail.com";
// $pass = "test";
$sql = $dbcon->query("INSERT INTO `user_tb`(`uid`, `first_name`, `last_name`, `email`, `phone`, `pass`, `age`, `role`, `dis`) VALUES (20,'riku','riku','email','335-892-615','pass',23,0,0)");


$check=$stmt->execute();
if($check){
echo "success";
}else{
echo "error";
}
?>

<!-- INSERT INTO `user_tb`(`uid`, `first_name`, `last_name`, `email`, `phone`, `pass`, `age`, `role`, `dis`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]') -->