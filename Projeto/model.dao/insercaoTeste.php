<?php
   echo "Conexão MySqli oo 6<br><br>";

    $conn = new mysqli("localhost","root","","controledevendasteste","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "insert into produto(nome, quantidade, valor) values (?,?,?);";
    
    $pstmt = $conn->prepare($sql);
    
    $nome = "Coxinha";
    $quantidade = 20;
    $valor = 2.50;

    $pstmt->bind_param("sss",$nome, $quantidade, $valor);
    
    if ($pstmt->execute()){
        echo "dados inseridos! <br>";
    }else{
        echo "não foi possível inserir os dados: " . $conn->error;
    };
    
    
    
    $pstmt->close();
    $conn->close();