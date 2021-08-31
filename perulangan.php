<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan PHP</title>
</head>
<body>
    
<?php

$angka = 1;
while($angka <= 10){
    echo $angka." ";
    $angka++;
}

echo "<br />";

$angka = 1;
do{

echo $angka." ";
    $angka++;

}while ($angka <= 10);
echo "<br />";

for($a = 1; $a<=10; $a+=2){
    echo $a." ";
}
echo "<br />";

$data = array(20,30,40,50,60);
foreach ($data as $key => $value){
    echo $value." ";
}


//foreach akan digunakan untuk melooping sebuah array

?>

</body>
</html>