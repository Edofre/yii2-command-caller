# Yii2 Command Caller component

[![Latest Stable Version](https://poser.pugx.org/edofre/yii2-command-caller/v/stable)](https://packagist.org/packages/edofre/yii2-command-caller)
[![Total Downloads](https://poser.pugx.org/edofre/yii2-command-caller/downloads)](https://packagist.org/packages/edofre/yii2-command-caller)
[![Latest Unstable Version](https://poser.pugx.org/edofre/yii2-command-caller/v/unstable)](https://packagist.org/packages/edofre/yii2-command-caller)
[![License](https://poser.pugx.org/edofre/yii2-command-caller/license)](https://packagist.org/packages/edofre/yii2-command-caller)
[![composer.lock](https://poser.pugx.org/edofre/yii2-command-caller/composerlock)](https://packagist.org/packages/edofre/yii2-command-caller)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-command-caller "V1.0.0"
```

or add

```
"edofre/yii2-command-caller": "V1.0.0"
```

to the ```require``` section of your `composer.json` file.

## Usage

### As application component
Add the component to your configuration file
```php
    'components' => [
        'consoleRunner' => [
            'class' => 'edofre\commandcaller\CommandCaller',
            // Default values, not required
            'script' => '@app/yii',
            'executable' => '/usr/bin/php',
        ]
    ]
```

```php
// We will change the $result variable in the CommandCaller class
Yii::$app->consoleRunner->run('command parameter1 parameter2');
```

### As single class
```php
$commandCaller = new \edofre\commandcaller\CommandCaller();
$commandCaller->run('command parameter1 parameter2');
```