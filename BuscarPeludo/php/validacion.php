<?php

var_dump($_GET);

if(!empty($_GET['cod'])){
    header("location:../search.php?cod=$_GET[cod]&status=true");
}else{
    
    header("location:../index.php?status=false");
}


?>