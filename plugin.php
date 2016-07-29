<?php
/*
Plugin Name: Funciones personalizadas
Plugin URI:  http://github.com/levelasquez/fpplugin
Description: Permite colocar funciones personalizadas de Wordpress de una mejor forma, evitando así problemas con la actualización de Wordpress y/o Temas.
Version:     0.1
Author:      Leonardo Velasquez
Author URI:  http://github.com/levelasquez
License:     MIT
*/

require ('includes/funciones.php');

function fp_activation() {
}
register_activation_hook(__FILE__, 'fp_activation');

function fp_desactivation() {
}
register_deactivation_hook(__FILE__, 'fp_desactivation');