<?php

use Illuminate\Database\Seeder;

class JobLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_levels = array('Entry', 'Junior', 'Intermediate', 'Senior');

        for($i = -1; $i++, $i < count($job_levels);)
        {
            DB::table('job_levels')->insert([
                'name' => $job_levels[$i],
                'alias' => str_slug($job_levels[$i], '-')
            ]);
        }
    }
}
