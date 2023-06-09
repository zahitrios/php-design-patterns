# Factory design pattern

This object encapsulates the logic of object creation. In this example, we need an enemy factory for a video game. We want the application to be able to provide us with random enemies, and perhaps later on, modify the behavior of enemy creation. If all this logic were inside the main Game file, we would have to write something like:

```
$enemy = (rand()%2 == 0) ? new Goomba : new Koopa;
```

But the above approach is not scalable if we want to have more than two types of enemies. Therefore, we create the 'RandomEnemyFactory' class, which implements the EnemyFactory interface whose sole purpose is to enforce the definition of the 'createEnemy' method.

Now, all Game needs to receive is the 'factory' it will work with and request enemies whenever it wants:
Game.php:17

```
$enemy = $this->enemyFactory->createEnemy();
```

If we wanted to modify the behavior of enemy creation, all we would have to do is change this behavior in RandomEnemyFactory. Even better, we could have more than one enemy factory. In the index.php file, line 17 is commented out. You can try passing a Koopas factory (KoopaFactory) and see that the game still works.

---

Este objeto encapsula la lógica de la creación de objetos, en este ejemplo necesitamos una fábrica de enemigos para un videojuego, necesitamos que la aplicación sea capaz de entregarnos enemigos de forma aleatoria y quizá más adelante modificar el comportamiento de la creación de enemigos, si toda está lógica estuviera dentro del archivo principal Game, tendríamos que escribir algo como:

```
$enemy = (rand()%2 == 0) ? new Goomba : new Koopa;
```

Pero lo anterior no es escalable si quisieramos tener más de dos tipos de enemigos, por lo tanto creamos la clase 'RandomEnemyFactory', la cual implementa la interfaz EnemyFactory cuyo único propósito es forzar la definición del método 'createEnemy'

Y ahora lo único que tiene que recibir Game, es la 'factory' con la que va a trabajar, y solicitarle enemigos cada vez que quiera:
Game.php:17

```
$enemy = $this->enemyFactory->createEnemy();
```

Si quisieramos modificar el comportarmiento de creación de enemigos, lo único que tendríamos que hacer es cambiar este comportamiento en RandomEnemyFactory o mejor aún, podríamos tener más de una fábrica de enemigos, en el archivo index.php está comentada la línea 17, puedes probar pasando una fábarica de Koopas (KoopaFactory) y verás que el juego sigue funcionando

---

## Result

```
I'm a Goomba, attacking with power: 5!!
I'm a Koppa, attacking with damage: 10!!
I'm a Goomba, attacking with power: 5!!
I'm a Koppa, attacking with damage: 10!!
I'm a Koppa, attacking with damage: 10!!
I'm a Koppa, attacking with damage: 10!!
I'm a Goomba, attacking with power: 5!!
I'm a Koppa, attacking with damage: 10!!
I'm a Goomba, attacking with power: 5!!
I'm a Goomba, attacking with power: 5!!
I'm a Goomba, attacking with power: 5!!
```
