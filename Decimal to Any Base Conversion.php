<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal to Any Base Conversion</title>
</head>
<body>

<?php
function convertToBase($number = 140, $base = 8) {
    return base_convert($number, 10, $base);  /// i used PHP`s built-in function base_convert 
}
echo "140 in octal is: " . convertToBase() . "<br>";
echo "200 in hex is: " . convertToBase(200,16) . "<br>";
echo "160 in binary is: " . convertToBase(160,2) . "<br>";
?>

</body>
</html>