<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>product name</th>
                <th>price</th>
            </tr>
            <tbody>
                <?php
                $file = fopen('./data/simpleProducts.json','r');
                $datas = fread($file,filesize('./data/simpleProducts.json'));
                $datas = json_decode($datas,true);
                fclose($file);
                // print_r($datas);
                $sum = 0;
                $max = $datas[0]['price'];
                $min = $datas[0]['price'];
                foreach($datas as $key =>$data){
                    echo "<tr>";
                    echo "<td>".$data['productName']."</td><td>".$data['price']."</td>";
                    echo "</tr>";
                    $sum += $data['price'];
                    $avg = $sum / count($datas);
                    if($max < $data['price']){
                        $max = $data['price'];
                        $maxpro = $data['productName'];
                    }
                }
                // $min = $max;
                foreach($datas as $data){
                    if($min > $data['price']){
                        $min = $data['price'];
                        $minpro = $data['productName'];
                    }
                }
                    ?>
            </tbody>
        </thead>
    </table>
    <?php
        echo "<h1>$avg</h1>";  
        foreach($datas as $data){
            if($avg<$data['price']){
                $hipro = $data['productName'];
                echo "<h1>$hipro</h1>";
            }
        }
        echo "<h1>max product:$maxpro;max price:$max;</h1>";
        echo "<h1>min product:$minpro;min price:$min;</h1>";
        
        ?>
    
</body>
</html>