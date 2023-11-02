<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout($id, Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $product = Product::find($id);

        $YOUR_DOMAIN = 'http://blazingship.test';

        $order = Order::create([
            'agent_id' => 1,
            'product_id' => $id,
            'phone_number' => $request->phone_number,
            'address' => $request->line_1 . PHP_EOL . $request->line_2 ,
            'country' => 'Malaysia',
            'state' => $request->state,
            'city' => $request->city,
            'postcode' => $request->postcode,
            'quantity' => 1,
            'price' => Product::find($id)->price,
            'total' => Product::find($id)->price,
            'payment_method' => '',
            'payment_status' => 'unpaid',
            'notes' => 'notes here',
        ]);

        $checkout_session = \Stripe\Checkout\Session::create([
          'line_items' => [[
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'price_data' => [
                  'currency' => 'myr',
                  'unit_amount' => $product->price * 100,
                  'product_data' => [
                    'name' => $product->name,
                    'description' => $product->description,
                    'images' => [$product->getMedia('product_photos')->first()->getUrl()],
                  ],
                ],
                'quantity' => 1,
          ]],
          'mode' => 'payment',
          'success_url' => $YOUR_DOMAIN . '/payment-success/?session_id={CHECKOUT_SESSION_ID}&order_id=' . $order->id,
          'cancel_url' => $YOUR_DOMAIN . '/payment-cancel',
        ]);


        return redirect($checkout_session->url);
    }

    public function success()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET_KEY'));
        $session = $stripe->checkout->sessions->retrieve(request()->query('session_id'));
        $order_id = request()->query('order_id');

        $order = Order::find($order_id);
        $order->payment_method = $session->payment_method_types[0];
        $order->payment_status = 'paid';
        $order->save();

        if ($order->save()) {
            return view('product.success', compact('order', 'session'));
        } else {
            dd('error saving');
        }
    }

    public function cancel()
    {

    }

    public function summary($id)
    {
        $product = Product::find($id);
        return view('product.summary', compact('product'));
    }
}
