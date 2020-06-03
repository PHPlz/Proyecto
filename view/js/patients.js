$(document).on('click', 'tbody tr', function() { 
    var content = "";
    content = this.innerText;
    console.log(content.split("	"));

    var id = content.split("	")[0];
    var name = content.split("	")[1];
    var priority = content.split("	")[3];
    console.log(name);

    $.ajax({
        data:  {"iPatient" : id, "nPatient" : name, "pPatient" : priority }, //datos que se envian a traves de ajax
        url:   '../../service/resource.php', //archivo que recibe la peticion
        type:  'get', //método de envio
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