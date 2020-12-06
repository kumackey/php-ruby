<?PHP

class Sample
{
    const TEST_CODE = 'test_code';

    public function printCode()
    {
        $code = self::TEST_CODE;
        echo "コードは「{$code}」です。";
    }
}

echo Sample::TEST_CODE;
// test_code

$sample = new Sample();
$sample->printCode();
// コードは「test_code」です。