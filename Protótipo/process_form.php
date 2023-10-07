<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Configurar informações de e-mail
    $destinatario = "geovanny.piedade@usp.br";
    $assunto = "Novo formulário de contato";

    // Montar a mensagem de e-mail
    $mensagem = "Nome: " . $nome . "\n";
    $mensagem .= "E-mail: " . $email . "\n";

    // Enviar o e-mail
    mail($destinatario, $assunto, $mensagem);

    // Redirecionar de volta para a página de origem
    header("Location: index.html");
} else {
    // Se o método de solicitação não for POST, redirecione de volta para a página de origem
    header("Location: index.html");
}
?>
