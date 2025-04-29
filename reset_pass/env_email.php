<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Função para enviar e-mails usando PHPMailer
function enviarNovaSenha($destinatario, $nome, $codigo) {
    require '../../PHPMailer/vendor/autoload.php';

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.example.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'user@example.com';                     //SMTP username
        $mail->Password   = 'secret';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = 0; // Sem mensagens de debug

        // Configuração do remetente e destinatário
        $mail->setFrom('no-reply@email.com', 'Nome Remetente'); // Remetente
        $mail->addAddress($destinatario, $nome);    // Destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Recuperação de Senha';
        $mail->Body    = "Seu código de Confirmação é: $codigo";
        //$mail->Body    = "Seu Código de Confirmação é: $codigo";
        $mail->AltBody = strip_tags("Seu Código de Confirmação é: $codigo"); // Versão alternativa sem HTML

        // Envia o e-mail
        $mail->send();
        return "E-mail enviado com sucesso para $nome ($destinatario).";
    } catch (Exception $e) {
        return "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}
?>