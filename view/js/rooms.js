$(document).on('click', '#select-data', function() {
        $(document).mouseup( waitForCloseClick );
});

function waitForCloseClick() {
    $(document).unbind( 'mouseup' );
    setTimeout( function(){
		if( $('#select-data').val() != 'Seleccione'){
	  		 $('#patientModal').modal();	
		}    
    }, 1);
    return false;
}