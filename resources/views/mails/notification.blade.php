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
          @if(isset($customer))
            <h5>Danke für deine Anfrage. In Kürze erhälst du eine Rückmeldung</h5>
          @else
            <h5>Wir haben eine Anfrage erhalten</h5>
          @endif
        </div>
        <div class="" style="display: block; width: 100%; padding: 5px;">
          <h4>Deine Nachricht an uns:</h4><br>
          <p>{{$dmessage}}</p>
        </div>
        @if(!isset($customer))
        <div class="" style="display: flex; width: 100%; padding: 5px; justify-content: center;">
          <p>Von: {{$surname}}, {{$lastname}} </p>
          <p>Email: {{$email}}</p>
          @if( $phone)<p>{{$phone}}</p>   @else <p>kein Rufnummer @endif</p>
        </div>
        @endif
      </div>
    </body>

</html>
