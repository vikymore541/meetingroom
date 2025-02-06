<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::insert([
            [
                'uuid' => Str::uuid(),
                'room_no' => '101',
                'name' => 'Executive Conference Room',
                'description' => 'A spacious room with modern facilities',
                'sub_desc' => 'Includes projector, AC, and whiteboard',
                'max_occupancy' => 10,
                'rate' => 200.00,
                'image' => 'room101.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'room_no' => '102',
                'name' => 'Small Meeting Room',
                'description' => 'Perfect for small team meetings',
                'sub_desc' => 'Includes WiFi, coffee machine, and whiteboard',
                'max_occupancy' => 5,
                'rate' => 100.00,
                'image' => 'room102.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'room_no' => '103',
                'name' => 'VIP Boardroom',
                'description' => 'Premium boardroom with a luxury setup',
                'sub_desc' => 'Includes LED screen, premium seating, and catering service',
                'max_occupancy' => 15,
                'rate' => 500.00,
                'image' => 'room103.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
