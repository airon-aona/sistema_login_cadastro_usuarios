# 🔐 Sistema de Cadastro e Login de Usuários

Um sistema simples de login e cadastro, que pode ser implementado em diversos tipos de site.

## 🧪 Tecnologias utilizadas

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![JS](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Bootstrap](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![PHPMailer](https://img.shields.io/badge/PHPMailer-0F0F0F?style=for-the-badge&logo=phpmailer&logoColor=white)

## 🔧 Funcionalidades

- **Tela de Login**
  - Campo de nome de usuário
  - Campo de senha
    - Botão para visualizar a senha
  - Link "Esqueci minha senha"

- **Tela de Cadastro**
  - Campo de e-mail
  - Campo de nome de usuário
  - Campo de senha e confirmação de senha

## ✅ Recursos

### Validação de usuário e senha

No momento do cadastro, há validação para:

- **Nome de usuário**: deve estar em minúsculas, sem caracteres especiais.  
- **Senha**: mínimo de 8 caracteres, incluindo letras maiúsculas, minúsculas, números e caracteres especiais.  
- **Confirmação de senha**: deve ser idêntica à senha principal.

### Esqueci minha senha

1. O usuário informa seu nome de usuário.
2. Um e-mail com um código de 6 dígitos é enviado para o e-mail correspondente.
3. Após a confirmação do código, o usuário pode cadastrar uma nova senha conforme as regras de validação.

### Confirmação de e-mail no cadastro

- Durante o cadastro, um código de 6 dígitos é enviado para o e-mail informado.
- O cadastro só é finalizado após a confirmação desse código.

## 🚀 Melhorias

- [x] Ativação da função "Esqueci minha senha"  
- [x] Validação de e-mail no cadastro

## 🧑‍💻 Autor

Desenvolvido por [Airon](https://github.com/airon-aona/)

---

💡 Sinta-se à vontade para clonar, testar e sugerir melhorias!
