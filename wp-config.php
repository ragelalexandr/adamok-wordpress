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
define( 'DB_NAME', 'adamok_wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ravMC2883414' );

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
define( 'AUTH_KEY',         '[!cR+- 4H3zbXEPHfYGRLOxp/Q`yNl|@(;h+6BQLk$3~1x}p~fprcnkg(>6y>*Z^' );
define( 'SECURE_AUTH_KEY',  '$>!7+yx^QAg<)xVElNCWAUim_bnk7[b9I;{2x9>:I,s?Zs4*y052JLenfBBoaT)t' );
define( 'LOGGED_IN_KEY',    ':LDaBcvZIbl|odx={;SRC|1M!oAH?3v}:{g6ig<9EV(kyA675pZJ.b-D3)#cEaer' );
define( 'NONCE_KEY',        'Aj0#_31L`D34f~lg|2$FVf;r{N~|[*_CLUXkv!9$}B><+VIj9 ]{pAiCYt/6{col' );
define( 'AUTH_SALT',        'K>cng(bEc#segWR]s]eP@!RD),b_#;~/uT*?1%OBwsDY7@.gtKvHt1Qz_y[g903F' );
define( 'SECURE_AUTH_SALT', 'Xb7I/bH@9X/P~iJfY^szh+b</Et_Jr=6a2nu|mR~<ChBUW1obZwY_4*Y{Oz$~w(O' );
define( 'LOGGED_IN_SALT',   'sQxBy>$syO_]-TpfERHVk2wdl?z-Zg>sN 3ml1O^sR)<Qy_LH*@uDfqS~wuG x$Q' );
define( 'NONCE_SALT',       'q&DfD)m:XT?P4R2dAI%#A,g4m_wgQT|]A{iWno$UVn}bho([O4,*3rny<@]M;#A0' );

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
