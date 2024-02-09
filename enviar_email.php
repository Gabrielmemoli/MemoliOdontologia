<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data_consulta = $_POST['data_consulta'];
    $horario = $_POST['horario']; // Receba o horário selecionado

    // Endereço de e-mail para o qual você deseja enviar a mensagem
    $destinatario = "gabrielalvesmemoli@gmail.com";

    // Assunto do e-mail
    $assunto = "Consulta Agendada";

    // Mensagem de e-mail
    $mensagem = "Nome: $nome\n";
    $mensagem .= "Email: $email\n";
    $mensagem .= "Data da Consulta: $data_consulta\n";
    $mensagem .= "Horário: $horario\n"; // Inclua o horário na mensagem

    // Envia o e-mail
    if (mail($destinatario, $assunto, $mensagem)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>