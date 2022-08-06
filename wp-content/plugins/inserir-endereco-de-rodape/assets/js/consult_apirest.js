// SCRIPT PARA CONSUMIR API viacep

jQuery(document).ready(function() {
    locEnd(jQuery("#input-cep").val());
    jQuery("#search").click(function(e) {
          e.preventDefault();
        var cep = jQuery("#input-cep").val();
        locEnd(cep)
    });
    function locEnd(cep) {
        var cep = jQuery("#input-cep").val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = /^[0-9]{8}$/;
            if (validacep.test(cep)) {
                jQuery.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dates) {
                    if (!("erro" in dates)) {
                        jQuery("#location .logradouro").text(dates.logradouro).val(dates.logradouro);
                        jQuery("#location .cidade").text(dates.localidade).val(dates.localidade);
                        jQuery("#location .bairro").text(dates.bairro).val(dates.bairro);
                        jQuery("#location .uf").text(dates.uf).val(dates.uf);
                    }
                });
            }
        }
    }

});