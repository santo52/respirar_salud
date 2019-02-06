//http://regularcoder.com/tutorial/submit-form-using-ajax-in-wordpress/
//https://code.tutsplus.com/es/tutorials/improved-ajax-techniques-for-wordpress-object-oriented-programming--cms-24897
//https://www.sitepoint.com/enabling-ajax-file-uploads-in-your-wordpress-plugin/
//https://www.ibenic.com/wordpress-file-upload-with-ajax/
//https://artisansweb.net/ajax-file-upload-in-wordpress/
//https://wordpress.stackexchange.com/questions/198781/wordpress-ajax-file-upload-frontend
//http://carlofontanos.com/ajax-multi-file-upload-in-wordpress-front-end/

$(document).ready(function(e){
    
    $('#form-correo').on('submit', function(e){
        e.preventDefault();
        e.stopPropagation();

        var $form = $(e.target);
        var formData = $form.serializeArray();
        var params = {};

        params['action'] = 'send_email_process';
        $.each(formData, function(i, val){
            params[val.name] = val.value;
        });

        console.log(params);
		$.ajax({
            type : "post",
            url : dcms_vars.ajaxurl,
            dataType: 'json',
            data: params,
			error: function(a,b,c){
                console.log(a,b,c);
                var mensaje = "<div class='alert-message danger'>Hay un problema con el envío del correo!</div>";
                $('#Contacto-Mensaje').html(mensaje);
			},
			success: function(data) {
                console.log(data);
                if(data.resp){
                    $('#form-correo input, #form-correo textarea').val('');
                    setTimeout(function(){
                        $('#Contacto-close').trigger('click');
                    }, 1000);
                }

                var mensaje = "<div class='alert-message " + data.class + "'>" + data.msg + "</div>";
                $('#Contacto-Mensaje').html(mensaje);
			}
        });
        
        return false;

	});
});