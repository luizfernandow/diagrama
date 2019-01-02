<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminEmail = 'admin@diagrama.com.br';

        $user = User::where('email', $adminEmail)
                    ->limit(1)
                    ->first();

        if (!$user) {
            $this->command->comment("No admin users exist, creating one");

            $user = new User();
            $user->name = 'Admin';
            $user->email = $adminEmail;
            $user->password = 'diaXml';
            $user->save();
        }        
    }
}
