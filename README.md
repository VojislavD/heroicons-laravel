# Heroicons for Laravel

A simple implementation of Heroicons in Laravel.

## Requirements

- Laravel
- Tailwind CSS

## Installation

You can install the package via Composer:

```bash
composer require vojislavd/heroicons-laravel
```

## Usage

You can use an icon by adding `<x-icon />` to your Blade file and passing the icon name:

```blade
<x-icon name="icon-name" />
```

By default, the `outline` icons are used. If you want to use another type (`outline`, `solid`, `mini`, `micro`), add the `type` attribute to the component:

```blade
<x-icon name="icon-name" type="solid" />
```

You can also customize other icon attributes. For example:

```blade
<x-icon 
    name="icon-name" 
    type="outline" 
    fill="none" 
    stroke-width="1.5" 
    stroke="currentColor" 
    class="w-6 h-6" 
/>
```
## Credits

- [Vojislav](https://vojislavd.com/)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
