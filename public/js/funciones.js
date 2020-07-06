var Biblioteca =function(){
    return{
        validacionGeneral: function(id, reglas, mensajes){
            const formulario =$('#' + id);
            formulario.validate({
                rules:reglas,
                messages:nebsaje,
                errorElement:'span',
                errorClass:'help-block help-block-error',
                focusInvalid: false,
                ignore:"",
                highlight: function(element, errorClass, validClass){
                    $(element).closest('.form').addClass('has-error');
                },
                unhighlight: function(element){
                    $(element).closest('.form').removeClass('has-error');
                },
                success:function(label){
                    label.closest('.form').removeClass('has-error');
                },
                errorPlacement: function(error, element){
                    if($(element).is('select') && element.hasClass('bs-select')){
                        error.insrtAfter(element);
                    }else if($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    }else if(element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    }else{
                        error.insrtAfter(element);
                    }
                },
                invalidHandler: function(event, validator){

                },
                submitHandler: function(form){

                }

            });
            },
        }

    }();
