<?php
/**
 * Created by PhpStorm.
 * User: timon
 * Date: 07.06.2017
 * Time: 20:06
 */

return [
    'url' => 'http://mvc.lesson.com',
    'routes' => [
        'homePage' => [
            'pattern' => '/',
            'defaults' => [
                'controller' => 'App\\Controller\\Main',
                'action' => 'index'
            ]
        ],
        'aboutAs' => [
            'pattern' => '/about-us',
            'defaults' => [
                'controller' => 'App\\Controller\\Main',
                'action' => 'aboutAs'
            ]
        ],
        'pregPage' => [
            'pattern' => '/news/<id>/<test>',
            'rules' => [
                'id' => '[0-9]+'
            ],
            'defaults' => [
                'controller' => 'App\\Contrller\\News',
                'action' => 'news'
            ]
        ]
    ]
];