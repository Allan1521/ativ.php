<!DOCTYPE html>
<html>

<head>
    <title>Cálculo de Média</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">


        <form method="post" action="">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" required><br><br>
            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" required><br><br>
            <label for="nota3">Nota 3:</label>
            <input type="number" name="nota3" required><br><br>
            <label for="nota4">Nota 4:</label>
            <input type="number" name="nota4" required><br><br>
            <button type="submit">Calcular Média</button>
        </form>
        
        <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os valores do formulário
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        // Calcula a média
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        // Exibe o resultado
        echo "A média do aluno é: " . $media;
    }
    ?>
    </div>

</body>

</html>