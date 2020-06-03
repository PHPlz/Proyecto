$(document).on('click', 'select', function() {
    var i = $(this).closest('tr').index(); 
    console.log(i);
    $('#selectData1'+i).mouseup( waitForCloseClick );


});        


function waitForCloseClick() {
    $('#selectData11').unbind( 'mouseup' );
    setTimeout( function(){
      var id = $('#selectData11').val();
      console.log(id);
      if( id != 'Seleccione'){
          $('#idBedPatient').val(id); 
          $('#patientModal').modal();
          //location.href = 'patients.php/?idBed='+id;
      }
      
    }, 3);
    return false;
}

$(document).on('click', '#selectPatient', function() {
     var priority = $('#selectPatient').val();
     if( priority != 'Seleccione'){
        $('#priorityPatient').val(priority); 
     }
     
});

