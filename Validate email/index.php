<?php

function checkMail($mail) {
    $regex = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
   if(preg_match($regex,$mail)){
       echo "Hợp lệ";
   }else {
       echo "không hợp lệ";
   }
}

checkMail('ab@gmail.');