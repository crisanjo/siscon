<?php
//header("Content-type: text/xml");
include_once("conexao.php");
//ini_set('max_execution_time', 5);
//set_time_limit(5);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$t = $_GET['t'];
$xml = "<xml>";
$xml .= "<entidades>";
if($t == 1){
    $i=0;
    $conect = new Conect();
    $conn = $conect->conectaPG();
    
    while ($i++<10) {
       // $result = pg_query($conn, "SELECT * FROM faturamento order by 1 desc");
       $result = pg_query($conn, "SELECT * FROM faturamento  order by 1 desc limit 10") or die('Error message: ' . pg_last_error());
        while ($row = pg_fetch_assoc($result)) {
            $xml .= "<entidade>";
            $xml .= "<id>" .  $row["fat_codigo"] . "</id>";
            $xml .= "<valor>" .  $row["fat_valor"] . "</valor>";
            $xml .= "</entidade>";
        }
    } // or anything other arbitrary that takes time
    //die('Done');
   // $array = ["result"=> "ok"];
   // echo json_encode($array);
   
}
$xml .= "</entidades>";
$xml .= "</xml>";
print $xml;
?>