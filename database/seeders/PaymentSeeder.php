<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Order;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $order = Order::first(); // Ambil order pertama

        // Membuat data dummy pembayaran
        Payment::create([
            'order_id' => $order->id,
            'snap_token' => 'sampleSnapToken123',
            'status' => 'pending',
            'expired_at' => now()->addMinutes(30),
            'paid_at' => null, // Pembayaran belum selesai
        ]);
    }
}
