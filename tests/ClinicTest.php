<?php
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ClinicTest extends TestCase
{
	//use DatabaseMigrations;
    /**
     * create clinic test
     *
     * @return void
     */
    /* public function testItCanCreateClinic()
    {
    	
        $clinic_cdc = factory(App\Models\Clinic::class)->make([
			'name' => 'Canadian Diagnostics Center',
        	'email' => 'cdc@gmail.com',
		]);
        
        $clinic_cdc->save();
        $this->seeInDatabase('clinics', ['email' => 'cdc@gmail.com']);
    } */
    
    public function testItCanCreateClinicUser(){
    	$clinics = factory(App\Models\Clinic::class,2)
    	->create([
    			'name' => 'Canadian Diagnostics Center',
    			'email' => 'cdc'.str_random(5).'@gmail.com',
    	])
    	->each(function($c) {
    		$c->users()->save(factory(App\Models\User::class)->make([
    			'email' => 'calwebprob'.str_random(5).'@gmail.com'
    		]));
    	});
    	$this->seeInDatabase('clinics', ['name' => 'Canadian Diagnostics Center']);
    	$this->seeInDatabase('users', ['first_name' => 'Alexendre']);
    }
}
