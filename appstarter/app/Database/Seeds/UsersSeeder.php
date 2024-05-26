<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UsersModel;
use Faker\Factory;

class UsersSeeder extends Seeder
{
    protected $user;
    protected $faker;

    public function __construct()
    {
        $this->user = new UsersModel();
        $this->faker = Factory::create();
    }

    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $this->user->insert([
                'id' => uniqid('user-'),
                'username' => $this->faker->userName(),
                'password' => password_hash($this->faker->password(), PASSWORD_BCRYPT),
                'email' => $this->faker->email(),
                'no_hp' => $this->faker->phoneNumber(),
            ]);
        }
    }
}
