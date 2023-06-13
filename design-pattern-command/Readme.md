# Command design pattern

The goal is to turn a request into an independent object that contains all the information about the request. This way, each request is an object.

The most common example is the toolbar of a text editor. You can have the Button class, which inherits towards multiple subclasses and defines the behavior of the click in each of these subclasses. However, you could end up with hundreds of subclasses, and you also risk breaking the application every time you modify the parent Button class.

Another problem with the approach where the click is defined in each subclass is that there are actions that can be triggered not only by a click. For example, there can be shortcuts that should perform the same action as certain buttons.

The Command pattern suggests that objects should not send requests directly. Instead, the details of the request, such as the object to modify, the object making the request, the method name, and the list of arguments, should be extracted. All of this should be placed in a command class with a single method responsible for executing this request.

The next step is to make the commands implement the same interface. It usually has a single execution method that does not accept parameters.

Since the execution method of the command has no parameters, how do we pass the details of the request to the receiver? It turns out that the command should be preconfigured with this information or be able to retrieve it on its own.

Let's go back to our text editor example. After applying the Command pattern, we no longer need all those button subclasses to implement various click behaviors. It is enough to place a single field inside the base Button class that stores a reference to a command object and make the button execute that command on a click.

In our example, you can notice that the Singleton pattern is also being used in the Clipboard and Editor classes.

---

El objetivo es convertir una solicitud en un objeto independiente que contiene toda la información sobre la solicitud. De esta manera, cada solicitud es un objeto.

El ejemplo más común es la barra de herramientas de un editor de texto, puedes tener la clase Button, que hereda hacía múltiples subclases y definir el comportamiento del Click en cada una de estas subclases, pero podrías llegar a tener cientos de subclases, además corres el riesgo de romper la aplicación cada vez que modificas la clase padre Button.

Otro problema del enfoque en donde el Click se define en cada subclase, es que hay acciones que pueden dispararse no solo desde un click, por ejemplo, pueden exisitir short cuts que deben realizar lo mismo que ciertos botones.

El patrón Command sugiere que los objetos no envíen solicitudes directamente. En su lugar, se deben de extraer los detalles de la solicitud, como: el objeto a modificar, el objeto que hace la solicitud, el nombre del método y la lista de argumentos, etc. Todo lo anterior deberá de ir en una clase comando con un único método encargado de activar esta solicitud.

El siguiente paso es hacer que los comandos implementen la misma interfaz. Normalmente tiene un único método de ejecución que no acepta parámetros.

Ya que el método de ejecución del comando no tiene parámetros, ¿cómo pasaremos los detalles de la solicitud al receptor? Resulta que el comando debe estar preconfigurado con esta información o ser capaz de conseguirla por su cuenta.

Regresemos a nuestro editor de textos. Tras aplicar el patrón Command, ya no necesitamos todas esas subclases de botón para implementar varios comportamientos de click. Basta con colocar un único campo dentro de la clase base Botón que almacene una referencia a un objeto de comando y haga que el botón ejecute ese comando en un click.

En nuestro ejemplo puedes notar que en la clase ClipBoard y Editor también estamos utilizando el patrón Singleton.

---

## Result
```
Complete text: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, ut! Ut, quae corrupti atque quaerat libero facilis explicabo!Ea, culpa doloribus perspiciatis dolorem tempore, quod consequatur beatae provident aspernatur rem, consequuntur laborum deleniti atque voluptate sunt suscipit placeat corrupti facere!

Text copied!: Lorem ipsum

Text cuted!: Lorem ipsum dolor sit amet consectetur adipisicing elit. 

Complete text: Ex, ut! Ut, quae corrupti atque quaerat libero facilis explicabo!Ea, culpa doloribus perspiciatis dolorem tempore, quod consequatur beatae provident aspernatur rem, consequuntur laborum deleniti atque voluptate sunt suscipit placeat corrupti facere!
```
