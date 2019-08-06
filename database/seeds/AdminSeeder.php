<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = DB::table('users')->where('type', 'admin')->first();

      if(!$admin) {
        return DB::table('users')->insert([
              'name' => 'admin',
              'email' => 'admin@admin.admin',
              'type' => 'admin',
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
              'remember_token' => Str::random(10),
              'created_at' => now(),
              'updated_at' => now(),
            ]);
      }
      return;
    }
}
