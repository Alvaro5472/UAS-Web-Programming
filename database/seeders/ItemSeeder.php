<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_name' => 'Vegetable 1',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 1000000,
            'image' => 'ItemImages/Vegetable 1.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 2',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 2000000,
            'image' => 'ItemImages/Vegetable 2.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 3',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 3000000,
            'image' => 'ItemImages/Vegetable 3.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 4',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 4000000,
            'image' => 'ItemImages/Vegetable 4.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 5',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 5000000,
            'image' => 'ItemImages/Vegetable 5.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 6',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 4500000,
            'image' => 'ItemImages/Vegetable 6.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 7',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 4000000,
            'image' => 'ItemImages/Vegetable 7.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 8',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 3500000,
            'image' => 'ItemImages/Vegetable 8.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 9',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 3000000,
            'image' => 'ItemImages/Vegetable 9.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 10',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 2500000,
            'image' => 'ItemImages/Vegetable 10.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 11',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 2000000,
            'image' => 'ItemImages/Vegetable 11.png'
        ]);
        Item::create([
            'item_name' => 'Vegetable 12',
            'item_desc' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. This limited vegetable is the only one in the world because of its size & color.',
            'price' => 1500000,
            'image' => 'ItemImages/Vegetable 12.png'
        ]);
    }
}
