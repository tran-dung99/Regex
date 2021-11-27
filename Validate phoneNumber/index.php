<?php

function checkPhoneNumber($number) {
    $pattern = '/[(][0-9]{2}[)][-][(]+(0)+[0-9]{9}[)]/';
    if(preg_match($pattern,$number)) {
        echo "Số điện thoại hợp lệ";
    }else echo "Số điện thoại không hợp lệ";
}

checkPhoneNumber('(a8)-(22222222)');
