@component('mail::message')
<div style="background-color: #483fa8; margin:10px;">
    <center><h1 style="color: white;" >Terimakasih Telah Mengirim Pesan</h1></center>
<br>
<hr>
<strong style="color: white">Nama</strong><p style="color: white">{{ $data['name'] }} </p>
<strong style="color: white">Email</strong><p style="color: white">{{ $data['email'] }}</p>
<hr>
<strong style="color: white">Pesan</strong><p style="color: white">{{ $data['message'] }}</p>
</div>

@endcomponent
