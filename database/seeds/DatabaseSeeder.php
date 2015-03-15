<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		$this->call('UserTableSeeder');
	}


}

class UserTableSeeder extends Seeder {

    public function run()
    {
    	DB::table('users')->delete();

    	$data['user_name'] = 'Admin';
    	$data['user_login'] = 'admin';
    	$data['user_email'] = 'admin@localhost';
    	$data['user_pass'] = Hash::make('admin');
    	$data['user_role'] = 'admin';
    	$data['user_activated'] = 1;
    	// \dd($data);
       	User::create($data);
    }

}
