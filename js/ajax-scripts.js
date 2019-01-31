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
        var formData = $form.serialize();

		$.ajax({
            type : "post",
			url : dcms_vars.ajaxurl,
            data: {
                action: 'custom_landlord_registration_process',
                security: dcms_vars.security,
                data: formData,
                dataType: 'json'
            },
			error: function(response){
				console.log(response);
			},
			success: function(response) {
				console.log(response);
			}
        });
        
        return false;

	});
});