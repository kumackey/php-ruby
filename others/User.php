<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    static function findById($id)
    {
        /** IDが1のときはユーザオブジェクトを返し、それ以外のときはユーザオブジェクトを返さないとします */
        if ($id === 1) {
            return new static('最初のユーザ');
        } else {
            return null;
        }
    }
}

function printUser($user)
{
    // ユーザオブジェクトが存在するかを確認する
    if (empty($user)) {
        echo 'ユーザはいません';
    } else {
        var_dump($user);
    }
}

$user2 = User::findById(2);
printUser($user2);
// ユーザはいません

var_dump($user2);
// NULL

$user1 = User::findById(1);
printUser($user1);
// object(User)#1 (1) {
//   ["name":"User":private]=>
//   string(18) "最初のユーザ"
// }