@extends('FrankR.landingpageStructureFrank')

@section('refresh')
 <!-- <meta http-equiv="refresh" content="5"> -->
@endsection

@section('title')
  <title>Bilder Gallerien</title>
@endsection

@section('additional_css')
<style media="screen">
a{
  text-decoration: none;
  color: white;
  opacity: 1;
}
.pic1
{
  height: 350px;
  width: 33vw !important;
  object-fit: cover;
  border-radius: 25px;
}
.colh{
  height: 518px !important;
}
.socialmedia
{
  position: absolute;
  top: 10px;
  left: 10px;
}
.overlaymenu1
{
  display: none;
  font-size: 1.4em;
  font-weight: bold;

}

.overlaytrigger2:hover .overlaymenu1
{
  display: block;
  /* background-color: green; */
}
.overlaytrigger2:hover .overlay2
{
  background: linear-gradient(91.9deg, rgba(93, 248, 219,0.8) 27.8%, rgba(33, 228, 246,0.8) 67%);
  /* opacity: 0.6; */
  color: white;
  animation: appear 1s forwards;
}
@keyframes appear
{
  from{
    opacity: 0.1;
  }
  to
  {
    opacity: 1;
  }
}
</style>
@endsection
@section('keywords')
<meta name="keywords" content="Photos, Auktionen, Photoauktionen ">
@endsection

@section('description')
<meta name="description" content="Frank Robrahn präsentiert Ihnen mehrere einzigartige Bilder. Diese können dann auf Ebay ersteigert werden.">
@endsection

@section('content')
<div class="body bg-white h-100 w-100 p-1">
<div class="container-fluid center_items position-relative p-1" style="height:75vh; width: 100vw;">
  <div class="socialmedia">
    <button class="btn btn-primary"type="button" name="button">Insta</button>
    <button class="btn btn-primary"type="button" name="button">Insta</button>
  </div>
  <div class="overlay2" style="position: absolute; height:100%; width: 100%;background-color: rgba(105,105,105,0.7)">

  </div>
  <div class="text-white" style="position: absolute;">
    <p><div class="row">
      <h1 class="text-center">Frank Robrahns Bilder Gallerie</h1>
      <small class="text-center">klicke auf die Bilder um weitere Ansichten zu sehen</small>
    </div></p>
  </div>
  <img class="h-100 w-100" src="https://de.stagepool.com/account/jobseeker/cvfileget.aspx?cvfileid=1509255&spurl=www.instagra&zoom=1" alt="Frank R" style="object-fit: cover;object-position: center top;">
</div>
  <div class="container" style="margin-top: -5%;">
    <div class="row justify-content-center">
      @foreach($images = DB::table('image')->where('is_thumb',1)->orderBy('title')->get() as $image)
      <div class="col-sm-4 p-2 position-relative rounded text-white" >
        <a class=" bg-dark p-0" onclick="loadModal({{$image->id}})" style="cursor:pointer; width:auto;">
        <div class="p-4 position-relative overlaytrigger2">

          <div class="row justify-content-center position-relative">

            <div class="p-2 position-absolute h-100 w-100 d-flex align-items-center overlay2">
              <div class="overlaymenu1 ">
                <h5>{{$image->title}}</h5>
                <hr>
                <p>Beschreibung:</p>
                <hr>
                <p>{{$image->description}}</p>
                <hr>
                <p>Auf Ebay:</p>
                <hr>
                <p><a href="{{$image->link}}">Klicke den Link</a></p>
              </div>

            </div>

              <img src="{{asset('Gallerys/'.$image->url.'')}}" class=" pic1" alt="">

          </div>

        </div>
          </a>
      </div>
      @endforeach
    </div>
  </div>
</div>
@foreach($images as $image)
<div class="modal bg-dark" id="exampleModal{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
      <div class="modal-content" style="">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="loadModal({{$image->id}})">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="container p-2" style="height: 50vh;">
            <div class="row bg-light h-100 m-0 overflow-scroll center_items">
              @foreach(DB::table('image')->where('thumb',$image->id)->get() as $picture)
              <div class="col-5 bg-light m-1 rounded shadow center_items position-relative h-100 overlayhover">
                <img src="{{asset('Gallerys/'.$picture->url.'')}}" class="h-100 img-fluid position-absolute" alt="">

              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
@endsection

@section('additional_js')
<script type="text/javascript">
  function loadModal(id)
  {
    console.log(id)
    $('#exampleModal' +id).toggle()
  }
</script>
@endsection
