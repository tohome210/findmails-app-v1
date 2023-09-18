<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Email;
use App\Models\DomainCsv;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class Bulkfinder1Controller extends Controller
{
    //
    public function show(): View
    {
        return view('pages.bulkfinder1', ['pageTitle' => 'bulkfinder1']);
    }
    public function history()
    {

        return Auth::user()->domainCsvs()->latest('created_at')->get();
    }
    public function getById(string $id)
    {

        return DomainCsv::where('id', $id)->get();
        // return $id;
    }
    public function create(Request $request)
    {
        $csv = $request->input('csv');
        $domainCsv = new DomainCsv([
            'csv' => $request->input('csv'),
            'file_name' => $request->input('file_name')
        ]);
        Auth::user()->domainCsvs()->save($domainCsv);
        return $domainCsv;
    }
}
