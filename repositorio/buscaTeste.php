<?php
   echo "Conexão MySqli oo 7<br><br>";

    $conn = new mysqli("localhost","root","","controledevendasteste","3306");
    
    if ($conn->connect_error){
        die("A conexão falhou");
    }
    
    $sql = "select * from produto;";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "id: " . $row["id"] . ", nome: " . $row["nome"] . ", quantidade: " . $row["quantidade"]. 
            ", valor: " . $row["valor"];
        }
    }else{
        echo "não foi retornado resultado";
    }
    
    $conn->close();
