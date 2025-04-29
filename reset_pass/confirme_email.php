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
                <form method="POST" action="" class="border border-2 p-5 rounded-4">
                    <div class="col mb-3">
                        <label for="validationCustomUsername" class="form-label">Insira o código que enviamos em seu email abaixo:</label>
                        <div class="input-group has-validation">
                          <input type="text" class="form-control" name="user_code" id="user_code" aria-describedby="inputGroupPrepend" required>
                        </div>
                     </div>
                    <div class="d-flex mb-3">
                        <input class="btn btn-primary w-100" type="submit" name="reset" id="reset" value="Validar" />
                    </div>
                </form>
            </div>
        </main>

    </body>
</html>

<?php

if (isset($_POST['reset'])) {
    
    $userCode = $_POST['user_code'];
    
    session_start();
    
    $codigo = $_SESSION['codigo'];
    
    if($userCode == $codigo){
        header('Location: trocar_senha.php');
    }

}

?>