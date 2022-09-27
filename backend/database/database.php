<?php
    function conectaBD(){
        return new PDO("mysql:host=localhost; dbname=dbcarro", "root","");
    }
?>