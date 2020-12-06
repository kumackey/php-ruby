<?PHP

class Capsule
{
    private $element;

    public function __construct($element)
    {
        $this->element = $element;
    }

    public function getElement()
    {
        return $this->element;
    }

    public function setElement($element)
    {
        $this->element = $element;
    }
}

$capsule = new Capsule('有効成分');
echo $capsule->getElement();
// 有効成分

var_dump($capsule);
// object(Capsule)#1 (1) {
//   ["element":"Capsule":private]=>
//   string(12) "有効成分"
// }

$capsule->setElement('毒');
var_dump($capsule);
// object(Capsule)#1 (1) {
//   ["element":"Capsule":private]=>
//   string(3) "毒"
// }
