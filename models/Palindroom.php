<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo flipText("okj");

function flipText($text){
    $flippedText = "";
    for ($index=strlen($text) ; $index >= 0;$index--){
        $flippedText = $flippedText.$text[$index];
    }
   return $flippedText;     
}
