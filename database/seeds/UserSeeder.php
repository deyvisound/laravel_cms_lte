<?php 

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$dados = [
    		'name'=>"Administrador",
    		'email'=>"admin@admin.com",
    		'password' => bcrypt("admin"),
    	];

    	if(User::where('email', '=', $dados['email'])->count()){
    		$user = User::where('email', '=', $dados['email'])->first();
    		$user->update($dados);
    	}else{
    		User::create($dados);
    	}
    }
}