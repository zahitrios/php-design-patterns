# Singleton design pattern

The objective of this pattern is to ensure that only one instance of the desired class exists. This behavior is achieved by making the constructor of the corresponding class private.

In this folder, there are two examples:

    'Single': The Singleton class is the only one that utilizes this design pattern.
    'Multiple': The Logger and Config classes inherit from the Singleton class, allowing for many more classes to utilize this behavior while inheriting from the Singleton class.

---

El objetivo de este patrón, es asegurarse de que solo exista una instancia de la clase deseadal. Este comportamiento se logra haciendo que el constructor de la clase correspondiente sea privado.

En esta carpeta hay dos ejemplos:

    'Single': La clase Singleton es la única que utiliza este patrón de diseño
    'Multiple': Las clases Logger y Config heredan de la clase Singleton, de manera que podríamos tener mucho más clases utilizando este comportamiento mientras hereden de la clase Singleton.

---

## Result

```
php single/index.php 
Singleton pattern works!!
```

```
php multiple/index.php
2023-06-09: Started!
2023-06-09: Logger has a single instance.
2023-06-09: Config singleton also works fine.
2023-06-09: Finished!
```
