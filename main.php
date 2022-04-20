<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <div>   
        <form action="functions.php" method="post">
        <div>
         <label>
        Fahrenheits to Celcius add fahrenheit:</label> <input type="number" name="ftoc"> </div>
        <div>
        <label>
        Celcius to Fahrenheit add Celcius:</label>  <input type="number" name="ctof"> </div>
        <div>
        <label>
        Kilometers per Hour to Meters per Seconds:</label>  <input type="number" name="kmhtoms"> </div>
        <div>
        <label>
        Kilometers per Hour to Knots:</label>  <input type="number" name="kmhtok"></div>
        <div>
        <label>
        Kilograms in grams add kg:</label>  <input type="number" name="kgtog"></div>
        <div>
        <label>
        Grams in kg add kg </label> <input type="number" name="gtokg">
        </div>
        <button type="submit" name="submit">submit</button>
  </form>
  

    </div>
    
</body>
</html>