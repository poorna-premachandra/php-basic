<?php

//Creating a class
class User
{
    //Properties
    public $name; //can assign a default value as well like this -> public $name = 'John Doe';
    public $email;
    private $status = 'active'; //private variable
    protected $password; //protected variable

    //Constructor
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    //Methods
    public function login()
    {
        echo $this->name . ' is logged in';
    }

    //Getter
    public function getStatus()
    {
        return $this->status;
    }

    //Setter
    public function setStatus($status)
    {
        $this->status = $status;
    }
}


//Instantiate a new object
$user1 = new User('Peter Parker', 'peter@gmail.com');

//Accessing object properties and methods
$user1->name = 'John Doe';
$user1->email = 'john@gmail.com';

var_dump($user1); //object(User)#1 (2) { ["name"]=> string(8) "John Doe" ["email"]=> string(14) "john@gmail.com" }

echo '</br>';

$user1->login();

echo '</br>';

/*

Access Modifiers

    1.public - The property or method can be accessed from anywhere. This is the default if we leave off the modifier.

    2.protected - The property or method can be accessed from within the class OR any class that inherits from it.

    3.private - The property can ONLY be accessed from within the class.

*/

echo $user1->getStatus();

echo '</br>';

$user1->setStatus('inactive');
echo $user1->getStatus();

echo '</br>';


//Inheritance

class Admin extends User
{
    public $level;

    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email); //similar to super() in Java
    }

    public function getPassword()
    {
        echo $this->password; //accessing a protected property of a super class via a sub class
    }

    public function setPassword($password)
    {
        $this->password = $password;  //modifying a protected property of a super class via a sub class
    }

    //Method override
    public function login()
    {
        echo 'Admin ' . $this->name . ' is logged in';
    }
}

$admin1 = new Admin('Tom Hank', 'tom@gmail.com', 5);

var_dump($admin1); //object(Admin)#2 (4) { ["name"]=> string(8) "Tom Hank" ["email"]=> string(13) "tom@gmail.com" ["status":"User":private]=> string(6) "active" ["level"]=> int(5) }

echo '</br>';

$admin1->setPassword('12345');
$admin1->getPassword();

echo '</br>';

$admin1->login(); //Admin Tom Hank is logged in

echo '</br>';


//Static members and methods
class MathUtil
{
    public static $pi = 3.14;

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

echo MathUtil::$pi;

echo '</br>';

echo MathUtil::add(1, 2, 3, 4, 5);

echo '</br>';


//Abstract classes

//Cannot be instantiated. But can be inherited by sub classes.

abstract class Shape
{
    protected $name;

    //Abstract method
    abstract public function calculateArea();

    //Constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    //Concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape
{
    private $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() //We have to override all the abstract methods 
    {
        return pi() * pow($this->radius, 2);
    }
}

$circle1 = new Circle('Cirlce', 5);
var_dump($circle1); //object(Circle)#3 (2) { ["name":protected]=> string(6) "Cirlce" ["radius":"Circle":private]=> int(5) }
echo '</br>';
echo $circle1->getName() . ' Area: ' . $circle1->calculateArea() . '</br>';

class Rectangle extends Shape
{
    private $height;
    private $width;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }
}

$rectangle1 = new Rectangle('Rectangle', 5, 10);
var_dump($rectangle1); //object(Rectangle)#4 (3) { ["name":protected]=> string(9) "Rectangle" ["height":"Rectangle":private]=> int(5) ["width":"Rectangle":private]=> int(10) }
echo '</br>';
echo $rectangle1->getName() . ' Area: ' . $rectangle1->calculateArea() . '</br>';


//Interfaces
interface ContentInterface
{
    public function display();
    public function edit();
}

class Article implements ContentInterface
{
    private $title;
    private $content;

    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() //Have to implement all interface methods
    {
        echo $this->title;
        echo $this->content;
    }

    public function edit()
    {
        echo 'Editing the article ' . $this->title;
    }
}

class Video implements ContentInterface
{
    private $title;
    private $url;

    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        echo $this->title;
        echo $this->url;
    }

    public function edit()
    {
        echo 'Editing the video ' . $this->title;
    }
}
