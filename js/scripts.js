  // Or with jQuery

  $(document).ready(function() {
    $('select').formSelect();
  });

    //Modal
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('.modal').modal();
    });

    $(document).ready(function(){
        $('.datepicker').datepicker();
    });

    //Campo CPF
    var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['000.000.000-000', '00.000.000/0000-00'];
        $('.cpfOuCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
    }
}

$('.cpfOuCnpj').length > 11 ? $('.cpfOuCnpj').mask('00.000.000/0000-00', options) : $('.cpfOuCnpj').mask('000.000.000-00#', options);
