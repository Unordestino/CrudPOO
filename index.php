<?php

spl_autoload_register(function($classe){
    if(file_exists($classe . '.php')){
        require_once $classe . '.php';
    }
});

$classe = isset($_REQUEST['class']) ? $_REQUEST['class'] : null;
$metodo = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;



if (class_exists($classe)){
    $pagina = new $classe($_REQUEST);

    if(!empty($metodo) && method_exists($classe, $metodo)){
        $pagina->$metodo($_REQUEST);
    }
    $pagina->show(); 
}