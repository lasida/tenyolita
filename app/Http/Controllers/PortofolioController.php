<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('portofolio');
    }

    public function store(StoreFormRequest $request)
    {
        Lead::create($request->validated());

        $receipt  = '08561655028';
        $template = 'Terimakasih telah menghubungi kami';
        $apiurl   = 'https://wamd0182.api-wa.my.id/api/v1/messages';
        $apikey   = 'dk_e3caa778e6a242f28c99c918b131a077';

        $response = Http::withHeaders([
            'Content-Type'  => 'application/json',
            'Authorization' => 'Bearer '.$apikey
        ])->post($apiurl, [
            'recipient_type' => "individual",
            'to'             => $receipt,
            'type'           => "text",
            'text'           => [
                "body" => $template
            ],
        ]);

        if ($response->successful()) {
            // do something
        }

        return redirect()->back();
    }
}
