$(document).on('click', '#select-data', function() {
      
      $(document).mouseup( waitForCloseClick );
      var id = $('#select-data').val();
      if( id != 'Seleccione'){
         $('#patientModal').modal();
      }
        
});

function waitForCloseClick() {
    $(document).unbind( 'mouseup' );
    setTimeout( function(){
      var id = $('#select-data').val();
      if( id != 'Seleccione'){
          $('#idBedPatient').val(id); 
          $('#patientModal').modal();
          //location.href = 'patients.php/?idBed='+id;
      }
      
    }, 1);
    return false;
}

$(document).on('click', '#selectPatient', function() {
     var priority = $('#selectPatient').val();
     if( priority != 'Seleccione'){
        $('#priorityPatient').val(priority); 
     }
     
});

