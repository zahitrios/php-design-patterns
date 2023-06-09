# Observer design pattern

This pattern is particularly useful when you want to communicate the change of state of an object.

Each object has a specific state at a given time. In this pattern, we have two actors: the observer object and the observable object. What this pattern solves is: "Notify the observers whenever the observable changes."

To achieve this: The observable object maintains a list of its observers.

In this example, the 'BankAccount' class implements the 'Observable' interface, which enforces the definition of the methods: attach, detach, and notify.

On the other hand, the 'BankClient' class implements the 'Observer' interface, which enforces the definition of the method: update.

---

Este patrón es particularmente util cuando desas comunicar el cambio de estado de un objeto.

Cada objeto tiene un estado específico en un tiempo determinado, en este patrón tenemos dos actores, el objeto observador y el objeto observable, lo que resuelve este patrón es: "Notificar a los observadores cada vez que el observable cambie"

Para logar esto: El objeto observable tiene una lista de sus observadores.

En este ejemplo, la clase 'BankAccount' implementa la interfaz 'Observable' y con esto se forza la definición de los métodos: attach, detach y notify.

Por otro lado, la clase 'BankClient' implementa la interfaz 'Observer' y con esto se forza la definición delmétodo: update

---

## Result

```
Balance updated!!
Notification: your new balance is: 99.99
Balance updated!!
Notification: your new balance is: 1099.98
```
