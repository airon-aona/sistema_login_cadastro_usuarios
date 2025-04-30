# Sistema de Cadastro e Login de Usuários
Um sistema de login e cadastro simples que pode ser implementado em diversos tipos de site.

## Tecnologias utilizadas
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)

## Funcionalidades
- Tela de Login
  - Campo de Username
  - Campo de Senha
    - Botão de vizualizar senha
  - Opção de esqueci minha senha
 
- Tela de Cadastro
  - Campo de Email
  - Campo de Username
  - Campo de Senha e Confirmação de Senha

## Recursos

### Validação de Usuario e Senha
Ao criar seu cadastro há uma validação de nome de usuário, verificando se o nome de Usuario atende aos requisitos (não conter caracteres especiais, não conter letra maiusculas) e uma validação de senha, verificando se a senha contem no minimo 8 carácteres, com letras maiúsculas e minúsculas, caracteres especiais e numeros,  além da verificação da senha e a confirmação da senha sejam iguais.

### Esqueci minha senha
Ao clicar em "Esqueci minha senha", o usuário é redirecionado para uma página pedindo o usename dele, após informar o username, é enviado um email com um código de 6 digitos para o email correspondente, o usuário é redirecionado para uma tela pedindo a confirmação do código e assim que confirmado será redirecionado para poder escolher uma nova senha atendendo os requisitos do **Validação de Senha**.

## Futuras melhorias
- [X] Ativação do Esqueci minha senha
- [X] Validação de email no cadastro
