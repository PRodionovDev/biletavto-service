<?php

/**
 * Файл примера конфигурации базы данных Yii-приложения Biletavto-service.
 *
 * Данный файл не используется системой напрямую. Для внесения параметров
 * при развертке проекта, файл необходимо скопировать и переименовать как:
 * "db.php".
 *
 * Текущей же файл используется в качестве примера организации конфигурации,
 * а также хранится в git-репозитории.
 */

/**
 * Адрес сервера, на котором расположена база данных.
 */
define('HOST', '127.0.0.1');

/**
 * Имя базы данных, которая используется в приложении.
 */
define('DATABASE', 'db_biletavto_service');

/**
 * Имя пользователя, имеющего доступ к базе данных.
 */
define('USERNAME', 'root');

/**
 * Пароль пользователя для доступа к базе данных.
 */
define('PASSWORD', '');

/**
 * Кодировка, используемая в базе данных.
 */
define('CHARSET', 'utf8');

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . HOST . ';dbname=' . DATABASE,
    'username' => USERNAME,
    'password' => PASSWORD,
    'charset' => CHARSET
];
