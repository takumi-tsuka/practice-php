<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>date:</h1>
    <?php
        $array = ['SUNDAY','MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY'];

        $date = $_POST['date'];
        $date = new Datetime($date);
        $weekdate = $date->format('w');
        echo $array[$weekdate];
    ?>
</body>
</html>