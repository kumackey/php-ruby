<?PHP

class Person
{
    public $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person('一郎', 10);
var_dump($person);
// object(Person)#1 (2) {
//   ["name"]=>
//   string(6) "一郎"
//   ["age":"Person":private]=>
//   int(10)
// }

echo $person->name;
// 一郎

echo $person->age;
// Fatal error: Uncaught Error: Cannot access private property Person::$age in ...