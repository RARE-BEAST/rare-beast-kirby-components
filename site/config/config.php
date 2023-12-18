<?php

return [
  // SET THIS TO FALSE FOR PRODUCTION
  'debug' => true,

  // OPTION TO MOVE THE PANEL TO A DIFFERENT URL
  // FOR SECURITY, BUT ALSO FOR FUN OR BRANDING PURPOSES
  'panel' => [
    'slug' => 'erikrules' 
  ],
    // OPTION TO ADD CUSTOM FAVICONS
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
      ],
  
  // OPTION TO ADD CUSTOM CSS TO THE PANEL
  // 'panel' => [
  //   'css' => 'assets/css/custom-panel.css'
  // ]

];