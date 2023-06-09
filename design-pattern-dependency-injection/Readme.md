# Dependency injection design pattern

This pattern allows you to use methods from another class in a class that has not inherited from the class whose method you want to use.

Imagine the following scenario:

```
class A {}
class B {}
class C extends A {}
```

If you wanted class C to use a method from class B, you couldn't do it through inheritance. The next step would be to try converting class B into a trait, but the best solution is dependency injection.

In this example, the Post class can access methods from the Category class without inheriting from it. This is achieved by passing an object of the Category class to its constructor.

---

Este patrón te permite utilizar métodos de otra clase desde una clase que no ha heredado de la clase cuyo método desea ocupar.

Imagina el siguiente caso:

```
class A {}
class B {}
class C extends A {}
```

Si quisieras que la clase C utilizar algún método de la clase B ya no podrías hacerlo a través de herencia, el siguiente paso sería intentar convertir la clase B en un trait, pero la mejor solución es la injección de dependencias.

En este ejemplo, la clase Post puede acceder a los métodos de la clase Category sin heredar de ella, esto se logra envíandole un objeto de la clase Category en su constructor

---

## Result 

```
All posts
All categories
```
