# Composite design pattern

This patter only has sense when your central main model of you application can be represented in the form of a tree.

You can nest these entities within other entities in a class hierarchy, similar to a recursive structure.

In this example, we have a hospital composed of floors, composed of modules, composed of operating rooms. If an entity goes into maintenance, all the child entities will also be in maintenance.

---

Este patrón solo tiene sentido cuando tu modelo principal central de la aplicación puede ser representado en forma de un árbol.

Puedes anidar estas entidades dentro de otras entidades en una jerarquía de clases, de manera similar a una estructura recursiva.

En este ejemplo, tenemos un hospital compuesto por pisos, compuestos por módulos, compuestos por quirófanos. Si una entidad entra en mantenimiento, todas las entidades hijas también estarán en mantenimiento.

---

## Result

```
St. Patricks Hospital | Is open
Maternity Floor | Is closed
Maternity module 1 | Is closed
Maternity module 2 | Is closed
Cardiology Floor | Is open
Cardiology module 1 | Is open
Cardiology module 2 | Is open
Orthopedics Floor | Is open
Orthopedic module 1 | Is open
Orthopedic module 2 | Is open
```
