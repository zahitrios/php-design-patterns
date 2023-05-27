# Composite design pattern

This patter only has sense when your central main model of you application can be represented in the form of a tree.

You can nest these entities within other entities in a class hierarchy, similar to a recursive structure.

In this example, we have a hospital composed of floors, composed of modules, composed of operating rooms. If an entity goes into maintenance, all the child entities will also be in maintenance.