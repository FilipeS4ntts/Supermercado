<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupermercadoEstoque</title>
</head>
<body>
  

<?php


// Verifica se o formulario foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fileira = $_POST['nome'];
 
    echo "O nome enviado foi: " . htmlspecialchars($fileira);
}
else{
    echo "Ouve uma falha!"
}

?>

</body>
</html>