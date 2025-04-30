<?php

require_once('./config/config.php');

$login = $_POST['login'];

if ($login == 'Entrar') {

    $username = $_POST['username'];
    $senha = $_POST['senha'];
    
    //Opções opcionais
    $options = [
        'cost' => 15,
    ];
    // Gerando a hash
    $hash = password_hash($senha, PASSWORD_DEFAULT, $options);

    $sql = "SELECT * FROM usuarios WHERE username = ? AND senha = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ss", $username, $hash );
    
    $stmt->execute();

    $result = $stmt->get_result();

    $row = $result->fetch_assoc();

    $conn->close();
    
    echo '<br>Login feito com sucesso!';
    
}else if($login == 'Validar'){

    $email = $_POST['email'];
    $username = $_POST['username'];
    $senha = $_POST['senha'];
    $user_codigo = $_POST['user_code'];
    
    session_start();
    $codigo = $_SESSION['codigo'];
    
    if($user_codigo == $codigo){

        //Opções opcionais
        $options = [
            'cost' => 15,
        ];
        // Gerando a hash
        $hash = password_hash($senha, PASSWORD_DEFAULT, $options);
    
        $sql = "SELECT id FROM usuarios WHERE username = ?";
        $stmt = $conn->prepare($sql);
    
        $stmt->bind_param("s", $username);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        if($result->num_rows > 0){
            echo "<script> alert('Usuário ou Email já existe, Tente outro.'); </script>";
            echo "<script> window.history.back(); </script>";
        }else{
            $sql_insert = "INSERT INTO usuarios (username, email, senha) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param('sss', $username, $email, $hash);
            $stmt_insert->execute();
        }
        
        echo '<br>Cadastrado com Sucesso!';
    
        $stmt_insert->close();
        $stmt->close();
        $conn->close();

    }else{
        echo "<script> alert('Algo deu errado.'); </script>";
        echo "<script> window.history.go(-2); </script>";
    }
    
}else{
    echo "<script> alert('Algo deu errado.'); </script>";
        echo "<script> window.history.back(); </script>";
}

?>