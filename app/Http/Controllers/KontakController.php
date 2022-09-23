<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormRequest;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(StoreFormRequest $request)
    {
        $lead = Lead::create($request->validated());

        $receipt  =  $request->whatsapp;
        $template = 'Hallo..
Terimakasih telah menghubungi
*PT. Sintech Berkah Abadi*.
Pesan Anda sudah diterima dan akan kami balas paling lambat 1x24 jam, apabila tidak mendapatkan balasan bisa mengubungi kembali langsung ke nomor ini.


Pesan Anda : ' . $request->message;
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
            $lead->update(['is_sent' => 1]);
        }

        return redirect()->back();
    }
}
