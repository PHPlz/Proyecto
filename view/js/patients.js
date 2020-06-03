$(document).on('click', '#btn-equipments', function() { 
    var id = $(this).closest('tr').find('#ID')
    .text();  
    var name =  $(this).closest('tr').find('#nombre')
    .text(); 
    var priority =  $(this).closest('tr').find('#prioridad')
    .text(); 
   console.log(id);
    $.ajax({
        data:  {"iPatient" : id, "nPatient" : name, "pPatient" : priority }, //datos que se envian a traves de ajax
        url:   '../../service/request.php', //archivo que recibe la peticion
        type:  'post', //método de envio
    })
     
    document.location.href = '../doctor/listEquipments.php';
    
});

$(document).on('click', '#btn-add-equipments', function() { 
      
    var id = $(this).closest('tr').find('#ID')
    .text();  
    var name =  $(this).closest('tr').find('#nombre')
    .text(); 
    var priority =  $(this).closest('tr').find('#prioridad')
    .text(); 
   
    $.ajax({
        data:  {"iPatient" : id, "nPatient" : name, "pPatient" : priority }, //datos que se envian a traves de ajax
        url:   '../../service/request.php', //archivo que recibe la peticion
        type:  'post', //método de envio
    })
     
    document.location.href = '../doctor/equipmentsRequest.php';
    
});

$(document).on('click', '#btn-resources-r', function() { 
    
    var id = $(this).closest('tr').find('#ID')
    .text();  
    var name =  $(this).closest('tr').find('#nombre')
    .text(); 
    var priority =  $(this).closest('tr').find('#prioridad')
    .text(); 
   
    $.ajax({
        data:  {"iPatient" : id, "nPatient" : name, "pPatient" : priority }, //datos que se envian a traves de ajax
        url:   '../../service/request.php', //archivo que recibe la peticion
        type:  'post', //método de envio
    })
     
    document.location.href = '../doctor/resourcesRequest.php';

});

$(document).on('click', '#btn-addR', function(event) {
	if($('#selectResources').val()!= 'Seleccione'){
        $('#resourcesModal').modal();
        var nameTax = $('#selectResources').val();
        var index = $("#selectResources").prop('selectedIndex');
        var quantityD = $.map($('#selectResourcesUnd option'), function(e) { return e.value; })[index];
        
        $('#nameR').val($('#selectResources').val()); 
        $('#quantityD').val(quantityD);      
     		

	}

});

var resources = [];

$(document).on('click', '#btn-quantity', function(event) {
      
    var name = $('#nameR').val(); 
    var quantity = $('#quantity').val();
    $('#tableResources tr:last').after('<tr><td id="td-name">'+ name +'</td><td id="td-value">'+quantity+'</td>'+
    '<td><button type="button" class="btn btn-primary" id="btn-delete-rs"><i class="fa fa-trash"></i></button></td></tr>'
    );
    
    var r = $('#resourcesPatient').val(); 
    $('#resourcesPatient').val(r+" "+name+" "+ quantity);
    resources.push({ tipo: name , und_disp: quantity });

    $('#nameR').val(""); 
    $('#quantityD').val("");
    $('#quantity').val("");        
    $('#resourcesModal').modal('toggle');


  
});    


$(document).on('click', '#btn-delete-rs', function(event)  {
     $(this).closest('tr').remove();                      				      
    
});


$(document).on('click', '#btn-delete-es', function(event)  {

    var type = $(this).closest('tr').find('#td-type')
    .text();  
    console.log(type);
    $.ajax({
        data:  {"typeE" : type }, //datos que se envian a traves de ajax
        url:   '../../service/equipmentRequest.php', //archivo que recibe la peticion
        type:  'post', //método de envio
    })
    $(this).closest('tr').remove();                      				      
   
});