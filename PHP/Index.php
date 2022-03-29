<title>PHP</title>
<link rel="icon" type="image" href="https://www.objectsol.in/images/ourteam.png">
<?php

echo "<br>".'Привет миришка, <b><h1>хахахахах.</h1></b>';
$a=5;
echo"Первое число   ".$a."<br>";
$b=22;
echo"Второе число   ".$b."<br>";
$l=$a+$b;
echo"Сложение ".$l.'<br>'.'<br>';
$l++;
echo"Инкримент --  ".$l.'<br>'.'<br>';
$A=65;
switch($A)
{
    case 65:
        echo"Verno";
        break;
    case 73:
        echo"Xynta";
        break;
}
echo"<br>"."<br>"."<br>";
$i=1;
for($i=0;$i<=10;$i++)
{ $k=$i+1;
    echo "Это ".$k." круг цыкла, и он равен  -     ".'<tr>'.$i."<br>";
}

?>