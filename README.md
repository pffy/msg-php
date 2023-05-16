# msg-php
type-aware CLI messages for debugging PHP scripts

## Synopsis

A single function that takes one parameter, a variable `$var`, with a default value of `NULL`.

```php
void msg($var = null)
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

msg(); // array
msg(null); // NULL
msg(false); // boolean
msg(true); // boolean
msg(2.1212); // double (float)
msg(pi()); // double (float)
msg(1); // integer
msg(''); // string
msg('derp'); // string
msg([]); // array
msg(new stdClass); // object (stdClass)
msg((object)[]); // object (stdClass)
msg(new class{}); // object (anonymous class)
msg(curl_init()); // resource, curl
```
