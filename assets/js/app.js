const msgForm = '<div id="msgStatus" class="form-control-feedback">:msg:</div>';
const msgSuccessForm = '<div class="col-12 text-center bg-dark-out p-2"><h1 class="display-3 text-white m-0">GRACIAS POR REGISTRATE!</h1>'+
                       '<h5 class="title-sec text-success m-0">Nos comunicaremos contigo a la brevedad</h5></div>';
/***** Formulario de suscripcion ***/
$('#formRegister').submit(function (e) {
  e.preventDefault();

  $.ajax({
    method: 'POST',
    url: $(this).attr('action'),
    data: $(this).serialize(),
    success: function (msg) {
      resetForm();
      $('#inputname').focus();
      if (msg == "success") {
        $('#form-content').empty();
        var $msgSuccess = $(msgSuccessForm);
        $('#form-content').append($msgSuccess);
      } else if (msg == "warning") {
        var mensaje = "Tuvimos un problema, inténtalo más tarde."
        $('.form-group').addClass('has-danger');
        $('input').addClass('form-control-danger');
      } else {
        var mensaje = "Tuvimos un problema, inténtalo más tarde."
        $('.form-group').addClass('has-danger');
        $('input').addClass('form-control-danger');
      }
      var msje = msgForm.replace(':msg:', mensaje);
      var $msje = $(msje);
      $('#formmail').append($msje);
    }
  })

});

//reset form
function resetForm() {
  $('#msgStatus').remove();
  $('input').removeClass();
  $('input').addClass('form-control');
  $('.form-group').removeClass('has-danger');
  $('.form-group').removeClass('has-success');
  $('.form-group').removeClass('has-warning');
}

$(document).ready(function () {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();

  if(dd<10) {
      dd='0'+dd
  }

  if(mm<10) {
      mm='0'+mm
  }

  today = mm+'/'+dd+'/'+yyyy;
  $('#current-date').html('Reporte al '+today);
});
