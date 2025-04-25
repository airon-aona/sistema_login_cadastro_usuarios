<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Login e Cadastro de Usuários</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        
        <script src="./js/script.js"></script>

    </head>
    <body>
        
        <main class="d-flex align-items-center justify-content-center">
            <div class="m-5">
                <form method="POST" action="login.php" class="border border-2 p-5 rounded-4">
                    <div class="col mb-3">
                        <label for="validationCustomUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                          <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                     </div>
                    <div class="col mb-3">
                        <label for="validationCustomUsername" class="form-label">Password</label>
                        <div class="input-group has-validation">
                          <input type="password" class="form-control" name="senha" id="Pass1Input" aria-describedby="inputGroupPrepend" required>
                          <span onclick="ViewPass(this.id)" id="Pass1" class="input-group-text"><i id="Pass1Icon" class="bi bi-eye-fill"></i></span>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <input class="btn btn-primary w-100" type="submit" name="login" id="login" value="Entrar" />
                    </div>
                    <div class="d-flex flex-column">
                        <a class="text-warning" href="">Esqueci minha senha</a>
                    </div>
                </form>
                <a class="text-danger" href="./cadastro.php">Não tenho cadastro</a>
            </div>
        </main>

    </body>
</html>
