<?php

$user = "Customer";


$pagbati = 

$gpu = [
    'RTX 3070',
    'RTX 4070',
    'RTX 5070',
];


$processor = [
    'RYZEN 5',
    'RYZEN 7',
    'Intel i9',
];


$motherboard = [
    'ASUS PRIME',
    'ROG STRIX',
    'MSI Motherboard',
];

$ram = [
    'HyperX 8GB RAM',
    'Kingston Fury 16GB RAM',
];


$cooling_fan = [
    'Redragon Cooling Fans',
];

$power_supply = [
    'Redragon Power Supply',
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <style>
    body {
        background-color:rgb(241, 197, 113);
        
    }
  </style>

    <title>PC-TIK</title>
</head>
<body>
    <h1>PC-TIK</h1>
    <h2>You dream it, We build it!</h2>

    <strong> GPU'S IN STOCK:</strong>
    <p> <?php echo $gpu[0]; ?> </p></p>
    <p> <?php echo $gpu[1]; ?> </p></p>
    <p> <?php echo $gpu[2]; ?> </p></p>

    <strong> PROCESSORS IN STOCK:</strong>
    <p> <?php echo $processor[0]; ?> </p></p>
    <p> <?php echo $processor[1]; ?> </p></p>
    <p> <?php echo $processor[2]; ?> </p></p>

    <strong> MOTHERBOARDS IN STOCK:</strong>
    <p> <?php echo $motherboard[0]; ?> </p></p>
    <p> <?php echo $motherboard[1]; ?> </p></p>
    <p> <?php echo $motherboard[2]; ?> </p></p>
    
    <strong> RAM'S IN STOCK:</strong>
    <p> <?php echo $processor[0]; ?> </p></p>
    <p> <?php echo $processor[1]; ?> </p></p>

    <strong> COOLING FANS IN STOCK:</strong>
    <p> <?php echo $processor[0]; ?> </p></p>

    <strong> POWER SUPPLIES IN STOCK:</strong>
    <p> <?php echo $processor[0]; ?> </p></p>
    
</body>
</html>
