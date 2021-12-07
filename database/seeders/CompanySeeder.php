<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([[
            'name'=>'RMS',
            'email'=>'info@rms.com',
            'contact'=>'+92337-9701827',
        ],
        [
            'name'=>'RMS',
            'email'=>'hr@rms.com',
            'contact'=>'+92333-0000000',
        ]]);
    }
}
