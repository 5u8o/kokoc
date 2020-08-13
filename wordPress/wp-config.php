<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?PpG%nReUe(O)k}B+f-N .O[ZXhY[sMITejBWm.9mU_u8Agxd&GXMhXD&[k| <-4' );
define( 'SECURE_AUTH_KEY',  '*.xI}*DYW?*{oWPU1iQm|nOTuiNgQ_-VT#9B6A#4tR-%F=s`$.D9},rTUpudmP<M' );
define( 'LOGGED_IN_KEY',    '!5U`DMg4UT&R1uq8#p|k#f}!>C$tcFw=h$BKV6UleP2gnF(v{5:.GwVzl+Ex6r00' );
define( 'NONCE_KEY',        '/[9d_73o-+`i}Ock)+y;#ab?M&kl~fxF{?7>+<1a6(.C|qho*J0+N)Thx}SWiuK_' );
define( 'AUTH_SALT',        'io;r?,sB17L&2L)45%+:L`1opg!kU**RxOCs5dVRw|s4)B>Xw5}xihpNO9vo[oFW' );
define( 'SECURE_AUTH_SALT', 'tkC?Z![5!woq`e|b>!nYd7-5Z!(=^fIG:|Ui$ij+>cz;Ql`wR6&<^;,IO(twZu^7' );
define( 'LOGGED_IN_SALT',   '~T&K9<~:adWJF8Np%^^ZF0lQ%<Ez1ly/$#W23b3[Af=<tl^&/mVKq;~6B:o^7LCm' );
define( 'NONCE_SALT',       '~Ni{0IXOt-8Mkx~&rzo>$Of0PgMYi|cURQ,Ky$+}0>cj0*Yq{.R5L!PTP*5SssC`' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
