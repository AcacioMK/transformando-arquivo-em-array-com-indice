<?php
    $arquivo = file("dados.txt");
    $chaves = ['id', 'Nome', 'Tipo', 'Tipo', 'Raio', 'Massa', 'Rotação', 'Período Orbital', 'Periélio', 'Afélio'];
    #var_dump ($arquivo);
    foreach($arquivo as $linha){
        
        $valores = explode(" ", trim($linha));
        $array_final[] = array_combine($chaves, $valores);
    }
    
    var_dump($array_final);
?>