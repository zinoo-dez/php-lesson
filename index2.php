<?php 
echo "hello world";
// echo phpinfo();
$name = "bobo";
define('pi', '3.14');//const variable (global variable)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <p>my name is <?php echo $name; ?></p>
    <p>pi value is <?= pi; ?></p>
</body>

</html>