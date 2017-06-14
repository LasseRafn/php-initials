# Generate initials from names
This is the core of [LasseRafn/php-initial-avatar-generator](http://github.com/LasseRafn/php-initial-avatar-generator), or well.. the initials generation part of it.

It's framework agnostic, which is different from basically everything else I do, you're welcome.

Supports UTF8 (yes.. also emojis.)
 
<p align="center"> 
<a href="https://travis-ci.org/LasseRafn/php-initials"><img src="https://img.shields.io/travis/LasseRafn/php-initials.svg?style=flat-square" alt="Build Status"></a>
<a href="https://coveralls.io/github/LasseRafn/php-initials"><img src="https://img.shields.io/coveralls/LasseRafn/php-initials.svg?style=flat-square" alt="Coverage"></a>
<a href="https://styleci.io/repos/78973710"><img src="https://styleci.io/repos/78973710/shield?branch=master" alt="StyleCI Status"></a>
<a href="https://packagist.org/packages/LasseRafn/php-initials"><img src="https://img.shields.io/packagist/dt/LasseRafn/php-initials.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/LasseRafn/php-initials"><img src="https://img.shields.io/packagist/v/LasseRafn/php-initials.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/LasseRafn/php-initials"><img src="https://img.shields.io/packagist/l/LasseRafn/php-initials.svg?style=flat-square" alt="License"></a>
</p>

## Installation
You just require using composer and you're good to go!
````bash
composer require lasserafn/php-initials
````
Rad, *and long*, package name.. huh? Sorry. I'm not very good with names.

## Usage
As with installation, usage is quite simple. Generating a image is done by running:
````php
echo (string) (new LasseRafn\Initials\Initials('Lasse Rafn'));                  // Output: LR
echo (new LasseRafn\Initials\Initials)->name('Justine Bieber')->generate();     // Output: JB
echo (new LasseRafn\Initials\Initials('John Christian Doe'))->generate();       // Output: JD
echo (new LasseRafn\Initials\Initials)->generate('Leonardo');                   // Output: LE
echo (new LasseRafn\Initials\Initials)->length(1)->generate('Camilla');         // Output: C
echo (new LasseRafn\Initials\Initials)->length(3)->name('Jens Ølsted')->getUrlfriendlyInitials();         // Output: JOL
````

## Supported methods and parameters
### Name (initials) - default: JD
````php
$initials->name('Albert Magnum')->generate();
````

### Length - default: 2
````php
$initials->name('Albert Magnum')->length(3)->generate();
````

## Requirements
* PHP 7.0 or 7.1
