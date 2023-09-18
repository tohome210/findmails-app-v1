<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Email;
use App\Models\Single;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class FindersearchController extends Controller
{
    //
    public function show(): View
    {
        // dd(env('STRIPE_KEY'));
        return view('pages.findersearch', ['pageTitle' => 'findersearch']);
    }
    public function history()
    {
        $emails = Email::whereHas('singles', function (Builder $query) {
            $query->where('user_id', Auth::id());
        })->get();
        return $emails;
        // return ['aaa@gmail.com', 'bbb@gmail.com'];
    }
    public function create(Request $request)
    {
        $emails = $request->input('emails');
        $single = Single::firstOrCreate(
            [
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'domain_name' => $request->input('domain_name'),
                'user_id' => Auth::id()
            ]
        );
        foreach ($emails as $email) {
            $validator = Validator::make(['email' => $email], [
                'email' => 'unique:emails,address'
            ]);
            if ($validator->fails()) {
                $existEmail = Email::where('address', $email)->first();
                if (!$single->emails()->where('address', $existEmail->address)->get()) {
                    $single->emails()->save($existEmail);
                }
            } else {
                $single->emails()->save(new Email(['address' => $email]));
            }
        }
        // return ($single->emails()->get());
    }
}
