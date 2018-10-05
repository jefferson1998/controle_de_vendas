<?php
   echo "Conexão MySqli oo 2<br><br>";

    $conn = new mysqli("localhost","root","","controledevendasTeste","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "create table produto(".
            "id int(100) unsigned auto_increment primary key, ".
            "nome varchar(20) not null, ".
            "quantidade int not null, " .
            "valor double not null )";
    
    if ($conn->query($sql)){
        echo "tabela criada!";
    }else{
        echo "não foi possível criar a tabela: " . $conn->error;
    }
    
    $conn->close();

