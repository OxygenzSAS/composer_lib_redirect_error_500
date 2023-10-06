# rooter
Un middleware pour rediriger vers une page 500 custom si une exception n'est pas catché

## Installation

Via composer
```
composer require oxygenzsas/composer_lib_redirect_error_500
```

## Utilisation

Initialisation
```php
// Creation du middleware
$middleware = new \OxygenzSAS\RedirectErrorPage\RedirectErrorPage();
```
