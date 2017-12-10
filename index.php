<?php
header('Content-Type: application/json');
try{
$tab = array("personnes"=>array("prenom" => "Beb", "nom" => "Ouze"));
echo json_encode($tab);
} catch (Exception $e){
//    var_dump($e);
    echo "Pbs";
}