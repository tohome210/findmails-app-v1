<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Email;
use App\Models\Domain;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class DomainsearchController extends Controller
{
    //
    public function show(): View
    {
        return view('pages.domainsearch', ['pageTitle' => 'domainsearch']);
    }
    public function history()
    {
        // $emails = Email::whereHas('domains', function (Builder $query) {
        //     $query->where('user_id', Auth::id());
        // })->get();
        return Auth::user()->domains()->with('emails:id,address')->get();
        // return ['aaa@gmail.com', 'bbb@gmail.com'];
    }
    public function create(Request $request)
    {
        $emails = $request->input('emails');
        $domain = Domain::firstOrCreate(
            [
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
                // $domain->emails()->where('address', $existEmail->address)->get();
                if (!$domain->emails()->where('address', $existEmail->address)->get()) {
                    $domain->emails()->save($existEmail);
                }
            } else {
                $domain->emails()->save(new Email(['address' => $email]));
            }
        }
        return $domain;
    }
}
