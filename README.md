# Bootstrap Icons

A package to easily use bootstrap icons in your Laravel project.

## Requirements

- PHP 7.4 or higher
- Laravel 7.0 or higher

## Installation

Clone this repo, add the package to your repositories and then require it:

```bash
git clone git@github.com:aurelzefi/bootstrap-icons.git
```

```json
"repositories": [
    {
        "type": "path",
        "url": "./../bootstrap-icons"
    }
]
```

```bash
composer require aurelzefi/bootstrap-icons
```

## Usage

Icons can be used a self-closing Blade component which will be compiled to SVG icons:

```blade
<x-bi-alarm-fill/>
```

You can also use classes and set the width and height HTML attributes on the SVG:

```blade
<x-bi-alarm-fill class="text-primary" width="2em" height="2em"/>
```

For a full list of the available icons, visit the official Bootstrap documentation https://icons.getbootstrap.com.
