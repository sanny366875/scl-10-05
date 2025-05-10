<?php session_start();

    require_once ("database.php");
    
    function get_header (){
        require_once ("header.php");
    }

    function login () {
        require_once ("login.php");
    }

    function registration  () {
        require_once ("registration.php");
    }

    function show_more (){
        require_once("show_more.php");
    }

    function all_users (){
        require_once("all_users.php");
    }

    function footer () {
        require_once ("footer.php");
    }
?>