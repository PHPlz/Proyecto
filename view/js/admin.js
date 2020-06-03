$(document).on('click', '#btn-refuse', function(event) {
    var correo =  $(this).closest("tr").find('td:eq(4)').text();
    var rec = $(this).closest("tr").find('td:eq(1)').text();
    var pac = $(this).closest("tr").find('td:eq(2)').text();
    var med = $(this).closest("tr").find('td:eq(3)').text();
    var id = $(this).closest("tr").find('td:eq(0)').text();
    console.log(pac);
    console.log(id);
    //console.log();
    $.ajax({
      type:"POST",
      url:"../../service/admin/requestHandler.php",
      data:{"destino": correo,
            "estado": 0,
            "recurso": rec,
            "paciente": pac,
            "medico": med,
            "idSol":id
            }
            //success: function() {
        //location.reload(true);

    });
    document.location.href = '../../service/admin/index.php';
  });

  $(document).on('click', '#btn-accept', function(event) {
    var correo =  $(this).closest("tr").find('td:eq(4)').text();
    var rec = $(this).closest("tr").find('td:eq(1)').text();
    var pac = $(this).closest("tr").find('td:eq(2)').text();
    var med = $(this).closest("tr").find('td:eq(3)').text();
    var id = $(this).closest("tr").find('td:eq(0)').text();
      $.ajax({
        type:"POST",
        url:"../../service/admin/requestHandler.php",
        data:{"destino": correo,
              "estado": 1,
              "recurso": rec,
              "paciente": pac,
              "medico": med,
              "idSol":id
              }

      });
      document.location.href = '../../service/admin/index.php';
    });
