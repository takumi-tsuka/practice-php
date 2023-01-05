<?php include './pages/header.php'; ?>
<?php 
    if(isset($_GET['p'])){
        include './pages/'.$_GET['p'].'.php';
    }else{
        include './pages/home.php'; 
    }
    if(isset($_GET['m'])){
        session_destroy();
        header("Location: $baseName");
        exit();
    } 
    
    if(isset($_GET['t'])){
    switch($_GET['t']){
        case "chp":
            $pass = $_POST['pass'];
            $pass = password_hash($pass,PASSWORD_DEFAULT);
            $dbcon = new mysqli($dbConfig[0],$dbConfig[1],$dbConfig[2],$dbConfig[3]);
            if($dbcon->connect_error){
                echo "connection error";
            }else{
                $updateCmd = "UPDATE user_tb SET pass = '$pass' WHERE uid=10001
                ";
                $result = $dbcon->query($updateCmd);
                if($result===TRUE){
                    echo "updated";
                    echo $_POST['pass'];
                }else{
                    echo $dbcon->error;
                }
                $dbcon->close();
            };
            break;
        case "lg":
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $dbcon = new mysqli($dbConfig[0],$dbConfig[1],$dbConfig[2],$dbConfig[3]);
            if($dbcon->connect_error){
                echo "connection error";
            }else{
                $select = "SELECT * FROM user_tb WHERE email='$email'";
                $result = $dbcon->query($select);
                if($result->num_rows > 0){
                    $user = $result->fetch_assoc();
                    if(password_verify($pass,$user['pass'])){
                        $_SESSION['loguser'] = $user;
                        echo "user found";
                        // print_r($_SESSION['loguser']) ;
                    }else{
                        echo "user not found";    
                    }
                }else{
                    echo "user not found";
                }
                $dbcon->close();
            };
            break;
        } 
    }
?>
<?php include './pages/footer.php'; ?>

<!-- 
1. When user logged in. Display the user fname and lname as the Navbar title.
2. Hide the Login menu.
3. Show the Change password. and let the logged in user to change the password. 
-->