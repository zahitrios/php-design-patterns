# Decorator design pattern

This pattern allows you to add functions to an object without using inheritance. It prevents the creation of multiple classes and helps maintain code simplicity.

Imagine you have an instance of an Enemy, and that enemy has different behaviors depending on whether it wears gloves, a helmet, a sword, etc. Creating a separate class for each combination of items for your character would not be a viable option. Furthermore, if you wanted to add another item to your instance, you would need to create a new combination and a new set of classes.

With the Strategy pattern, you can address this issue, but it is similar to what we discussed earlier. For each combination of items, you would need a separate strategy.

Instead of the Adapter pattern, which changes the object's interface (behavior), the Decorator pattern enhances the object without altering its interface.

In this example, the KoopaEnemy class has a native behavior (computeDamage) which will be modified by the HelmetDecorator and SwordDecorator.

Something important about this pattern is the fact that the EnemyDecorator class (from which the decorators will extend) delegates the work to the concrete decorator.

---

Este patrón te permite agregar funciones a un objeto sin utilizar herencia. Evita la creación de múltiples clases y ayuda a mantener la simplicidad del código.

Imagina que tienes una instancia de un Enemigo y ese enemigo tiene diferentes comportamientos dependiendo de si usa guantes, un casco, una espada, etc. Crear una clase separada para cada combinación de elementos en tu personaje no sería una opción viable. Además, si quisieras agregar otro elemento a tu instancia, necesitarías crear una nueva combinación y un nuevo conjunto de clases.

Con el patrón de Strategy, puedes abordar este problema, pero es similar a lo que discutimos anteriormente. Para cada combinación de elementos, necesitarías una estrategia separada.

En lugar del patrón de Adaptador, que cambia la interfaz (comportamiento) del objeto, el patrón Decorador mejora el objeto sin alterar su interfaz.

En este ejemplo, la classe KoopaEnemy tiene un comportamiento nativo (computeDamage) el cual será modificado por los decoradores HelmetDecorator y SwordDecorator.

Algo importante de este patrón, es el hecho de que la clase EnemyDecorator (de la cual extenderan los decoradores) delega el trabajo al 'concrete decorator'.

---

## Result

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
