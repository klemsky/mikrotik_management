@extends('layouts.email')
@section('content')

<p>Dear IT Helpdesk,</p>

Berikut adalah form penambahan akses akun VPN yang telah Bapak/Ibu {{ $data["name"] ?? ''}} isi melalui aplikasi pendaftaran VPN.
<table class="table-form-number">
    <tr class="form-number">
        <td>FM-BINUS-AA-FPT-266/R2</td>
    </tr>
</table>

<table class="table-register-form">
    <tr>
        <th colspan="9">FORM PENAMBAHAN AKSES ACCOUNT VPN</th>
    </tr>
    <tr>
        <td colspan="9" class="table-header">A. Pemohon</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td colspan="7">{{ date('d F Y') }}</td>
    </tr>
    <tr>
        <td>Nama Pemohon</td>
        <td>:</td>
        <td colspan="7">{{ $data['name'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Email Pemohon</td>
        <td>:</td>
        <td colspan="7">{{ $data['email'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Binusian ID</td>
        <td>:</td>
        <td colspan="7">{{ $data['binusianid'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Departement</td>
        <td>:</td>
        <td colspan="7">{{ $data['department'] ?? '' }}</td>
    </tr>
    <tr>
        <td>Keperluan</td>
        <td>:</td>
        <td colspan="7">{{ $data['notes'] ?? '' }}</td>
    </tr>
    <tr>
        <td rowspan="{{ $data['countAccess'] ?? '1' }}">IP Tujuan</td>
        <td rowspan="{{ $data['countAccess'] ?? '1' }}">:</td>
        <td colspan="7">{{ $data['access'][0] ?? '' }}</td>
    </tr>
    @if(isset($data['countAccess'])) @if($data['countAccess'] > '1') @for ($i = 1; $i
    < $data[ 'countAccess']; $i++) <tr>
        <td colspan="7">{{ $data['access'][$i] ?? '' }}</td>
        </tr>
        @endfor @endif @endif
        <tr>
            <td>Status VPN</td>
            <td>:</td>
            <td colspan="7">{{ $data['expiry_date'] ?? 'Permanent' }}</td>
        </tr>
        <tr>
            <td colspan="9" class="table-header">B. Syarat dan Ketentuan</td>
        </tr>
        <tr>
            <td colspan="9">1. Apaan tuh</td>
        </tr>
        <tr>
            <td colspan="9">2. Apaan nih</td>
        </tr>
        <tr>
            <td colspan="9">3. Apaan dah</td>
        </tr>
        <tr>
            <td colspan="9">2. Apaan teh</td>
        </tr>
</table>
Terima kasih.
<br>
    @include('layouts.email-footer')
@endsection