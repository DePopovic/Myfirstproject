<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../integration/Dbhandler.php';
class Palindroom{
    private $text;
    private $flippedText;

    function flipText($text){
        $flippedText = "";
        $this->text = $text;
        for ($index = strlen($text)-1; $index >= 0 ; $index--){
            $flippedText = $flippedText.$text[$index];
        }
        $this->flippedText = $flippedText;
    }

    function getFlippedText(){
        return $this->flippedText;
    }
    
    function heeftFlippedTextEenBetekenis(){
        $db = new DBHandler();
        return $db->findWoord($this->flippedText);
    }
    
}
