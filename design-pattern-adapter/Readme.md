# Adapter design pattern

For this example, let's imagine that we have a service that can charge your iPhone's battery. What would happen if suddenly you had a very strange phone that can have an array of batteries and its native function is not the same as that of your iPhone?

The adapter pattern allows you to solve this kind of problem without having to change a large part of the existing code in your application.

In this example, the WeirdMobile class doesn't have the chargeBattery method because it doesn't implement the Mobile interface, simply because it natively works with a different type of battery charging.

If we wanted our application to continue charging this new type of phone, what we have to do is create a class that implements the Mobile interface, in this case WeirdMobileAdapter. This class makes use of the native classes of WeirdMobile but implements the methods of the Mobile interface.

The important thing about this pattern is that the application doesn't use the chargeBattery method anymore because not all phones have that method now. Instead, it uses the Service class, and it is this class that interacts with the concrete objects.

In conclusion, the application and the Service class will not be modified when we want to add a new type of phone, we simply have to create more Adapter classes that implement the main Mobile interface.

---

Para este ejemplo imaginemos que tenemos un servicio que puede cargar la batería de tu iPhone, ¿Que pasaría si de pronto tuvieras un celular muy extraño que puede tener un array de baterías y cuya función nativa no es la misma que la de tu iPhone?

El patron adapter te permite solucionar este tipo de problemas sin tener que cambiar gran parte del código que ya existe en tu aplicación.

En este ejemplo, la clase WeirdMobile no tiene el método chargeBattery porque no implementa la interfaz Mobile, simplemente porque nativamente funciona con otro tipo de carga para sus baterías.

Si quisieramos hacer que nuestra aplicación siguiera cargando este nuevo tipo de teléfono, lo que tenemos que hacer es crear una clase que implemente la interfaz Mobile, en este caso WeirdMobileAdapter, esta clase hace uso de las clases nativas de WeirdMobile pero implementando los métodos de la interfaz Mobile.

Lo importante de este patrón, es que la aplicación no hace uso del método chargeBattery porque a partir de ahora no todos los teléfonos tienen ese método, en su lugar, hace uso de la clase Service, y es esta clase la que interactua con los objetos concretos.

En conclusión, la aplicación y la clase Service no se verán modificadas cuando deseemos agregar un nuevo tipo de teléfono, simplemente tendremos que crear más clases Adapater que implementen la intefaz principal Mobile.

---

## Result

```
iPhone battery level: 50
Your mobile is charging!!
iPhone battery level: 100

weird phone battery level: 36
Your mobile is charging!!
weird phone battery level: 100
```