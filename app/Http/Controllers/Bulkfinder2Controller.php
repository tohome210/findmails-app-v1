<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Email;
use App\Models\SingleCsv;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Builder;

class Bulkfinder2Controller extends Controller
{
    //
    public function show(): View
    {
        return view('pages.bulkfinder2', ['pageTitle' => 'bulkfinder2']);
    }
    public function history()
    {

        return Auth::user()->singleCsvs()->latest('created_at')->get();
    }
    public function getById(string $id)
    {

        return SingleCsv::where('id', $id)->get();
        // return $id;
    }
    public function create(Request $request)
    {
        $csv = $request->input('csv');
        $singleCsv = new SingleCsv([
            'csv' => $request->input('csv'),
            'file_name' => $request->input('file_name')
        ]);
        Auth::user()->singleCsvs()->save($singleCsv);
        return $singleCsv;
    }
}
