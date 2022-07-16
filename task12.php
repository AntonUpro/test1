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
function my_fun (int $num) {
    if ($num==27) {
        return 13;
    } 
    else {
        return "Вы ввели не число 27 \n";
    }
}
function my_fun2 (int $num) {
    
}
echo my_fun(16);
print "<br>";
echo my_fun(27);
?>  
</body>
</html>