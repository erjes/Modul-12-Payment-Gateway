<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first(); // Ambil user pertama untuk pengujian
        // Membuat data dummy order
        Order::create([
            'order_id' => 'ORD' . rand(1000, 9999),
            'user_id' => $user->id,
            'total_price' => 250000,
            'status' => 'pending',
            'payment_status' => 'unpaid',
        ]);
    }
}
