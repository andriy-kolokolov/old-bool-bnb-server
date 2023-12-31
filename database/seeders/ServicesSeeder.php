<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder {
    public function run(): void {
        $services = [
            [
                'name' => 'Hot water',
                'icon' => 'fa-solid fa-faucet',
            ],
            [
                'name' => 'Air conditioning',
                'icon' => 'fa-solid fa-fan',
            ],
            [
                'name' => 'Hair dryer',
                'icon' => 'fa-solid fa-blow-dryer',
            ],
            [
                'name' => 'Towels, bed sheets, soap, and toilet paper',
                'icon' => 'fa-solid fa-bath',
            ],
            [
                'name' => 'Bed linens',
                'icon' => 'fa-solid fa-bed',
            ],
            [
                'name' => 'Single-story home (no stairs)',
                'icon' => 'fa-solid fa-home',
            ],
            [
                'name' => 'Courtyard',
                'icon' => 'fa-solid fa-tree',
            ],
            [
                'name' => 'Kitchen',
                'icon' => 'fa-solid fa-utensils',
            ],
            [
                'name' => 'Crib',
                'icon' => 'fa-solid fa-baby',
            ],
            [
                'name' => 'Smoking allowed',
                'icon' => 'fa-solid fa-smoking',
            ],
            [
                'name' => 'Iron', 'icon' =>
                'fa-solid fa-iron',
            ],
            [
                'name' => 'Refrigerator',
                'icon' => 'fa-solid fa-refrigerator',
            ],
            [
                'name' => 'Garden',
                'icon' => 'fa-solid fa-seedling',
            ],
            [
                'name' => 'Dishwasher',
                'icon' => 'fa-solid fa-dishwasher',
            ],
            [
                'name' => 'Washing machine',
                'icon' => 'fa-solid fa-washing-machine',
            ],
            [
                'name' => 'Host greets you in person',
                'icon' => 'fa-solid fa-handshake',
            ],
            [
                'name' => 'Gym',
                'icon' => 'fa-solid fa-dumbbell',
            ],
            [
                'name' => 'Free street parking',
                'icon' => 'fa-solid fa-parking',
            ],
            [
                'name' => 'Free parking on premises',
                'icon' => 'fa-solid fa-garage',
            ],
            [
                'name' => 'Dishes and silverware',
                'icon' => 'fa-solid fa-plate-knife',
            ],
            [
                'name' => 'Pool',
                'icon' => 'fa-solid fa-swimming-pool',
            ],
            [
                'name' => 'Heating',
                'icon' => 'fa-solid fa-thermometer-half',
            ],
            [
                'name' => 'TV',
                'icon' => 'fa-solid fa-tv',
            ],
            [
                'name' => 'Bathtub',
                'icon' => 'fa-solid fa-bathtub',
            ],
            [
                'name' => 'Panoramic view',
                'icon' => 'fa-solid fa-binoculars',
            ],
            [
                'name' => 'Wi-Fi',
                'icon' => 'fa-solid fa-wifi',
            ],
        ];

        foreach ($services as $service) {
            DB::table('services')->insert($service);
        }
    }
}
