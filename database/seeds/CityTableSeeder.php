<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CityTableSeeder extends Seeder {
	
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	
	public function run() {
		
		DB::table ( 'cities' )->delete ();
		
		$cities = [ 
				[ 
						'name' => 'Montréal',
						'country_id' => 2 
				],
				[ 
						'name' => 'Calgary',
						'country_id' => 2 
				],
				[ 
						'name' => 'Toronto',
						'country_id' => 2 
				],
				[ 
						'name' => 'North York',
						'country_id' => 2 
				],
				[ 
						'name' => 'Winnipeg',
						'country_id' => 2 
				],
				[ 
						'name' => 'Edmonton',
						'country_id' => 2 
				],
				[ 
						'name' => 'Mississauga',
						'country_id' => 2 
				],
				[ 
						'name' => 'Scarborough',
						'country_id' => 2 
				],
				[ 
						'name' => 'Vancouver',
						'country_id' => 2 
				],
				[ 
						'name' => 'Etobicoke',
						'country_id' => 2 
				],
				[ 
						'name' => 'London',
						'country_id' => 2 
				],
				[ 
						'name' => 'Hamilton',
						'country_id' => 2 
				],
				[ 
						'name' => 'Ottawa',
						'country_id' => 2 
				],
				[ 
						'name' => 'Laval',
						'country_id' => 2 
				],
				[ 
						'name' => 'Surrey',
						'country_id' => 2 
				],
				[ 
						'name' => 'Brampton',
						'country_id' => 2 
				],
				[ 
						'name' => 'Windsor',
						'country_id' => 2 
				],
				[ 
						'name' => 'Saskatoon',
						'country_id' => 2 
				],
				[ 
						'name' => 'Kitchener',
						'country_id' => 2 
				],
				[ 
						'name' => 'Markham',
						'country_id' => 2 
				],
				[ 
						'name' => 'Regina',
						'country_id' => 2 
				],
				[ 
						'name' => 'Burnaby',
						'country_id' => 2 
				],
				[ 
						'name' => 'Québec',
						'country_id' => 2 
				],
				[ 
						'name' => 'York',
						'country_id' => 2 
				],
				[ 
						'name' => 'Richmond',
						'country_id' => 2 
				],
				[ 
						'name' => 'Vaughan',
						'country_id' => 2 
				],
				[ 
						'name' => 'Burlington',
						'country_id' => 2 
				],
				[ 
						'name' => 'Oshawa',
						'country_id' => 2 
				],
				[ 
						'name' => 'Oakville',
						'country_id' => 2 
				],
				[ 
						'name' => 'Saint Catharines',
						'country_id' => 2 
				],
				[ 
						'name' => 'Longueuil',
						'country_id' => 2 
				],
				[ 
						'name' => 'Richmond Hill',
						'country_id' => 2 
				],
				[ 
						'name' => 'Thunder Bay',
						'country_id' => 2 
				],
				[ 
						'name' => 'Nepean',
						'country_id' => 2 
				],
				[ 
						'name' => 'Cape Breton',
						'country_id' => 2 
				],
				[ 
						'name' => 'East York',
						'country_id' => 2 
				],
				[ 
						'name' => 'Halifax',
						'country_id' => 2 
				],
				[ 
						'name' => 'Cambridge',
						'country_id' => 2 
				],
				[ 
						'name' => 'Gloucester',
						'country_id' => 2 
				],
				[ 
						'name' => 'Abbotsford',
						'country_id' => 2 
				],
				[ 
						'name' => 'Guelph',
						'country_id' => 2 
				],
				[ 
						'name' => 'Saint John´s',
						'country_id' => 2 
				],
				[ 
						'name' => 'Coquitlam',
						'country_id' => 2 
				],
				[ 
						'name' => 'Saanich',
						'country_id' => 2 
				],
				[ 
						'name' => 'Gatineau',
						'country_id' => 2 
				],
				[ 
						'name' => 'Delta',
						'country_id' => 2 
				],
				[ 
						'name' => 'Sudbury',
						'country_id' => 2 
				],
				[ 
						'name' => 'Kelowna',
						'country_id' => 2 
				],
				[ 
						'name' => 'Barrie',
						'country_id' => 2 
				],
				[ 
						'name' => 'New York',
						'country_id' => 1 
				],
				[ 
						'name' => 'Los Angeles',
						'country_id' => 1 
				],
				[ 
						'name' => 'Chicago',
						'country_id' => 1 
				],
				[ 
						'name' => 'Houston',
						'country_id' => 1 
				] 
		];
		
		DB::table ( 'cities' )->insert ( $cities );
	}
}

