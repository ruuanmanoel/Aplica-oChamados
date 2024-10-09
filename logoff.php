<?php 
    session_start();
    //remove indice de qualquer array
    // unset(); remove apensas se o indice existir

    session_destroy(); //força redirecionamento pois as variaveis de sesão so fica indiponivel, apos a nova requisição
    header("Location: index.php");
?>