@extends('layouts.layout')

@section('content')

<div class="main__container">
    <div class="plans">
        <!-- <h1>Choose Your Plan</h1> -->
        <div class="credit__header text-center mb-4">
            <h1 class="text-3xl">Choose Your Plan</h1><br>
            <div class="credit__wrapper longer text-left">
                <div class="block font-bold text-xl underline text-sm">Money-Back Guarantee</div>
                <div>
                    If you're not fully satisfied, simply cancel within 7 days and we'll automatically refund the cost of your unused credits. No questions asked.
                </div>
            </div>
        </div>
        <a href="{{ route('stripe.credit') }}" class="credit__wrapper longer plan-item">
            <span>plan1: 100 mails</span>
            <span class="text-center">
                <p>$1.5/month</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full mt-1">Choose Plan</button>
            </span>
        </a>
        <a class="credit__wrapper longer plan-item">
            <span>plan2: 1,000 mails</span>
            <span class="text-center">
                <p>$15/month</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full mt-1">Choose Plan</button>
            </span>
        </a>
        <a class="credit__wrapper longer plan-item">
            <span>plan3: 10,000 mails</span>
            <span class="text-center">
                <p>$150/month</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full mt-1">Choose Plan</button>
            </span>
        </a>
    </div>
</div>
@endsection