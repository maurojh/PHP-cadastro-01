<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar no banco</title>
</head>
<body>
<?php   
    
    //                   "endereco", "usuario", "senha", "nome_do_banco"
$ligacao = new mysqli("localhost", "root", "toor", "banco");
    
if ($ligacao->connect_errno) {
    printf("A conexão falhou: %s\n", $ligacao->connect_error);
    exit();
}
    
$nome = $_GET['usuario'];
    
$comando = "INSERT INTO `usuarios` (`id`, `nome`) VALUES (NULL, '$nome')";
    
echo $comando;

if ($ligacao->query($comando) === TRUE) {
    printf("Usuário ($nome) foi cadastrado com sucesso!\n");
}
    
$ligacao->close();
?>
</body>
</html>