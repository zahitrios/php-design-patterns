# PHP Design Patterns

These examples was done with php 8, if you need to test it in previous versions, you need to change the constructs from this:

```
public function __construct(private $state = 'Sunny')
{        
}
```

to this:
```
private $state = 'Sunny';
public function __construct($state)
{
    $this->state = $state;
}
```

## To run each examples

From the example directory

```bash
php index.php
```
