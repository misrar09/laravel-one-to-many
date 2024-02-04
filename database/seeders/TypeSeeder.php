<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [

                'name' => 'Machine Learning',
                'detail' => 'This is the description',
            ],
            [
                'name' => 'Entrepreneurship',
                'detail' => 'This is the  description',
            ],
            [
                'name' => 'General Science',
                'detail' => 'This is the  description',
            ],

        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    }
}
