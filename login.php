<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder ="Usuário"/>
            <input type="text" placeholder ="Senha"/>
            <input type="text" placeholder ="Email"/> 
            <button>Criar</button>
            <p class="message">Já registrado? <a href="#">Login</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="Usuáro">
            <input type="password" placeholder="Senha">
            <button>Login</button>
            <p class="message">Não registrado? <a href="#">Registrar-se</a></p>
        </form>
    </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>