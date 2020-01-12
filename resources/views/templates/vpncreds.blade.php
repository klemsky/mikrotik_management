@extends('layouts.email')

@section('content')
<p>Dear Bapak/Ibu {{ $data["name"] ?? '' }},</p>

<p>Sesuai request pada ticket {{$data["number"] ?? ''}}, account VPN sudah dibuatkan. Berikut kami informasikan credentials-nya.
</p>
<table id="table-vpn-creds">
    <tr>
        <td rowspan="{{ $data['countAccess'] ?? '1' }}">IP Server</td>
        <td rowspan="{{ $data['countAccess'] ?? '1' }}">:</td>
        <td>{{ $data['as'] ?? '' }}</td>
    </tr>
    @if(isset($data['countAccess']))
        @if($data['countAccess'] > '1') 
            @for ($i = 1; $i < $data[ 'countAccess']; $i++)
            <tr>
                <td colspan="7">{{ $data['access'][$i] ?? '' }}</td>
            </tr>
            @endfor
        @endif
    @endif
    <tr>
        <td>Protocol</td>
        <td>:</td>
        <td>L2TP/IPsec with pre-shared key</td>
    </tr>
    <tr>
        <td>Pre-shared key / Secret</td>
        <td>:</td>
        <td>{{ $data['as'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td>{{ $data['as'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td>{{ $data['as'] ?? '' }}</td>
    </tr>
</table>
<p>
    Kami lampirkan juga panduan/tutorial yang telah kami buat untuk menggunakan akun VPN milik Bapak/Ibu.
    <br> Demikian informasi yang dapat kami sampaikan. Semoga membantu.
</p>

<p>Note Tambahan:
    <br> {{ $data['message'] ?? 'Tidak ada.' }}</p>

    @include('layouts.email-footer')
@endsection