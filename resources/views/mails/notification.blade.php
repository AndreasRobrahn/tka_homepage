<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->

    <title>Benachrichtigung</title>
    <!-- Styles -->
    <body>
      <div class="" style="display: block; height: auto; width: 100%;">
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <h5>Ihr habt eine Anfrage erhalten</h5>
        </div>
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>{{$message}}</p>
        </div>
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>Von: {{$name}}, {{$email}}, @if( $phone) {{$phone}} @else kein Rufnummer @endif</p>
        </div>
      </div>
    </body>

</html>
