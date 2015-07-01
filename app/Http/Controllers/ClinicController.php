<?php namespace App\Http\Controllers;

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
     */
    public function store(Request $request)
    {
    	
		$clinic = $this->repository->setupClinic($request);
		if( ! $clinic || ! $clinic->id ){
			$response = [ 'status' => 'failed' ];
		} else {
			$response = [ 'status' => 'successs', 'body' => $clinic ];
		}
		return $response;
		
    }
}
