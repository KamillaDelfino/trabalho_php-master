<h1>Funcionário</h1>

<?php
 $pathback = "./backend/funcionario/";

 if(isset($_GET['action'])) {
    switch($_GET['action']){
       case "delete":
       require_once($pathback."delete.php");
       break;
       case "update":
           require_once($pathback."update.php");
       break;
    }
}

?>