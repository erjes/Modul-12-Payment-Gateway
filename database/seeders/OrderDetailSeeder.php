<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;

class OrderDetailSeeder extends Seeder
{
    public function run(): void
    {
        $order = Order::first(); // Ambil order pertama
        $product1 = Product::first(); // Ambil produk pertama
        $product2 = Product::skip(1)->first(); // Ambil produk kedua

        // Membuat data dummy order details
        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product1->id,
            'quantity' => 2,
            'price' => $product1->price,
        ]);

        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product2->id,
            'quantity' => 1,
            'price' => $product2->price,
        ]);
    }
}
