<?php

return [
  // SET THIS TO FALSE FOR PRODUCTION
  'debug' => true,

  // MOVE THE PANEL TO A DIFFERENT URL
  // FOR SECURITY, BUT ALSO FOR FUN OR BRANDING PURPOSES
  'panel' => [
    'slug' => 'panel'
  ],

  // ADD CUSTOM FAVICONS
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

  // DEFINE COLOR PALETTE
  // Can be accessed in the Color field
  // like so: kirby.option('brand.palette')
  'brand' => [
    'palette' => [
      'ffffff00' => 'Transparent',
      '#f7f5e8' => 'Drywall',
      '#d3d3d3' => 'Concrete',
      '#232220' => 'Asphalt',
      '#e8d722' => 'Highlighter',
      '#3a8e0f' => 'Grass',
      '#ef0f00' => 'Poppy',
      '#434cf9' => 'Pond',
    ]
  ],
  
  // ADD CUSTOM CSS TO THE PANEL
  // 'panel' => [
  //   'css' => 'assets/css/custom-panel.css'
  // ],
 
  // ADD CUSTOM JS TO THE PANEL
  'panel' => [
    'js' => 'assets/js/vendor/spline-viewer--panel.js'
  ],

  // DEFINE SOURCE SETS FOR IMAGES
  // If you add more $ratio options to the image block, make sure to add them here, too!
  'thumbs' => [
    'srcsets' => [
        'auto' => [
          '300w'  => ['width' => 300],
          '600w'  => ['width' => 600],
          '900w'  => ['width' => 900],
          '1200w' => ['width' => 1200],
          '1800w' => ['width' => 1800]
        ],
        'square' => [
          '300w'  => ['width' => 300, 'height' => 300, 'crop' => true],
          '600w'  => ['width' => 600, 'height' => 600, 'crop' => true],
          '900w'  => ['width' => 900, 'height' => 900, 'crop' => true],
          '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => true],
          '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => true],
          '1920w' => ['width' => 1920, 'height' => 1920, 'crop' => true]
        ],
        'two-three' => [
          '300w'  => ['width' => 300, 'height' => 450, 'crop' => true],
          '600w'  => ['width' => 600, 'height' => 900, 'crop' => true],
          '900w'  => ['width' => 900, 'height' => 1350, 'crop' => true],
          '1200w' => ['width' => 1200, 'height' => 1800, 'crop' => true],
          '1800w' => ['width' => 1800, 'height' => 2700, 'crop' => true],
          '1920w' => ['width' => 1920, 'height' => 2880, 'crop' => true]
        ],
        'three-two' => [
          '300w'  => ['width' => 450, 'height' => 300, 'crop' => true],
          '600w'  => ['width' => 900, 'height' => 600, 'crop' => true],
          '900w'  => ['width' => 1350, 'height' => 900, 'crop' => true],
          '1200w' => ['width' => 1800, 'height' => 1200, 'crop' => true],
          '1800w' => ['width' => 2700, 'height' => 1800, 'crop' => true],
          '1920w' => ['width' => 2880, 'height' => 1920, 'crop' => true]
        ],
        'three-four' => [
          '300w'  => ['width' => 300, 'height' => 400, 'crop' => true],
          '600w'  => ['width' => 600, 'height' => 800, 'crop' => true],
          '900w'  => ['width' => 900, 'height' => 1200, 'crop' => true],
          '1200w' => ['width' => 1200, 'height' => 1600, 'crop' => true],
          '1800w' => ['width' => 1800, 'height' => 2400, 'crop' => true],
          '1920w' => ['width' => 1920, 'height' => 2560, 'crop' => true]
        ],
        'four-three' => [
          '300w'  => ['width' => 400, 'height' => 300, 'crop' => true],
          '600w'  => ['width' => 800, 'height' => 600, 'crop' => true],
          '900w'  => ['width' => 1200, 'height' => 900, 'crop' => true],
          '1200w' => ['width' => 1600, 'height' => 1200, 'crop' => true],
          '1800w' => ['width' => 2400, 'height' => 1800, 'crop' => true],
          '1920w' => ['width' => 2560, 'height' => 1920, 'crop' => true]
        ],
        'four-five' => [
          '300w'  => ['width' => 300, 'height' => 375, 'crop' => true],
          '600w'  => ['width' => 600, 'height' => 750, 'crop' => true],
          '900w'  => ['width' => 900, 'height' => 1125, 'crop' => true],
          '1200w' => ['width' => 1200, 'height' => 1500, 'crop' => true],
          '1800w' => ['width' => 1800, 'height' => 2250, 'crop' => true],
          '1920w' => ['width' => 1920, 'height' => 2400, 'crop' => true]
        ],
        'five-four' => [
          '300w'  => ['width' => 375, 'height' => 300, 'crop' => true],
          '600w'  => ['width' => 750, 'height' => 600, 'crop' => true],
          '900w'  => ['width' => 1125, 'height' => 900, 'crop' => true],
          '1200w' => ['width' => 1500, 'height' => 1200, 'crop' => true],
          '1800w' => ['width' => 2250, 'height' => 1800, 'crop' => true],
          '1920w' => ['width' => 2400, 'height' => 1920, 'crop' => true]
        ],
        'sixteen-nine' => [
          '300w'  => ['width' => 300, 'height' => 169, 'crop' => true],
          '600w'  => ['width' => 600, 'height' => 338, 'crop' => true],
          '900w'  => ['width' => 900, 'height' => 506, 'crop' => true],
          '1200w' => ['width' => 1200, 'height' => 675, 'crop' => true],
          '1800w' => ['width' => 1800, 'height' => 1013, 'crop' => true],
          '1920w' => ['width' => 1920, 'height' => 1080, 'crop' => true]
        ],
    ]
  ]

];