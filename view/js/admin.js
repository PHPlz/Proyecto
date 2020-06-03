$(document).on('click', '#btn-refuse', function(event) {
    var correo =  $(this).closest("tr").find('td:eq(4)').text();
    var rec = $(this).closest("tr").find('td:eq(1)').text();
    var pac = $(this).closest("tr").find('td:eq(2)').text();
    var med = $(this).closest("tr").find('td:eq(3)').text();
    var id = $(this).closest("tr").find('td:eq(3)').text();
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

    });
  });

  $(document).on('click', '#btn-accept', function(event) {
    var correo =  $(this).closest("tr").find('td:eq(4)').text();
    var rec = $(this).closest("tr").find('td:eq(1)').text();
    var pac = $(this).closest("tr").find('td:eq(2)').text();
    var id = $(this).closest("tr").find('td:eq(3)').text();
      $.ajax({
        type:"POST",
        url:"../../service/admin/requestHandler.php",
        data:{"destino": correo,
              "estado": 1,
              "recurso": rec,
              "paciente": pac,
              "idMEd": id
              }

      });
    });
