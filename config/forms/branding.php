<?php
use App\Entity;

return [
    'method' => 'post',

    'elements' => [

        Entity\Settings::PUBLIC_THEME => [
            'radio',
            [
                'label' => __('Base Theme for Public Pages'),
                'description' => __('Select a theme to use as a base for station public pages and the login page.'),
                'choices' => [
                    'light' => __('Light').' ('.__('Default').')',
                    'dark' => __('Dark'),
                ],
                'default' => $settings['themes']['default'],
            ]
        ],

        Entity\Settings::HIDE_ALBUM_ART => [
            'radio',
            [
                'label' => __('Hide Album Art on Public Pages'),
                'description' => __('If selected, album art will not display on public-facing radio pages.'),
                'default' => 0,
                'choices' => [
                    0 => __('No'),
                    1 => __('Yes'),
                ],
            ]
        ],

        Entity\Settings::HOMEPAGE_REDIRECT_URL => [
            'text',
            [
                'label' => __('Homepage Redirect URL'),
                'description' => __('If a visitor is not signed in and visits the AzuraCast homepage, you can automatically redirect them to the URL specified here. Leave blank to redirect them to the login screen by default.'),
                'default' => '',
            ]
        ],

        Entity\Settings::DEFAULT_ALBUM_ART_URL => [
            'text',
            [
                'label' => __('Default Album Art URL'),
                'description' => __('If a song has no album art, this URL will be listed instead. Leave blank to use the standard placeholder art.'),
                'default' => '',
            ],
        ],

        Entity\Settings::HIDE_PRODUCT_NAME => [
            'radio',
            [
                'label' => __('Hide AzuraCast Branding on Public Pages'),
                'description' => __('If selected, this will remove the AzuraCast branding from public-facing pages.'),
                'default' => 0,
                'choices' => [
                    0 => __('No'),
                    1 => __('Yes'),
                ],
            ]
        ],

        Entity\Settings::CUSTOM_CSS_PUBLIC => [
            'textarea',
            [
                'label' => __('Custom CSS for Public Pages'),
                'description' => __('This CSS will be applied to the station public pages and login page.'),
                'spellcheck' => 'false',
                'class' => 'css-editor',
                'filter' => function($val) { return strip_tags($val); }
            ]
        ],

        Entity\Settings::CUSTOM_JS_PUBLIC => [
            'textarea',
            [
                'label' => __('Custom JS for Public Pages'),
                'description' => __('This javascript code will be applied to the station public pages and login page.'),
                'spellcheck' => 'false',
                'class' => 'js-editor',
                'filter' => function($val) { return strip_tags($val); }
            ]
        ],

        Entity\Settings::CUSTOM_CSS_INTERNAL => [
            'textarea',
            [
                'label' => __('Custom CSS for Internal Pages'),
                'description' => __('This CSS will be applied to the main management pages, like this one.'),
                'spellcheck' => 'false',
                'class' => 'css-editor',
                'filter' => function($val) { return strip_tags($val); }
            ],
        ],

        'submit' => [
            'submit',
            [
                'type' => 'submit',
                'label' => __('Save Changes'),
                'class' => 'btn btn-lg btn-primary',
            ]
        ],

    ],
];
