<?php

use Illuminate\Database\Seeder;

class JobTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_types = array('Full Time', 'Part Time', 'Freelance', 'Internship', 'Volunteer');

        for($i = -1; $i++, $i < count($job_types);)
        {
            DB::table('job_types')->insert([
                'name' => $job_types[$i],
                'alias' => str_slug($job_types[$i], '-')
            ]);
        }
    }
}
