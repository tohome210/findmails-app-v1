<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;

class LaraveliaController extends Controller
{
    public function index()
    {
        // dd(getenv("GOOGLE_CLIENT_ID"));
        return view('stripe.index');
    }
    public function credit()
    {
        // dd(getenv("GOOGLE_CLIENT_ID"));
        return view('stripe.credit');
    }

    public function store(Request $request)
    {
        try {
            // dd(env('STRIPE_SECRET'));
            $stripe = new StripeClient(getenv('STRIPE_SECRET'));

            $stripe->paymentIntents->create([
                'amount' => 99 * 100,
                'currency' => 'usd',
                'payment_method' => $request->payment_method,
                'description' => 'Demo payment with stripe',
                'confirm' => true,
                'receipt_email' => $request->email,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'never'
                ]
            ]);
        } catch (CardException $th) {
            throw new Exception("There was a problem processing your payment", 1);
        }

        return back()->withSuccess('Payment done.');
    }
}
