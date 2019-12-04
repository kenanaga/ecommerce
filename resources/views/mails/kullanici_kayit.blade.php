<h1>{{config('app.name')}}</h1>
<p>{{ $kullanici->adsoyad }},Kaydiniz basariyla yapildi</p>
<p>kayidinizi aktiflesdirmek icin <a href="{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}">tiklayin</a> ve ya asagdaki baglantiyi taracinizda acin</p>
<p>{{config('app.url')}}/kullanici/aktiflestir/{{$kullanici->aktivasyon_anahtari}}</p>
