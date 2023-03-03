<?php
session_start();
    if(!isset($_SESSION["numero"])){
        $_SESSION["numero"] == 1;
        header("Location: ./home.php");
    }
   if(isset($_GET["cont"]) && ($_GET["cont"]=="1")){
        $_SESSION["numero"]++;
        header("Location: ./home.php");
    }
    if(isset($_GET["cont"]) && ($_GET["cont"]=="0")){
        $_SESSION["numero"]--;
        header("Location: ./home.php");
    }
?>