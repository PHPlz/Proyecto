$(document).on('click', '#btn-add', function(event) {
	
    $.ajax({
        data:  {"type" : "add-room"}, //datos que se envian a traves de ajax
        url:   'admReqHandler.php', //archivo que recibe la peticion
        type:  'get', //método de envio
    });

});

$(document).on('click', '#btn-add-bed', function(event) {
    $.ajax({
        data:  {"type" : "add-bed", "id" : 1}, //datos que se envian a traves de ajax
        url:   '../../DBStuff/admReqHandler.php', //archivo que recibe la peticion
        type:  'get', //método de envio
    });

});       