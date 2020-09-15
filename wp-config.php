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
define( 'DB_NAME', "localpromotion" );
/** Имя пользователя MySQL */
define( 'DB_USER', "root" );
/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "root" );
/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );
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
define( 'AUTH_KEY',         'haxY9S3$Q8A&(n%n%,]-Ck62$@>?ZwFlQO3NW$)[E``8NHP8%n5$mMlV)mDakg2l' );
define( 'SECURE_AUTH_KEY',  'Qj!H.&J[w_<aF,LFB<[7Vwy*K]rk&N0Q(>$T{NF}D:6~k%N,j-4*Xv:UvAE#<{&#' );
define( 'LOGGED_IN_KEY',    '2_%3P1(`~9!n&8p?59gT}Y0P]?=gQ5sDjHIDf4}{H)VD/.tL6>^IHe;M(H^uq:Zg' );
define( 'NONCE_KEY',        '9.4FfmJI- h&Q1V)=)&5J-.1v4ZpH[@?v;LUf;5ZAvS)I:fy!DDry=9#ggUwZ9!Z' );
define( 'AUTH_SALT',        '+[59H>PZaW.Z#75:St%/F>8><sx{ZeraWEh1e9I*?Vn1<Zmk={N:Y69<v^26`o4g' );
define( 'SECURE_AUTH_SALT', '!*WVWzwuqOU/_,~QhTVCXb/$pjZCLp@S!)m?&|77(H9T_|IUS_-VaJu(n:PfL];_' );
define( 'LOGGED_IN_SALT',   'iXmKLB;eBr`2X ClSC=bT)(<ZKaFp9}4tGr:7TgPd]ZLz$oXZYzNtV@3@qW+{[l%' );
define( 'NONCE_SALT',       '{s9b=CW5JJa`Mk67&KrL$Rb,7,6r^Z=Da@@ug`i:qV>nx<F|jk% U;G<XE,H6E[v' );
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
