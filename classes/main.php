<?php

register_rest_field('transparencia', 'metadata', array(
	'get_callback' => function ($data) {
		return get_post_meta($data['id'], '', '');
	},
));

//INICIO DA FUNÇÃO PARA CHAMAR O SLIDER PHP
function slider_creci($atts)
{
	require_once SLIDER_DIR . 'classes/slider.php';
}

//shortcode para chamar na pagina
add_shortcode('plugin_slider', 'slider_creci');