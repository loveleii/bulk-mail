<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cl = [
            [
                'last_name' => 'Pelayre',
                'first_name' => 'Lovely Jane',
                'middle_name' => 'Bongcales',
                'address' => 'Cawayanan, Tubigon, Bohol',
                'birth_date' => '2001-12-10',
                'phone_number' => '09071731450',
                'email' => 'lovelyjanepelayre@gmail.com',
                'initial_deposit' => 25000
            ],
            [
                'last_name' => 'Luka',
                'first_name' => 'Clifford',
                'middle_name' => 'Zome',
                'address' => ' Sydney, Australia',
                'birth_date' => '1975-08-10',
                'phone_number' => '09307665033',
                'email' => 'lovelyjanepelayre@gmail.com',
                'initial_deposit' => 20000
            ],
            [
                'last_name' => 'Aurestila',
                'first_name' => 'Jay',
                'middle_name' => 'Gonzaga',
                'address' => 'Cawayanan, Bohol',
                'birth_date' => '2002-10-03',
                'phone_number' => '09099281876',
                'email' => 'louiejayaurestila@gmail.com',
                'initial_deposit' => 11000
            ],
            [
                'last_name'         => 'Pelayre',
                'first_name'        => 'Sweet',
                'middle_name'       => 'Bongcales',
                'address'           => 'Cawayanan, Tubigon, Bohol',
                'birth_date'        => '2004-07-31',
                'phone_number'      => '0920929591',
                'email'             => 'weetiepelayre@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Mejias',
                'first_name'        => 'Francis Michael',
                'middle_name'       => 'Cabrera',
                'address'           => 'Inabanga, Bohol',
                'birth_date'        => '2002-07-08',
                'phone_number'      => '09445647784',
                'email'             => 'mejiasfranzsaijem@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Aurestila',
                'first_name'        => 'Andre',
                'middle_name'       => 'Gonzaga',
                'address'           => 'Sydney, Australia',
                'birth_date'        => '2005-06-30',
                'phone_number'      => '09445647784',
                'email'             => 'klydeaurestila@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name' => 'Mueblas',
                'first_name' => 'Mark Lister',
                'middle_name' => 'Tero',
                'address' => 'Purok 3. Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-11-13',
                'phone_number' => '09685326466',
                'email' => 'marklistermueblas3@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Villarmia',
                'first_name' => 'Ace Joy',
                'middle_name' => 'Mejare',
                'address' => 'Batasan, Tubigon, Japan',
                'birth_date' => '1989-04-18',
                'phone_number' => '09636344766',
                'email' => 'acejoygwapo@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name'         => 'Pongase',
                'first_name'        => 'John Ivan',
                'middle_name'       => 'Sumipo',
                'address'           => 'Cabulijan, Tubigon, Bohol',
                'birth_date'        => '2000-03-02',
                'phone_number'      => '09546574582',
                'email'             => 'sumipo231@gmail.com',
                'initial_deposit'   => 10000
            ],
            [
                'last_name'         => 'Flores',
                'first_name'        => 'Rosalino',
                'middle_name'       => 'Mecha',
                'address'           => 'Bakong, Bohol',
                'birth_date'        => '2001-09-05',
                'phone_number'      => '09463743474',
                'email'             => 'fross0988@gmail.com',
                'initial_deposit'   => 10000
            ],


        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
