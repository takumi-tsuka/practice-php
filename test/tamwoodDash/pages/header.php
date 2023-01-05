<?php include './config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>TAMWOOD DASH</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: darkblue;">
            <a class="navbar-brand" href="#"><?php 
            if(isset($_SESSION['loguser'])){
                echo $_SESSION['loguser']['fname'].$_SESSION['loguser']['lname'];
            }else{
                echo "Nav Bar";
            }
             ?></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo $baseName.'?p=test' ?>" aria-current="page">change password </a>
                    </li>
                    <li class="nav-item" style="display:
                    <?php if(isset($_SESSION['loguser'])){
                        echo "none";
                    }else{
                        "block";
                    }?>
                        ;">
                        <a class="nav-link" href="<?php echo $baseName.'?p=login' ?>">Login</a>
                    </li>
                    <li class="nav-item" style="display:
                    <?php if(!isset($_SESSION['loguser'])){
                        echo "none";
                    }else{
                        "block";
                    }?>
                        ;">
                        <a class="nav-link" href="<?php echo $baseName.'?m=logout' ?>">Log Out</a>
                    </li>
                   
                </ul>
             
            </div>
        </nav>
        
    </header>
    <main class="container-fluid">

    