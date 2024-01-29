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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_alcozer' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         ']#}3>}G)fW[Rbij#N@`WtT_GrLFNry0RS4t1Yyf2$M/4! nf}u@s)i{8|k87J[-]' );
define( 'SECURE_AUTH_KEY',  'Os@XrBPO)(4hyLi6@#x@.U(n2$zV+/oM=q@9x `Xf0}+W|Bs>m9dH@3OMR{d#cfE' );
define( 'LOGGED_IN_KEY',    'oz:6@cUDR~ZZXf$}Lq#_jWWj@OO-R!bRtx!(|240X8kp@xnyR[:yN5[NBJ,+P~=x' );
define( 'NONCE_KEY',        'b7JGpUaO%1Tua?F)E4kx({y&,<*UKBWk3s;iwL}E+z+J_|W|+8{[%fsJ6.7oCB^K' );
define( 'AUTH_SALT',        ')y+2OWkIF$=;y_k<hDmboV$GF2JwKAjyaE~S,SOgP35k8$VU.TjWwmUd7u&V/HYK' );
define( 'SECURE_AUTH_SALT', '&BJ9`hIc6,%Mldrip2THrHjus=pk?/fS87;VK?xjKB.gE)l4zDB{hI_)nBv/$MVm' );
define( 'LOGGED_IN_SALT',   '$/an8+?ozVizeO?<@QTTS@<:~d) yld_?yNqOlcuC*9B>`whTYKj;N:W-.c|AIJ9' );
define( 'NONCE_SALT',       '-f21`pu(Xkxl$zqF=dB#rWhCIAYvj2Aq;^`c*qOZAQEgZb:bRD@a01_~&`XX8Xi~' );

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
