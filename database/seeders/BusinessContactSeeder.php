<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => '',
            'phone' => '800-657-5657',
            'url' => 'www.nutrablend.com',
            'company' => 'Nutra Blend LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'varla.wilcox@hiprofeeds.com',
            'phone' => '800-447-7620',
            'url' => '',
            'company' => 'Hi-Pro Feeds',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'dan.patee@consumer-supply.com',
            'phone' => '800-383-6927',
            'url' => '',
            'company' => 'Consumer Supply Distributing',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'info@kalmbachfeeds.com',
            'phone' => '419-294-3838',
            'url' => 'www.kalmbachfeeds.com',
            'company' => 'Kalmbach Feeds, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'info@trouwnutrition.com',
            'phone' => '800-328-8942',
            'url' => 'www.trouwnutritionusa.com',
            'company' => 'Truow Nutrition USA',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'cpfeeds@cpfeeds.com',
            'phone' => '920-775-9600',
            'url' => '',
            'company' => 'CP Feeds',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Ingredient Sales',
            'email' => 'ingredientsales@provimi-na.com',
            'phone' => '937-770-2423',
            'url' => '',
            'company' => 'Provimi North America',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Customer Service',
            'email' => 'webmaster@seminerals.com',
            'phone' => '229-243-5200',
            'url' => '',
            'company' => 'Marshall Minerals, Inc',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Mike Barber',
            'email' => 'mikebarber@seminerals.com',
            'phone' => '229-243-5200',
            'url' => 'www.seminerals.com',
            'company' => 'Eastern Minerals, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Bob Reeves',
            'email' => 'breeves@westernmilling.com',
            'phone' => '602-251-3600',
            'url' => 'www.westernmilling.com',
            'company' => 'Western Milling, LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Bob Bercynski',
            'email' => 'bberc@westernmilling.com',
            'phone' => '559-302-1026',
            'url' => 'www.westernmilling.com',
            'company' => 'Western Milling LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Craig Brown',
            'email' => 'rennut@rennut.com',
            'phone' => '800-346-3649',
            'url' => 'www.rennut.com',
            'company' => 'Renaissance Nutrition, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Mark DeGraw',
            'email' => 'quxdraw@earthlink.net',
            'phone' => '559-674-7994',
            'url' => '',
            'company' => 'DeGraw & Associates',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Dave Nuss',
            'email' => 'dnuss@heiskell.com',
            'phone' => '559-685-6590',
            'url' => 'www.heiskell.com',
            'company' => 'JD Heiskell',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Dr. Kyle Grigsby',
            'email' => 'kgrigsby@heiskell.com',
            'phone' => '806-367-1389',
            'url' => 'www.heiskell.com',
            'company' => 'JD Heiskell',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Todd Gearhart',
            'email' => 'tgearhart@heiskell.com',
            'phone' => '208-536-2507',
            'url' => 'www.heiskell.com',
            'company' => 'JD Heiskell',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Dustin Desian',
            'email' => 'ddendesian@nutrius.com',
            'phone' => '559-547-9615',
            'url' => 'www.nutrius.com',
            'company' => 'Nutrius',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Bob Van Der Schaaf',
            'email' => 'bvanderschaaf@nutrius.com',
            'phone' => '559-960-9286',
            'url' => 'www.nutrius.com',
            'company' => 'Nutrius',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Kevin Swager',
            'email' => 'kswager@pacificelements.net',
            'phone' => '209-541-1216',
            'url' => 'www.pacificelements.net',
            'company' => 'Pacific Elements',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Jackie Knutz',
            'email' => 'jknutz@pinnaclepremix.com',
            'phone' => '530-908-2923',
            'url' => 'www.pinnaclepremix.com',
            'company' => 'Pinnacle Premix LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Larry Skoglund',
            'email' => 'lskoglund@pinnaclepremix.com',
            'phone' => '503-716-0504',
            'url' => 'www.pinnaclepremix.com',
            'company' => 'Pinnacle Premix LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Drew Corrigan',
            'email' => 'drew.corrigan@simplot.com',
            'phone' => '208-780-4853',
            'url' => 'www.simplot.com',
            'company' => "Western Stockmen's Simplot",
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Tom Tolle',
            'email' => 'ttolle@agfinity.com',
            'phone' => '970-515-2629',
            'url' => '',
            'company' => 'Agfinity',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Kyle Cederberg',
            'email' => 'kdcdrbrg@countrysidefeed.com',
            'phone' => '620-947-3111',
            'url' => '',
            'company' => 'Countryside Feeds',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Alden Bowman',
            'email' => 'alden@kirbyagri.com',
            'phone' => '717-299-9306',
            'url' => 'www.kirbyagri.com',
            'company' => 'Kirby Agri Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Jeff Matuszczak',
            'email' => 'orders@mercermilling.com',
            'phone' => '315-701-4482',
            'url' => 'www.mercermilling.com',
            'company' => 'Mercer Milling Co.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Joanne St Onge',
            'email' => 'joanne@poulingrain.com',
            'phone' => '802-334-6731',
            'url' => 'www.poulingrain.com',
            'company' => 'Poulin Grain, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Larry Davis',
            'email' => 'unitedfeedco@embarqmail.com',
            'phone' => '863-763-2145',
            'url' => '',
            'company' => 'United Feed Coop',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Will Barker',
            'email' => '',
            'phone' => '352-463-2335',
            'url' => 'www.svfeeds.com',
            'company' => 'Suwannee Valley Feeds, LLC',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Marty Short',
            'email' => 'mshort@ifa-coop.com',
            'phone' => '435-258-0522',
            'url' => '',
            'company' => 'Intermountain Farmers Assn.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Garth Searle',
            'email' => 'garth@lvf.com',
            'phone' => '208-436-6100',
            'url' => '',
            'company' => 'Land View Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Sean Costa',
            'email' => 'sean.costa@performixnutrition.com',
            'phone' => '208-465-1724',
            'url' => 'www.performixnutrition.com',
            'company' => 'PerforMix Nutrition',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Todd Roney',
            'email' => 'wolfkill@smwireless.net',
            'phone' => '509-488-3338',
            'url' => '',
            'company' => 'Wolfkill Feed & Fertilizer',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Terry Hurshman',
            'email' => 'terry@stutsmans.com',
            'phone' => '800-669-2281',
            'url' => '',
            'company' => 'Eldon C. Stutsman, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'John Scheuers',
            'email' => 'johns@unitedcooperative.com',
            'phone' => '920-887-1756',
            'url' => '',
            'company' => 'United Cooperative',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Mike Wright',
            'email' => 'info@ddingredient.com',
            'phone' => '800-543-7962',
            'url' => 'ddingredient.com',
            'company' => 'D&D Ingredient Distributors, Inc.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Andy Dugan',
            'email' => 'adugan@goldstarfeed.com',
            'phone' => '315-841-8282',
            'url' => 'www.jdhco.com',
            'company' => 'Gold Star Feed and Grain',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Jeff Hurst',
            'email' => 'idofeed1@centurytel.net',
            'phone' => '800-236-1436',
            'url' => '',
            'company' => 'I.D.O. Feed & Supply Corp',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Jim Carter',
            'email' => 'jcarter@reisdorfbros.com',
            'phone' => '585-457-3092',
            'url' => 'www.reisdorfbros.com',
            'company' => 'Reisdorf Bros.',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Brad Gerber',
            'email' => 'gerberfeed@embarqmail.com',
            'phone' => '330-857-4422',
            'url' => 'www.gerberfeed.com',
            'company' => 'Gerber Feed Service',
            'role' => 'distributor'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Mark Herrman',
            'email' => 'mark.herrman@churchdwight.com',
            'phone' => '(608) 212-6553',
            'url' => '',
            'company' => '',
            'role' => 'representative'
        ]);

        DB::table('business_contacts')->insert([
            'name' => 'Shawna Martinho',
            'email' => 'Shawna.Martinho@churchdwight.com',
            'phone' => '(559) 960-0654',
            'url' => '',
            'company' => '',
            'role' => 'representative'
        ]);
    }
}
