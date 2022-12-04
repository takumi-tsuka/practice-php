<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "hello world";

$students =['Damrok'=>[78,89,57,100],'Clare'=>[85,68,78,95],'Yooran'=>[76,98,45,100],'Takumi'=>[54,89,88,98]]; 
?>
<table border ="1"> 
    <thead>
        <tr>
            <th>name</th>
            <th>score1</th>
            <th>score2</th>
            <th>score3</th>
            <th>score4</th>
            <th>MAX</th>
            <th>MIN</th>
            <th>AVG</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $totalAvg =[];
            $MAX = 0;
            $MIN = 100;
            foreach($students as $names => $marks){
                echo "<tr>";
                echo "<td>$names</td>";
                $max = 0;
                $min = 100;
                $sum = 0;
                foreach($marks as $mark){
                    echo "<td>$mark</td>";
                    $sum +=$mark;

                    if($max < $mark){
                        $max = $mark;
                    }

                    if ($min > $mark){
                        $min = $mark;
                    }
                }
                $avg = $sum /count($marks);
                echo "<td>$max</td>";
                echo "<td>$min</td>";
                echo "<td>$avg</td>";
                echo "</tr>";
                $totalAvg[$names] = $avg;

                if($MAX <$max){
                    $MAX = $max;
                    $mst = $names;
                }
                if($MIN>$min){
                    $MIN = $min;
                    $minst = $names;
                }
            }
            echo $mst;
            echo $minst;
            
            $SUM = 0;
            foreach($totalAvg as $names => $AVG){
                $SUM = $SUM + $AVG;
            }
            echo "<h1>".$SUM/count($totalAvg)."</h1>";


            foreach($totalAvg as $names => $AVG){
                if($AVG> $SUM/count($totalAvg)){
                    echo "<h2>more than avg:$names:$AVG</h2>";
                }
            }

            foreach($totalAvg as $names => $AVG){
                if($AVG <$SUM/count($totalAvg)){
                    echo "<h2>less than avg;$names:$AVG</h2>";
                }
            }


        
        
        ?>
    </tbody>
</table>
    
</body>
</html>