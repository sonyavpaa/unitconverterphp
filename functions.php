<html>
    <?php 
    function ftoc ($value = 1 ):float {
        
        return ((int)($value) - 32) * .5556;
    }
    // celcius to fahrenheit
function ctof($value = 1):float {
   
    return ((int)$value * 1.8) + 32;
}
// km/h to m/s
function  kmhtoms ($km = 1) { 
    return number_format(((int)$km / 3.6), 4, '.', ',');
}

// km/h to knots
function kmhtok ($km = 1) {
    return number_format(((int)$km / 1.852), 4, '.', ',');
}

// kg to g 
function kgtog ($value = 1):float {
  
    return (int)$value * 1000;
} 

// g to kg
function gtokg($value = 1):float {
  
    return (int)$value/1000;
}

    $origF = $_POST["ftoc"] ? $_POST["ftoc"] : 1 ;
    $origC = $_POST["ctof"] ? $_POST["ctof"] : 1 ;
    $origKmhtos = $_POST["kmhtoms"] ? $_POST["kmhtoms"] : 1;
    $origKmhtok = $_POST["kmhtok"] ? $_POST["kmhtok"] : 1;
    $origKg = $_POST["kgtog"] ? $_POST["kgtog"] : 1;
    $origG = $_POST["gtokg"] ? $_POST["gtokg"] : 1;


    $result01 = ftoc($_POST["ftoc"] ? $_POST["ftoc"] : 1 );
    $result02 = ctof($_POST["ctof"] ? $_POST["ctof"] : 1);
    
    $result03 = kmhtoms($_POST["kmhtoms"] ? $_POST["kmhtoms"] : 1);
    $result06 = kmhtok($_POST["kmhtok"] ? $_POST["kmhtok"] : 1);

    $result04 = kgtog($_POST["kgtog"] ? $_POST["kgtog"] : 1);
    $result05 = gtokg($_POST["gtokg"] ? $_POST["gtokg"] : 1);

include "main.php";
    ?>

    

<body>
    
  <?= $origF . " Fahrenheits in Celcius is " . $result01; ?><br>
  <?= $origC . " Celcius in Fahrenheit is " . $result02; ?><br>
  <?= $origKmhtos . " Kilometers per Hour to Meters per Seconds is " . $result03; ?><br>
  <?= $origKmhtok . " Kilometers per Hour to Knots is " . $result06; ?><br>
  <?= $origKg . " kg in grams is " . $result04; ?><br>
  <?= $origG . " grams in kg is " . $result05; ?><br>

  <a href="main.php">Refresh</a>


  

</body>

</html>