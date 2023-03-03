**Informações do PHP**
```php
php -i
```

[Installation Wizard](https://xdebug.org/wizard)

**Renomear download para:** php_xdebug.dll <br />
**Mover para:** C:/xampp/php/ext <br />
**Editar o php.ini e adicionar na última linha:** zend_extension = xdebug **e verificar o extension_dir =** "ext" **ou** "C:\xampp\php\ext"

**Docker**
```
FROM php

RUN pecl install xdebug && docker-php-ext-enable xdebug
```

**Localizando o php.ini**
```
php --ini
```