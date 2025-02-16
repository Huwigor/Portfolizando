document.getElementById('form-create-acc').addEventListener('submit', function(e){
    e.preventDefault();

    const inputName = document.getElementById('name').value;
    const inputEmail = document.getElementById('email').value;
    const inputPassword = document.getElementById('password').value;
    const inputPasswordConfirm = document.getElementById('repeat-password').value;

    const nameValidado = inputName.length >= 8;
    const emailValidado = /^[^\s@]+@[^\s@]+\.(com|net|org|br|gov)$/i.test(inputEmail); 
    const passwordValidado = /^(?=.*[A-Z])(?=.*[\W_]).{8,}$/.test(inputPassword);
    const passwordConfirmValidado = inputPassword === inputPasswordConfirm;

    const erroName = document.getElementById('error-name');
    const erroEmail = document.getElementById('error-email');
    const erroPassword = document.getElementById('error-password');
    const erroPasswordConfirm = document.getElementById('error-repeat-password');


    if(!nameValidado){
          erroName.textContent = 'O nome deve ter no mínimo 8 caracteres.';
          const inputName = document.getElementById('name');
          inputName.classList.toggle('input-erro');
    }

    if(!emailValidado){
        erroEmail.textContent = 'Formato de email inválido.';
        const inputEmail = document.getElementById('email');
        inputEmail.classList.toggle('input-erro');
    }

    if(!passwordValidado){
        erroPassword.textContent = 'A senha deve conter no mínimo 8 caracteres, uma letra maiúscula e um caractere especial.';
        const inputPassword = document.getElementById('password');
        inputPassword.classList.toggle('input-erro');
    }

    if(!passwordConfirmValidado){
        erroPasswordConfirm.textContent= 'As senhas são diferentes, por favor digite novamente';
        const inputPasswordConfirm = document.getElementById('repeat-password');
        inputPasswordConfirm.classList.toggle('input-erro');
    }

    if(nameValidado && emailValidado && passwordValidado && passwordConfirmValidado){
      this.submit();
    }


})