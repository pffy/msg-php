# msg-php
type-aware CLI messages for debugging PHP scripts

## Tested on

  + PHP 7.4.33

## Synopsis

A single function that takes one parameter, a variable `$var`, with a default value of `NULL`.

```php
msg(mixed $var = null): void
```
## Quick Start

Create a new folder `foo` in home directory:
```bash
mkdir foo
cd foo
```

In the folder `foo`, clone this repo:
```bash
git clone https://github.com/pffy/msg-php
```

In the folder `foo`, create a new file called `test.php`. Copy and paste the following code into `test.php`:

```php
<?php

require_once 'msg-php/msg.php';

# NULL
msg(); // NULL
msg(null); // NULL

# boolean
msg(false); // boolean
msg(true); // boolean

# double / float
msg(2.1212); // double (float)
msg(pi()); // double (float)

# integer / int
msg(1); // integer

# string
msg(''); // string
msg('derp'); // string

# array
msg([]); // array

# objects
msg(new stdClass); // object (stdClass)
msg((object)[]); // object (stdClass)
msg(new class{}); // object (anonymous class)

# resources
msg(curl_init()); // resource, curl
```
