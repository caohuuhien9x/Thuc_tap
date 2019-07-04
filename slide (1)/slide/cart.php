<?php

    $_SESSION['name'] = '';
    
    unset($_SESSION['name']);

    sesssion_distroy();

    setcookie('namecookie', 'value', time() + 3600);

    unset($_COOKIE['namecookie']);

?>