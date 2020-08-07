<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $json = File::get("database/data/countries.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            Country::create(array(
                'id' => $obj->id,
                'name' => $obj->name
            ));
        }
    }
}
