<?php  
    $directorio  = basename(getcwd());
    $Directorios = ['BuscarPeludo','contactanos','prueba'];  
    $p =  array_search('BuscarPeludo',$Directorios);
    var_dump($p);
?>