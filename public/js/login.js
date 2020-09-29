$(document).ready(()=>{
    $('#form-login').submit((e)=>{
        e.preventDefault();

        if (ValidaEmail($('#login-correo').val()) == false)
{
alert('Ingrese un correo válido.');
$('#login-correo').focus();
return false;
}

function ValidaEmail(email) {
var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
return regex.test(email);
}
    });


});
