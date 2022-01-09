<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'gamedev' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';PQbL{.f{fH{!=FYjz]s_k4]JGPs8?&8M=XGMrT%?3pc39fP{ar!)@W.%&HYkx{j' );
define( 'SECURE_AUTH_KEY',  '[pL;{$c<M4E/!fuqWL?w?bev`xoqW*ee0X!H<cXD[k;K`4%OefgP>mh+dZQe2j~M' );
define( 'LOGGED_IN_KEY',    'Aa%Bf(/qD~[9@{_JyG(DoD6WhwsT|Arn=W$Jt./;`7,rB5Lnp@CzgDiKA-le)?3V' );
define( 'NONCE_KEY',        'F;K]q?bFBF0SwvP]Bo.c/ADMf[?zr#Dq5%9/+YK_IZTnNv^ZA]#iPj$MCMQCl_aK' );
define( 'AUTH_SALT',        '@oLiC^F[a|dP+K-hLZEgp)vawyur1cWn.voY#0*v+ReIq8r~1wLGbWt}AXJ$rX*n' );
define( 'SECURE_AUTH_SALT', 'MBJep ^4S&/ZVCK)*XY*/c0 x!{%-6kxI*mOfofRpu`S7:pJ[5.!PsrI?bs1n1Rg' );
define( 'LOGGED_IN_SALT',   'O~gsas&GHelLz HwOFNb+)rNpEZ{)v936Ti-ShrNiKj30,iEtkr3Uw0#LX_Z5LU[' );
define( 'NONCE_SALT',       'Fw}2@l;!fMhqWnu4-Z4vj8Q`f- 9@!^TBaLVu7VFmP$aMfmevaiK1zW$60*Dh)qA' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
