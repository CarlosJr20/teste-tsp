<?php

function faixa_rodape()
{
    $date['cep']        = get_option('cep');
    $date['logradouro'] = get_option('logradouro');
    $date['bairro']     = get_option('bairro');
    $date['cidade']     = get_option('cidade');
    $date['uf']         = get_option('uf');

    $search_s = __DIR__ . '/faixa.php';
    $file = file_exists($search_s) ? file_get_contents($search_s) : '';
    $master = array_keys($date);
    $master = array_map(function ($inner) {
        return '{{' . $inner . '}}';
    }, $master);

    echo str_replace($master, array_values($date), $file);
}

if (is_user_logged_in()) add_action('wp_footer', 'faixa_rodape');
