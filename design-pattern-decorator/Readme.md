# Decorator design pattern

This patter allows you to add functions to an object without inheritance, this prevents the creation of multiples classes and is very helpful to keep the simplicity in your code

Imagine that you have an instance Enemy and that enemy has a behavior with gloves, another behavior with helmet, another behavior with sword, etc. Is not an option to have one class to each combination of items on your character... and if you want to add another item to your instance, you will add another combination and new set of clasess.

Wit strategy you can solve this, but is almost the same that we wrote above, for each combination of items you will need an strategy

Instead of Adapter whom change the object interface (behavior), decorator enhance the object without changing the interface

Execution output (php index.php);
```
Koopa Attacking!!
100

Enemy with helmet doesn't has enhance attack
Koopa Attacking!!
100

Enemy with sword attacking!!
200

Enemy with sword attacking!!
200
```
