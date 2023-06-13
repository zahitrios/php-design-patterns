# Builder design pattern

The Builder pattern is particularly useful when you need to create an object with many possible configuration options.

The Builder pattern can be recognized by a class that has a single creation method and several methods to configure the resulting object.

This pattern includes a director class, in this example SQLQueryBuilder, which sets the methods, the parameters they receive, and what each of them should return. The most important aspect is to identify that each method of the builder returns an object of the same type. In the class implementing this interface (MysqlQueryBuilder), this can be observed with the `return $this;` statement in each method involved in the construction process.

---

El patrón Builder resulta especialmente útil cuando debes crear un objeto con muchas opciones posibles de configuración.

El patrón Builder se puede reconocer por una clase, que tiene un único método de creación y varios métodos para configurar el objeto resultante.

Este patrón contiene una clase directora, en este ejemplo SQLQueryBuilder, la cual establece los métodos, los parámetros que recibirán y lo que deberá devolver cada uno de ellos. Lo más importante es identificar que cada método del 'builder' regresa un objeto de su mismo tipo, en la clase que implementa esta interfaz (MysqlQueryBuilder) esto se puede observar con el `return $this;` de cada método que forma parte de la construcción.

---

## Result:

```
SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;
```
