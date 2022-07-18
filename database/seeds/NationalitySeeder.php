<?php

use App\Nationality;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = config('discipline');
        $nationalities_list = $data['countries'];
        foreach ($nationalities_list as $nationality) {
            $new_nationality = new Nationality();
            $new_nationality->name = $nationality['name'];
            $new_nationality->acronym = $nationality['acronym'];
            $new_nationality->save();
        }
    }
}
