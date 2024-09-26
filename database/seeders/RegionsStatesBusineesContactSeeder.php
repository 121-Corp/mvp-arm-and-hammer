<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RegionsStatesBusineesContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // if(Storage::disk('public')->exists('jsons/RepresentativesStatesRegions.json')){
            $listRepresentatives = collect(Storage::json('public/jsons/RepresentativesStatesRegions.json'));
            foreach($listRepresentatives as $representative){
                $dataRepresentative = DB::table('business_contacts')->where('name','=', $representative['name'])->select('id')->first();

                foreach($representative['states'] as $state){
                    $dataState= DB::table('states')->where('name','=',$state)->select('id')->first();;

                    DB::table('state_business_contacts')->insert([
                        'state' => $dataState->id,
                        'contact' => $dataRepresentative->id
                    ]);
                }
            }
        // }
    }
}
