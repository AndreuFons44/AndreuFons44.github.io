<?php 
$abyssrank = $_GET['abyssrank'];
$date_start = $_GET['date_start'];
$date_end = $_GET['date_end'];
$abyss = array('0' => "Forbidden",'1' => "Sinful 1",'2' => "Sinful 2",'3' => "Sinful 3",'4' => "Agony 1",'5' => "Agony 2",'6' => "Agony 3",'7' => "Redlotus",'8' => "Nirvana");
$abyssreword = array('0' => 80,'1' => 90,'2' => 100,'3' => 120,'4' => 180,'5' => 240,'6' => 320,'7' => 400,'8' => 420);
$reward;
if (empty($_POST["crystal"])) {
    $crystal = $_GET['crystal'];
}


echo "Rango: " . $abyss[$abyssrank] . "<br>Crystal: " . $crystal . "<br>Fecha inicio: " . $date_start . "<br>Fecha final: " . $date_end;
echo "<br><br>";
function fecha($crystal,$date_start,$date_end,$cantidad,$abyssrank,$abyssreword){  
    $date_original = $date_start;
    $date_original_end = $date_end;
    $dias = 0;
    $dia = array();
    $arraycrystal = array();
    $crystalcal = $crystal;
    for ($x = 0; $x <= $cantidad; $x++) {
        //Fecha
        if ($date_original == $date_original_end) {
            $crystal = reward($crystal,date("l", strtotime($date_original)),$abyssrank,$abyssreword);
            //echo "Fecha " .  $date_original . " " .  date("l", strtotime($date_original)) . " " . "Crystal: " . $crystal . "<br><br>";
            array_push($dia,$date_original);    
            array_push($arraycrystal,$crystal);        
            ++$dias;
            break;
        }else{
            $crystal = reward($crystal,date("l", strtotime($date_original)),$abyssrank,$abyssreword);
            //echo "Fecha " .  $date_original . " " .  date("l", strtotime($date_original)) . " " . "Crystal: " . $crystal . "<br><br>";
            $date_original = date_calc($date_original);
            array_push($dia,$date_original);    
            array_push($arraycrystal,$crystal);        
            ++$dias;
        }
      }
    

    return "Recompensas $dias dias - $crystal Crystales";
}
//Suma del dia
function date_calc($date_calc){
    $date_calc = date("Y-m-d",strtotime($date_calc."+ 1 days")); 
    return $date_calc;
}
//Recompensa diaria + abyss
function reward($crystal,$date,$abyssrank,$abyssreword){
    $dutyreward = 40;
    $crystal = $crystal + $dutyreward;
    if ($date == "Wednesday" or $date == "Sunday") {      
        //echo "Reward Abyss<br>";
        $crystal = $crystal + $abyssreword[$abyssrank] + 100;
    }
    if ($date == "Tuesday" or $date == "Wednesday") {      
        //echo "Reward MA<br>";
        $crystal = $crystal + 50;
    }
    if ($date == "Monday") {      
        //echo "Reward ER<br>";
        $crystal = $crystal + 500;
    }   
    return $crystal;
}

echo fecha($crystal,$date_start,$date_end,365,$abyssrank,$abyssreword);
echo "<br>";
?>