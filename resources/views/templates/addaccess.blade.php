@extends('layouts.email')

@section('content')
<p>Dear Bapak/Ibu {{ $data["name"] ?? '' }},</p>

<p>Berdasarkan pengecekan oleh sistem kami, email Bapak/Ibu telah memiliki akun VPN sebelumnya.
    <br> Untuk membuat permintaan penambahan akses akun VPN, dapat melalui link berikut.
    <br> Kami lampirkan juga panduan yang telah kami buat untuk menggunakan akun VPN milik Bapak/Ibu.</p>

<p>Note Tambahan:
    <br> {{ $data['message'] ?? '' }}</p>

    @include('layouts.email-footer')
@endsection