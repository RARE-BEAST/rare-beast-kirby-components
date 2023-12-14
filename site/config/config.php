<?php


// SET THIS TO FALSE FOR PRODUCTION
return [
    'debug' => true
];


// OPTION TO ADD CUSTOM FAVICONS
return [
    'panel' => [
      'favicon' => [
        'apple-touch-icon' => [
          'type' => 'image/png',
          'url'  =>  'assets/apple-touch-icon.png',
        ],
        'shortcut icon' => [
          'type' => 'image/svg+xml',
          'url'  => 'assets/favicon.svg',
        ],
        'alternate icon' => [
          'type' => 'image/png',
          'url'  => 'assets/favicon.png',
        ]
      ]
    ]
  ];


// OPTION TO MOVE THE PANEL TO A DIFFERENT URL
// FOR SECURITY, BUT ALSO FOR FUN OR BRANDING PURPOSES
return [
    'panel' => [
      'slug' => 'super-secret-admin-area'
    ]
  ];


// OPTION TO ADD CUSTOM CSS TO THE PANEL
// return [
//     'panel' => [
//       'css' => 'assets/css/custom-panel.css'
//     ]
//   ];