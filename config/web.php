<?php

/**
 * Файл конфигурации web части Yii-приложения Biletavto-service.
 */
return [

    /**
     * Уникальный идентификатор web приложения.
     */
    'id' => 'biletavto-service',

    /**
     * Список путей допустимых аллиасов
     */
    'aliases' => [
        '@application' => dirname(__DIR__) . '/src',
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset'
    ],

    /**
     * Базовая директория проекта.
     */
    'basePath' => dirname(__DIR__),

    /**
     * Язык приложения.
     */
    'language' => 'ru-RU',

    /**
     * Часовой пояс приложения.
     */
    'timeZone' => 'Asia/Irkutsk',

    /**
     * Пространство имен, в котором находятся классы контроллера.
     */
    'controllerNamespace' => 'application\controllers',

    /**
     * Имя базового контроллера приложения.
     */
    'defaultRoute' => 'site',

    /**
     * Список компонентов, необходимых для работы приложения.
     */
    'components' => [

        /**
         * Подключение конфигурации базы данных.
         */
        'db' => require(__DIR__ . '/db.php'),

        /**
         * Действие при возникновении ошибок.
         */
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        /**
         * Ключ валидации Cookie.
         */
        'request' => [
            'cookieValidationKey' => 'gfhBVBNGhkgMfghty123yjs9l8UUnHuh5TX',
        ],

        /**
         * Настройка компонента URL.
         */
        'urlManager' => [

            /**
             * Подключение человеко-понятных URL (ЧПУ).
             */
            'enablePrettyUrl' => true,

            /**
             * Отключение расширения скриптов в адресной строке.
             */
            'showScriptName' => false
        ],

        /**
         * Компонент авторизации в системе.
         */
        'user' => [
            'identityClass' => \application\services\IdentityService::class,
            'enableAutoLogin' => true,
            'loginUrl' => ['/auth/login']
        ],

        /**
         * Настройка расположения View приложения.
         */
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@application/views'
                ]
            ]
        ]
    ]
];
