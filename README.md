### Information

![GitHub release (latest by date)](https://img.shields.io/github/v/release/MohmmedAshraf/nova-duplicate-field)
![Packagist](https://img.shields.io/packagist/dt/outhebox/nova-duplicate-field)
![GitHub](https://img.shields.io/github/license/MohmmedAshraf/nova-duplicate-field)

Allow users to duplicate a record through the Laravel Nova Admin Panel along with any relations that are required (currently works with HasMany).

### Installation

```
composer require outhebox/nova-duplicate-field
```

Reference the duplicate field at the top of your Nova resource and then include the necessary code within the fields.

```php
use OutheBox\DuplicateField\DuplicateField
```

```php
DuplicateField::make('Duplicate')
    ->withMeta([
        'id' => $this->id, // id of record
        'model' => 'App\Models\Specialism', // model path
        'except' => ['status'], // an array of fields to not replicate (nullable).
        'override' => ['status' => 'pending'] // an array of fields and values which will be set on the modal after duplicating (nullable).
        'resource' => 'specialisms', // resource url
        'relations' => ['one', 'two'], // an array of any relations to load (nullable).
    ]),
```

Duplicate field only works on the index view at the moment (plans to expand this are coming) and already passes through `onlyOnIndex()` as an option.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Credits

- [Mohamed Ashraf](https://github.com/MohmmedAshraf)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
