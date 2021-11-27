<?php


function checkName($name) {
    $pattern = '/^(C|A|P)+([0-9]{4})+(G|H|I|K|L|M)$/';
    if(preg_match($pattern,$name)) {
        echo "Hợp lệ";
    }else {
        echo "Không hợp lệ ";
    }
}

checkName('P0323A');
