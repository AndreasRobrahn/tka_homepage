@extends('eros.general_layout') @section('content')
<div class="container text-center">
<h1 class="heading-sw text-capitalize">Willkommen auf meiner offiziellen Homepage</h1>
<br>
<blockquote class="blockquote text-center">
  <p class="mb-0">Hallo, ich bin die <b>Yeng Yeng</b> und das ist meine offizielle Webseite. Hier kannst du mit mir Chatten, meine Bildergalerien & Videos ansehen und vieles mehr... ich wette, wir werden eine Menge Spass zusammen haben ;) </p>
  <footer class="blockquote-footer">deine <cite title="Source Title">Snowwhite-Inked</cite></footer>
</blockquote>
<hr>
<div class="row">
<div class="col-md-6">
  <img class="img-fluid rounded" src="{{asset('images/swi_about.jpg')}}">
</div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title heading-pclub">Über mich</h5>
        <p class="card-text"><p>Hallo ich bin SnowWhite-Inked, 23 Jahre alt und lebe aktuell im schönen Flensburg.</p> <p> Inked steht für meine Tattoos bzw. für meine zukünftigen Tattoos.</p> <hr> <p> Ich habe mein Hobby zum Beruf gemacht: Ich liebe es mich vor der Kamera zu zeigen, natürlich auch Live. Sexuell bin ich sehr offen, auch Dinge die ich noch nicht ausprobiert habe möchte ich ausprobieren. Vielleicht hast du Lust mit mir Dinge zu tun die ich noch nicht kenne.</p> <p class="font-weight-bold">Dann melde dich einfach!</p>
        <a href="#" class="btn btn-primary">ABOUT ME</a>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-body">
        <h5 class="card-title heading-pclub">Snapchat</h5>
        <p>Sicherlich kennst du mich schon. Wenn nicht, ist dies eine gute Chance uns beide besser kennenzulernen. Wir sehen uns bald in meinem Snapchat Account!</p>
        <a href="#" class="btn btn-snapchat">SNAP <i class="fab fa-snapchat-ghost"></i></a>
      </div>
    </div>
  </div>
</div>
<div class="row mt-3">
<div class="col-sm-12">
<div class="card">
      <div class="card-body">
        <h5 class="card-title "><b class="heading-pclub">Bald</b> gibt es mehr von mir!</h5>
        <p class="card-text"><p>Hab noch ein wenig Geduld und schau ab und zu mal vorbei. </p>
        <p>Schau doch auch auf meine Sozialen Medien</p>
      </div>
    </div>
</div>
</div>
<div>
</div>
  @endsection
