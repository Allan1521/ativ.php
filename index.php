<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias dos Alunos</title>
</head>
<body>
<h2>Médias dos Alunos</h2>
<form action="" method="post">
    Nota 1: <input type="number" name="nota1" step="0.01"><br><br>
    Nota 2: <input type="number" name="nota2" step="0.01"><br><br>
    Nota 3: <input type="number" name="nota3" step="0.01"><br><br>
    Nota 4: <input type="number" name="nota4" step="0.01"><br><br>
    
    <input type="submit" value="Enviar">
 
</form>
    
</body>
</html>
<?php

require 'Notas.php';
   
if($_SERVER["REQUEST_METHOD"] == "POST"){
  

    $mediaaluno = new Notas( ['nota1'], ['nota2'], ['nota2'],['nota4'] );//Criado um objeto
    echo " A média do aluno: ". $mediaaluno->getmedia;
    

    } 
    

?>