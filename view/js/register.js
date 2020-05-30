$(function() {
	$("form[name='registerForm']").validate({
	  rules: {
		password: {
			required: true
		},
		cEmail: {
            required: true,
            equalTo: '#email'
		},
		email: {
			required: true,
			validemail: true
	   }

	  },
	  messages: {
	   email: {
			required: "Por favor ingrese una dirección de email",
			validemail: "Por favor ingrese una dirección de email valida"
			 },
        cEmail:{
            required: "Por favor repita su email",
            equalTo: "Los emails no coinciden"
		},
		password: {
			required: "Por favor ingrese una contraseña"
		}
	  },
	  submitHandler: function(form) {
		form.submit();
	  }
	});
  });