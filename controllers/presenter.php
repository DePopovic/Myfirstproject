<?php

include_once '../models/Palindroom.php';
if (!empty($_POST)){
    if (checkPostArguments()){
        $woord = $_POST["naam"];
        if(strlen($woord)){
            $palindroom = new Palindroom();
            $palindroom->flipText($woord);
            if ($palindroom->heeftFlippedTextEenBetekenis()){
                $viewData = array(
                    "palindroom" => $palindroom->getFlippedText(),
                    "message" => "het woord heeft een betekenis"    ,
                    "action" => "vul nog een woord in of sluit de browser"
                );
            }
            else{
                $viewData = array(
                    "palindroom" => $palindroom->getFlippedText(),
                    "message" => "het woord heeft geen betekenis",
                    "action" => "vul nog een woord in of sluit de browser"
                );
            }
        }
        else{
            $viewData = array(
                    "palindroom" => "",
                    "message" => "u heeft niets ingevuld",
                    "action" => "vul een woord in of sluit de browser"
                );
        }
        include_once '../views/View.php';
        
        
    }else{
        echo "geen kaas";
        http_response_code(400);
    }
   
   
}
else {
    http_response_code(400);
}

function checkPostArguments(){
    $validArguments = array("naam", "submit");
    $aantalArgumentenInPost = sizeof($validArguments);
    return TRUE;
    
//    if(sizeof($_POST) ==  $aantalArgumentenInPost ){
//        for ($index =0; $index < $aantalArgumentenInPost; $index++){
//            if(!isset($_POST[$validArguments[$index]])){
//                return FALSE;
//            }
//        }
//        return TRUE;
//    }
//    return FALSE;
}