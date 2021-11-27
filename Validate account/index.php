<?php

function checkAcount($acount) {
    $pattern = '/^[_a-z0-9]{6,}$/';
    if(preg_match($pattern,$acount)) {
        echo "Tài khoản hợp lệ";
    }else {
        echo "Tài khoản không hợp lệ";
    }
}

checkAcount('abcde');
