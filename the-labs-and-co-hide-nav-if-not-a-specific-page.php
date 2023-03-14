<?php 

    $currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

    if (stripos($currentUrl, '//thelabsand.co/skill/tearsheets/') == FALSE)
    {
        wp_nav_menu(array('menu' => 'Portfolio'));
    }

?>