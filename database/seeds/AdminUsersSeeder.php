<?php

use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  
    protected $administrators = [
        [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'p@ssw0rd!16'
        ],
    ];  
  
    public function run()
    {
        foreach ($this->administrators as $administrator) {
          DB::table('users')->insert([
              'name' => $administrator['name'],
              'email' => $administrator['email'],
              'password' => bcrypt($administrator['password']),
          ]);
        }
    }
}
