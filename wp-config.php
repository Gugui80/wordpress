<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cja');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'cjaBD');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'cjaBD');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Eeb,EB(btI`?oVLf2byhb=jtulnR/6DvjR1Qim6oNe7Dr9||0_~MR]XpuL@@24/.');
define('SECURE_AUTH_KEY', '~zFJ;VouwjZuG~b.f%q,:I6D>);z;{z}~*y=#1:3?>A-^3DmZ@iFB9R (d|0CTk`');
define('LOGGED_IN_KEY', '>cC&}4s4lYli0a6(ZBsI@N1ol!f0rxnz7V7kP4KT*+() [+TYpcH&*n;q:S,AIid');
define('NONCE_KEY', 'lH-$mHG f@)Id^k96TkWce6yk3{0=@mS3`N^jbqYeN:g~*^&M>,sXPZ|%%J]$=NU');
define('AUTH_SALT', 'LB!VZtj,Z`c7OcaTSh^uLkeo,C/m-~(=B>a*n,V:&mx9@6/`>eoGp1*kDo ,J@dR');
define('SECURE_AUTH_SALT', 'vR/88/nJaB2DvTa?d~PCh{6BRvBr[C4l}!m*p0Zz#`!~f/xm^@0cFzU.T5|!X8xx');
define('LOGGED_IN_SALT', '#ywzVEOz@9/i+Q| &#hrhUQD|g^E3MXCwA5 U!DOp&4rs`Y@Dm!=/n ,%ymUKg)7');
define('NONCE_SALT', '>nGk1aNEvvim3X#3^P>4: W2Al{v>xt3WN6ed?a5j0:[&Fl_Wyhk0O7kxhYj_J6R');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

