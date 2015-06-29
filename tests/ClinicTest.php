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
    public function testItCanCreateClinic()
    {
    	/*
    	 * factory(App\Models\User::class)->make([
        	'email' => 'calwebprob@gmail.com',
		])
    	 */
    	
        $clinic_cdc = factory(App\Models\Clinic::class)->make([
			'name' => 'Canadian Diagnostics Center',
        	'email' => 'cdc@gmail.com',
		]);
        
        $clinic_cdc->save();
        $this->seeInDatabase('clinics', ['email' => 'cdc@gmail.com']);
    }
}
