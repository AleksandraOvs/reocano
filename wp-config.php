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
define( 'DB_NAME', 'reo_db' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'aT$|YgSwQ& by$j z8?BSM0lfOI3?<~qHo=jMskX9L4f#(x)K1EdM4bFMA|qQBZb' );
define( 'SECURE_AUTH_KEY',  'q4u1PHSN>I`G#d:eF1|GY(PJK3f4|3{vb>=oS0XKfl#aC0H%_)*y1FR0E9c/Jsk{' );
define( 'LOGGED_IN_KEY',    'jH7@}}D{$-|?S*U[af}3SBlR&C*];wf>-win5Mz@:Q6sv9 [NZ~b+<(S^aMcTeX.' );
define( 'NONCE_KEY',        'd*g]6qyyOu$}~VUU>JkAr8@eKu,#VujNLRb7 N7GD=QR`ZDP$6GQe0BbG$*$[iT.' );
define( 'AUTH_SALT',        'K,KA:f0d[PhT9=1xQZL.bx1zmzd@C!,@C`-.#ht%y*F8Rh?x~ls;N<=vz[T%>B?F' );
define( 'SECURE_AUTH_SALT', 'xV>v8Vre6opWROeBsTZ<TuNI}^Akoe5k=XT1y CU{gHHO>>y_?;!U%Viq :FFj06' );
define( 'LOGGED_IN_SALT',   '36`03v6)`1&+ziuNh;5>nZMt{i+ZzF4Faq1G!EK@KDOz*%{XH)IfU9382S<uvc{A' );
define( 'NONCE_SALT',       '(sv}$x0ol<*Y|5A9*` ^((0(9(D0z=[sdo!NNz/rvfQ0VxB3iy`L4IFUzo1zFpDE' );

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
