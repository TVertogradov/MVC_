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
        ]
    ]
];