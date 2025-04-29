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
                        <label for="validationCustomUsername" class="form-label">username</label>
                        <div class="input-group has-validation">
                          <input type="text" class="form-control" name="username" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        </div>
                     </div>
                    <div class="d-flex mb-3">
                        <input class="btn btn-primary w-100 col me-1" type="submit" name="reset" id="reset" value="Próximo" />
                        <a class="btn btn-warning w-100 col ms-1" href="../">Cancelar</a>
                    </div>
                </form>
            </div>
        </main>

    </body>
</html>

<?php

if (isset($_POST['reset'])) {
    
    require_once('../config/config.php');
    require_once('./env_email.php');
    
    $username = $_POST['username'];
    
    $sql = "SELECT email FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("s", $username);
    
    $stmt->execute();

    $result = $stmt->get_result();
    
    if($result->num_rows > 0){

    $row = $result->fetch_assoc();
    
    $email = $row['email'];
    
    $codigo = rand(111111, 999999);
    
    enviarNovaSenha($email, $username, $codigo);
    
    session_start();
    
    $_SESSION['codigo'] = $codigo;
    $_SESSION['username'] = $username;
    
    header('Location: ./confirme_email.php');

    }else{
        die("<script>alert('Usuário não encontrado')</script>");
        ;
    }

}

?>