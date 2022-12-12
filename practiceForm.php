<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/practice-php/practice.php" method="post">
        <input type="text" name="name" placeholder="your name">
        <input type="text" name="course" placeholder="course">
        <input type="submit">
    </form>
</body>
</html>
<table border="1">
    <thead>
        <tr>
            <th>name</th>
            <th>html</th>
            <th>css</th>
        </tr>
    </thead>
    <tbody>
<?php
$array = ['Damrok'=>['html'=>90,'CSS'=>100],'Clair'=>['html'=>80,'CSS'=>55]];
$numArray = ['html'=>0,'css'=>10,'java'=>20,'javascript'=>30,'php'=>40,'R'=>50,'C'=>60,'C+'=>70,'C++'=>80,'python'=>90];
print_r($numArray);
foreach($array as $name=>$marks){
    echo "<tr><td>$name</td>";
    foreach($marks as $mark){
        echo "<td>$mark</td>";
    }
    echo "</tr>";
}
?>
    </tbody>
</table>