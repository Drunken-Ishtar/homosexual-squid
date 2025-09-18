<?php
    $pasta='imagens/';
    $arq =$pasta.basename($_FILES['img']['name']);
    if(move_uploaded_file($_FILES['img']['tmp_name'],$arq)){
        echo 'arquivo enviado';
        //pega os outros do form e cadstra no banco
        $sql="insert"
    }