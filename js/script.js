function ViewPass(id) {
    var inputType = document.getElementById(id+'Input');
    var spanIcon = document.getElementById(id);

    if(inputType.type == 'password'){
        inputType.type = 'text';
        spanIcon.innerHTML = '<i class="bi bi-eye-slash-fill"></i>'
    }else{
        inputType.type = 'password';
        spanIcon.innerHTML = '<i class="bi bi-eye-fill"></i>'
    }
}

function ValidarPass(id1, id2){
        var pass = document.getElementById(id1).value;
        var passConfirm = document.getElementById(id2).value;
        var user = document.getElementById('user').value;

        if(/[!@#$%^&*(),.?":{}|<>]/.test(user)){
            alert('Seu nome de Usuario não pode conter caracteres especiais');
            return false;
        }

        if(pass.length < 8){
            alert('A senha deve ter no minimo 8 caracteres');
            return false;
        }else if(!/[A-Z]/.test(pass)){
            alert('A senha deve conter pelo menos uma letra maiúscula');
            return false;
        }else if(!/[a-z]/.test(pass)){
            alert('A senha deve conter pelo menos uma letra minúscula');
            return false;
        }else if(!/[0-9]/.test(pass)){
            alert('A senha deve conter pelo menos um número');
            return false;
        }else if(!/[!@#$%^&*(),.?":{}|<>]/.test(pass)){
            alert('A senha deve conter pelo menos um caractere especial');
            return false;
        }else if(pass != passConfirm){
            alert('As Senhas são diferentes');
            return false;
        }
    }