<?php 
/*
 Plugin Name: Slider CRECI-SE
 Author: TEC. INFORMAÇÃO CRECI-SE (Carlos Eduardo, Thiago e Daniel)
 Description: Plugin para slider página inicial.
 Version: 0.1
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

//ARQUIVOS DO PLUGIN
    // Raiz dos arquivos
    define( 'SLIDER_FILE',	__FILE__ );
    // Base do plugin
    define( 'SLIDER_BASE',	plugin_basename( SLIDER_FILE ) );
    // Caminho da pasta do plugin
    define( 'SLIDER_DIR',	plugin_dir_path( SLIDER_FILE ) );
    // URL da pasta do plugin
    define( 'SLIDER_URL',	plugin_dir_url( SLIDER_FILE ) );

/**
 * Carrega a classe principal das funções
 */
require_once SLIDER_DIR . 'classes/main.php';