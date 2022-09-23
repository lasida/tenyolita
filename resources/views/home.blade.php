@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 style="margin:0;padding: 0;">{{$count_all}} Orang</h3>
                            </div>
                            <div class="card-footer" style="background: #003865;border:none;color:#fff;">
                                Orang yang mengisi Form
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 style="margin:0;padding: 0;">{{$count_sent}}x</h3>
                            </div>
                            <div class="card-footer" style="background: #1A4D2E;color:#fff;">
                                Sistem Berhasil Membalas
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 style="margin:0;padding: 0;">{{$count_failed}}x</h3>
                            </div>
                            <div class="card-footer" style="background: #B20600;color:#fff;">
                                Nomor yang tidak terkirim
                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">No WhatsApp</th>
                                <th scope="col">Domisili</th>
                                <th scope="col">Status</th>
                                <th scope="col">Created At</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $value)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->whatsapp }}</td>
                                    <td>{{ $value->city }}</td>
                                    <td>
                                        @if($value->is_sent == 1)         
                                            Terkirim
                                        @else
                                            Gagal       
                                        @endif    
                                    </td>
                                    <td>{{ $value->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
