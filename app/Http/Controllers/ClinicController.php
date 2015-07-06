<?php namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use App\Repositories\ClinicRepository;

class ClinicController extends BaseController
{
	private $repository;
	
	public function __construct(ClinicRepository $repository)
	{
		$this->repository = $repository;
	}
	
	/**
     * Store a new clinic
     * 
     * @return array
     */
    public function store(Request $request)
    {
    	$validator = Validator::make($request->input('clinic'), [
            'name' => 'required|max:255',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return [ 'status' => 'validation_failure', $validator->errors() ];
        }
    	
		$clinic = $this->repository->setupClinic($request);
		if( ! $clinic || ! $clinic->id ){
			$response = [ 'status' => 'failed' ];
		} else {
			$response = [ 'status' => 'successs', 'body' => $clinic ];
		}
		return $response;
		
    }
}
