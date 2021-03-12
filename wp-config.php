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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         ')S?y{$&wE_NOHB2-@Q#KvII%c:eb]y/5bE1@,O@8Z+(Kr+|^=xl5`@EyWR37F +&' );
define( 'SECURE_AUTH_KEY',  'V<;19UvVT($nI*-g=u:c*tb89Qo+qOn7GwRu_}Z_AzWDI%dcDWW6ptXa~lY=7%SJ' );
define( 'LOGGED_IN_KEY',    'HBJ8@mC~%8Q*CF EfiG_q1+P:W7i#0`1;pU9@3LOJQe)R,M 7gG+Q?cl[ 4ca;bE' );
define( 'NONCE_KEY',        ')cei[] z]l9~Gqa^4OOQvPd5+`:he{(~]rFq_|a0;E)+3HqHC:(1dL1L!;]96Ui&' );
define( 'AUTH_SALT',        'CZ1KTQoh%[v~ya_2@PTpQA]h$(@[7<?:Rnf3e5}`jgd6dkK#rY|zX1>G@_I1q5,q' );
define( 'SECURE_AUTH_SALT', 'g`6!s=508Jx]2RX$oS>_(Wag:m];;;tSLo^yTSx&[pEHH`BO:=NMV($gX4`Mn.ci' );
define( 'LOGGED_IN_SALT',   '.6TCt^-fR^Y7PZ7yodjDwT5G 28hEd^c4RDn+T;#cs9y{)o7u*@h4O)SEDRgxWw4' );
define( 'NONCE_SALT',       '.%N[uSq7|2B9V@>.%8CZGNZl6oHYD%|<)W6_JU|;.a2KFH9}PAp@[$v8J(}+.]Jt' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
