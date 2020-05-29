$(function() {
	$("form[name='registerForm']").validate({
	  rules: {
		cEmail: {
            required: true,
            equalTo: '#email'
        },
	  },
	  messages: {
        cEmail:{
            required: "Por favor repita su email",
            equalTo: "Los emails no coinciden"
        }
	  },
	  submitHandler: function(form) {
		form.submit();
	  }
	});
  });