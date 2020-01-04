<p>Dear IT Helpdesk,</p>

Berikut adalah form pendaftaraan akun VPN yang telah oleh Bapak/Ibu {{ $data["name"] ?? ''}} melalui aplikasi pendaftaran VPN.
<tr style="height:15.75pt">
    <td nowrap="" colspan="5" valign="bottom" style="padding:.75pt .75pt 0in .75pt;height:15.75pt"></td>
    <td nowrap="" valign="bottom" style="padding:.75pt .75pt 0in .75pt;height:15.75pt">
        <p class="MsoNormal" align="right" style="text-align:right"><span style="font-size:8.0pt">FM-BINUS-AA-FPT-266/R2<o:p></o:p></span></p>
    </td>
    <td nowrap="" valign="bottom" style="padding:.75pt .75pt 0in .75pt;height:15.75pt"></td>
</tr>
<table border="1">
  <tr>
    <th colspan="9">FORM VPN</th>
  </tr>
  <tr>
    <td colspan="9">A. Pemohon</td>
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
    <td colspan="7">{{ $data['access'][0] ?? 'b' }}</td>
  </tr>
  @if(isset($data['countAccess']))
    @if($data['countAccess'] > '1')
        @for ($i = 1; $i < $data['countAccess']; $i++)
        <tr>
            <td colspan="7">{{ $data['access'][$i] ?? '' }}</td>
        </tr>
        @endfor
    @endif
  @endif
  <tr>
    <td>Status VPN</td>
    <td>:</td>
    <td colspan="7">{{ $data['expiry_date'] ?? 'Permanent' }}</td>
  </tr>
  <tr>
    <td colspan="9">B. Syarat dan Ketentuan</td>
  </tr>
  <tr>
    <td colspan="9"></td>
  </tr>
  <tr>
    <td colspan="9"></td>
  </tr>
</table>
Terima kasih. <br>

Best Regards, <br>
Network Administrator Team (ext. 2334) <br>
Bina Nusantara
</p>