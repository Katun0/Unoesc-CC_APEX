<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pcc - Login</title>
    <link rel="stylesheet" href="src/css/login.css">
</head>
<body class="centerText">
    <div class="wrapper">
        <form action="auth.php" method="post">
            <h1>Login</h1>
                <div class="input-box">
                    <input type="text" name='user' placeholder="  Usuário" required>
                    <i class='bx bxs-user-rectangle'></i>
                </div>
                
                <div class="input-box">
                    <input type="password" name='pass' placeholder="  Senha" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Lembre-se de mim</label>
                    <a href="#">Esqueceu sua senha ?</a>
                </div>

                <button type="submit" name='submit' class="btn">Login</button>

                <div class="register-link">
                    <p>Não possui uma conta? 
                    <a href="cadastro.php">Registre-se!</a></p>
                </div>
        </form>
    </div>
</body>
</html>