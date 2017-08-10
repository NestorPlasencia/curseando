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

define('FS_METHOD' , 'direct');
// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cursos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '`pF}u5c>}aS@Z5}H5@Y:c+/1l5%!k @HfJ@Ycr)J7Tp7z =<ENY#3p-SdT<P)FMm');
define('SECURE_AUTH_KEY', 'K`<{o8hrOveY6o(-M@/YO% m{aLMEVyG?yjyVtg$AW6Hkfm#@q}i=!wPjOc]U})J');
define('LOGGED_IN_KEY', '3ZZsjbJI/W<LwEs3[/eRZ8o==DM6zi>2tVbMEr&w=7X.w=|;PDs^5*EHw%Xzn^+b');
define('NONCE_KEY', ']-L8ntqXQbw & h-e&#`~-nz`t|nJ,7jhty=S}OqUpUK#O,LE19q4<&&$0c05e40');
define('AUTH_SALT', 'f0qgw?f[enB3JLi%>YeTUu2BR-X=H-XPyd`P=#Y|2wab6#I>D%n,.P<j)R~ohHsj');
define('SECURE_AUTH_SALT', '4:{:#~1e`reWPV@qx!DnblJ2^T75QQgZ.gHBcfV%G|Kux]D`5KRBH`Y(J #//RA=');
define('LOGGED_IN_SALT', ' ?$P>xifrUTSE&#S2rP]0x,/3YFClBesQJ[4SH%_8[{!:m|K>Nv!=iwZ8BKsg$<K');
define('NONCE_SALT', 'REE3qY,ch DGJ*1f<e^WshjF30s)1[e{9m+0xhYrd$h=)=4iMezw z]=C`+b0^I.');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cursos_';


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

