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
define('DB_NAME', 'VityaKursach');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'm;&:gJ}IJN2.wC4,zOiXtt<yltgpuil.quO&S2-PxV+9fq4I[R=6z~PMh2bVnVkR');
define('SECURE_AUTH_KEY',  '|vr&Uol7LiKQp#qBL^pf>hI*dN+6.-p;.k@Im&d3sP7+V{z%)3i7VQ{Hc_LHLKGT');
define('LOGGED_IN_KEY',    '!DHl3`3Q1FOBLzBGIct-vAJ>DVe Ub .t%B+e(io^.r@{}{y> .9uJwH9MdO.pwJ');
define('NONCE_KEY',        'qP;d08dPmcuem ^PT wX}YEa#kk P)<9Z$P>rBm es2O=<h.yedp2X#h*?Z&*>+E');
define('AUTH_SALT',        ',GkzF9k)Zz)/>urr`dm3of;7>[)z%<Xp^.IDdigUZ${her-BVbdBaAJZDF6lHXj]');
define('SECURE_AUTH_SALT', '(0_S4fQTsri!N8SR7Dgcm4.2UVm( e/]+0@-v&LU+6CoyRE;  ;yYfV<u4xy;P~.');
define('LOGGED_IN_SALT',   'x HAc675n_`OJ<c*D;m<9rgQ;bd)^<PTQ[`E+GO}2K>o4o-2VhuT1k~i+}QCC)7,');
define('NONCE_SALT',       'XANFBMY2PCLtX#O+z0e{_uJPpk-GBi{DfExl~V6aI|6E*SW?;x]Z)b 6P `(G>+Z');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
