<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="bootstrap-social-gh-pages/bootstrap-social.css" rel="stylesheet"> -->

    <title>Test</title>
    <!-- Styles -->
    <body>
      <div class="" style="display: block; height: auto; width: 100%;">
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <h5>Ihr habt eine Anfrage erhalten</h5>
        </div>
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>$data['message']</p>
        </div>
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>Von: {{$data['surname'] }}, {{$data['lastname']}}, {{$data['email']}}, @if( $data['phone']) {{$data['phone']}} @else kein Rufnummer @endif</p>
        </div>
      </div>
    </body>

</html>
