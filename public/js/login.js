$(document).ready(()=>{
    $('#form-login').submit((e)=>{
        e.preventDefault();
        if (ValidaEmail($('#email').val()) == false)
        {
              alert('Ingrese un correo válido.');
                $('#email').focus();
            return false;
        }

        function ValidaEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
        }
    });


});
