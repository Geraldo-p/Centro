<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificação de E-mail</title>
</head>

<body>
    <h1>Olá! {{ $utilizador }}</h1>
    <p>Por favor, clique no botão abaixo para verificar seu endereço de e-mail.</p>
    <a href="{{ $url }}"
        style="display:inline-block;padding:10px 20px;background-color:#4CAF50;color:white;text-decoration:none;">Verificar
        Endereço de E-mail</a>
    <p>Se você não criou uma conta, nenhuma ação adicional é necessária.</p>
    <p>Atenciosamente,<br>Equipe do Centro de Formação Profissional - Santa Cruz</p>

    <p style="font-size:small;">
        Se você estiver tendo problemas para clicar no botão "Verificar Endereço de E-mail", copie e cole o URL abaixo
        em seu navegador: <br>
        {{ $url }}
    </p>
</body>

</html>
