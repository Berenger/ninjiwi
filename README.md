# Ninjiwi

Ninjiwi is a static site generator written in PHP. It converts Markdown files into a static HTML pages

## Rendering the site

```
bin/genrate
```

## Directory Structure

```
app
└── config       # Configuration file
└── content      # Personalized site content
    └── pages    # Page 
    └── posts    # Blog posts
└── public       # The static site is generated here
└── static       # Directory containing static files 
    └── css      # CSS files
    └── js       # JS files
└── templates    # Site template
```

## Configuration

```php
$globalConfiguration = [
    'title'    => 'Ninjiwi PHP',                  // Title
    'index'    => 'exemple-page-index',           // Name of the page used as index
    'menu'     => [                               // Header menu
        'Blog'      => '/articles-page-1.html',    
        'Example 1' => '/pages/exemple-page.html',  
    ],
    'footer'   => 'Make with Ninjiwi'             // Footer content
];
```

## Run Test

```
./vendor/bin/phpunit tests
```

*Just a small project*