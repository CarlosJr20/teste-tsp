<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário CEP</title>
</head>
<body>
    <div class="dates_form">
        <div>
            <div>
                <div>
                    <label>CEP:</label>
                    <input style="width: 150px;" type="text" id="input-cep" name="cep" value="<?php 
                    echo get_option('cep') 
                    ?>" />
                    <button id="search" class="button">Pesquisar</button>
                </div>
            </div>
            <div id="location">
                <ul>
                    <li>
                        <strong>Rua: </strong>
                        <span class="logradouro"></span>
                        <input class="logradouro" type="hidden" name="logradouro">
                    </li>
                    <li>
                        <strong>Bairro: </strong>
                        <span class="bairro"></span>
                        <input class="bairro" type="hidden" name="bairro">
                    </li>
                    <li>
                        <strong>Cidade:</strong>
                        <span class="cidade"></span>
                        <input class="cidade" type="hidden" name="cidade">
                    </li>
                    <li>
                        <strong>Estado: </strong>
                        <span class="uf"></span>
                        <input class="uf" type="hidden" name="uf">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
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
    </script>
</body>

</html>