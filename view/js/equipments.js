$(document).on('click', '#btn-addR', function(event) {
	if($('#selectResources').val()!= 'Seleccione'){
        $('#resourcesModal').modal();
        var index = $("#selectResources").prop('selectedIndex');
        var quantityD = $.map($('#selectResourcesUnd option'), function(e) { return e.value; })[index];
        
        $('#nameR').val($('#selectResources').val()); 
        $('#quantityD').val(quantityD);      
     		

	}

});

var resources = [];
var cantidad = 0;

$(document).on('click', '#btn-quantity', function(event) {
    var cantidad = $('#quantity').val();
    var q = 0;
    var name = $('#nameR').val(); 
    var quantity = parseInt(cantidad);
    var qPatient = parseInt($('#qPatient').val());
   
    if($('#pPatient').val() == 'baja' && quantity == 1 && qPatient ==0){
       
        $('#tableResources tr:last').after('<tr><td id="td-name">'+ name +'</td><td id="td-value">'+quantity+'</td>'+
        '<td style="text-align:center;"><button type="button" class="btn btn-primary" id="btn-delete-rs"><i class="fa fa-trash"></i></button></td></tr>'
        );

        var r = $('#resourcesPatient').val(); 
        $('#resourcesPatient').val(r+" "+name+" "+ quantity);
        resources.push({ tipo: name , und_disp: quantity });
        cantidad = qPatient+quantity;
        $('#qPatient').val(cantidad);

        $('#nameR').val(""); 
        $('#quantityD').val("");
        $('#quantity').val("");     
        
        $('#resourcesModal').modal('toggle');
       
    }
    else if(($('#pPatient').val() == 'media' && quantity == 1 && qPatient <= 1) || ($('#pPatient').val() == 'media' && quantity == 2 && qPatient == 0 )){
       
        $('#tableResources tr:last').after('<tr><td id="td-name">'+ name +'</td><td id="td-value">'+quantity+'</td>'+
        '<td style="text-align:center;"><button type="button" class="btn btn-primary" id="btn-delete-rs"><i class="fa fa-trash"></i></button></td></tr>'
        );

        var r = $('#resourcesPatient').val(); 
        $('#resourcesPatient').val(r+" "+name+" "+ quantity);
        resources.push({ tipo: name , und_disp: quantity });
        cantidad = qPatient+quantity;
        $('#qPatient').val(cantidad);


        $('#nameR').val(""); 
        $('#quantityD').val("");
        $('#quantity').val("");     

        $('#resourcesModal').modal('toggle');
       
    }
    else if(($('#pPatient').val() == 'alta' && quantity == 1 && qPatient <= 2) ||
            ($('#pPatient').val() == 'alta' && quantity == 3 && qPatient == 0) ||
            ($('#pPatient').val() == 'alta' && quantity == 2 && qPatient == 1)
            ){
        
        console.log(qPatient);
        $('#tableResources tr:last').after('<tr><td id="td-name">'+ name +'</td><td id="td-value">'+quantity+'</td>'+
        '<td style="text-align:center;"><button type="button" class="btn btn-primary" id="btn-delete-rs"><i class="fa fa-trash"></i></button></td></tr>'
        );

        var r = $('#resourcesPatient').val(); 
        $('#resourcesPatient').val(r+" "+name+" "+ quantity);
        resources.push({ tipo: name , und_disp: quantity });
        cantidad = qPatient+quantity;
        $('#qPatient').val(cantidad);


        $('#nameR').val(""); 
        $('#quantityD').val("");
        $('#quantity').val("");     
       
        $('#resourcesModal').modal('toggle');
       
    }
    else{
        $('#resourcesModal').modal('toggle');
        $('#alertModal').modal();
    }
  
});    

$(document).on('click', '#btn-alert', function(event) {
    event.preventDefault();
    $('#alertModal').modal('toggle');
});    

$(document).on('click', '#btn-delete-rs', function(event)  {
     $(this).closest('tr').remove();                      				      
    
});

