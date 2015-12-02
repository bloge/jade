# Bloge Jade renderer

[Jade](https://github.com/kylekatarnls/jade-php) – Haml-like template engine 
compiler for PHP. Jade renderer is adapter of Jade for Bloge.

## Documentation

Jade renderer `\Bloge\Renderers\Jade` requires one argument absolute `$path` 
where templates are located and second optional argument `$cache` for specifying 
absolute path to cache (remember that this directory should be writable).

Example:

```php
use Bloge\Renderers\Jade;

$renderer = new Jade(__DIR__ . '/theme', __DIR__ . '/cache');
```

Then you can plug this renderer into basic or advanced app:

```php
use Bloge\Apps\BasicApp;

// ...

return new BasicApp($content, $renderer);
```