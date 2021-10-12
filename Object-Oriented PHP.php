What does OOP stand for?
Object Oriented Programming



The process of creating an object of a class is called:
instantiation



Fill in the blanks to declare a class Singer having a display method that outputs the name. Then, create an object of the class and call the display method.
class Singer {
  public $name = "Ann";
  public function display() {
    echo $this->name;
  }
}
$s = new Singer();
$s->display();



Fill in the blanks to define the Guitarist class that implements the MusicianInterface. Call the play() method on the Guitarist object.
interface MusicianInterface {
  public function play();
}
class Guitarist implements 
MusicianInterface {
  public function play() {
    echo "La La La";
  }
}
$obj = new Guitarist();
$obj->play();



Which keyword is used to refer to properties or methods within the class itself?
this



The Foo() method cannot be overridden in a child class. Why?
class A {
  final function Foo() {
    echo "A";
  }
}
class B extends A {
  function Foo() {
  echo "B";
  }
}
final methods cannot be overridden