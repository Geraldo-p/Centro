<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
</head>

<body>
    <h1>Olá, {{ $notifiable->name }}!</h1>
    <p>Recebemos um pedido para redefinir sua senha.</p>
    <p>Clique no botão abaixo para escolher uma nova senha:</p>

    <a href="{{ $url }}"
        style="background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; display: inline-block;">
        Redefinir Senha
    </a>

    <p>Se você não solicitou a redefinição, ignore este email.</p>

    <p>Atenciosamente, <br> Equipe do Centro de Formação Profissional da Santa Cruz</p>
</body>

</html>
