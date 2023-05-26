# Observer design pattern

This patter is useful when you need to comunicate the status change of one object

Every object has a status in an specific time, we have two actors, the observer and the observable object, what we are reaching is: Notify to the observers every time that the observable wants.


To achieve that: the observable object needs a list of the observers, the observer needs an instance of the observable object in order to get access to its funcions and get to new observable state
