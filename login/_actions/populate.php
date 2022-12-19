<h1>Hello</h1>
<?php

include("../vendor/autoload.php");

use Faker\Factory as Faker;

use Libs\Database\MYSQL;
use Libs\Database\UsersTable;

$faker = Faker::create();
$table = new UsersTable(new MySQL());
// $table->insert([
//     'name'=> 'manual',
//     'email'=>'manual@gmail.com',
//     'phone'=>'6789012',
//     'address'=> 'faker not work',
//     'password'=> 'faker',
//     'role_id' => '1'
    
// ]);



if ($table) {
    echo "Database connection opened.";
    for($i = 0; $i < 10; $i++){
        $data = [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'password' => md5('password'),
            'role_id' => $i < 5 ? rand(1, 3) : 1
        ];
        $table->insert($data);
    };

    echo "Done populating user table.";
}