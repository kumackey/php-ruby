<?PHP

class VertebrateAnimal
{
    public static function isVertebrateAnimal($group)
    {
        $vertebrate_animals = self::getVertebrateAnimals();
        return in_array($group, $vertebrate_animals, true);
    }

    private static function getVertebrateAnimals()
    {
        return ['fishes', 'amphibians', 'reptiles', 'birds', 'mammals'];
    }
}

$is_vertebrate_animal1 = VertebrateAnimal::isVertebrateAnimal('fishes');
var_dump($is_vertebrate_animal1);
// bool(true)

$is_vertebrate_animal2 = VertebrateAnimal::isVertebrateAnimal('insects');
var_dump($is_vertebrate_animal2);
// bool(false)