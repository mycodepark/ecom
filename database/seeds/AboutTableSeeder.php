<?php

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'name'          =>  'About Sample',
            'description'   =>  'This is about page',
        ]);
    }
}
