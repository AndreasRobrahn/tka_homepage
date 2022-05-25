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
  color: black;
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
<div class="body bg-dark h-100 w-100 p-1">


  <div class="container bg-light rounded">
    <div class="row">
      <h1 class="text-center">Frank Robrahns Bilder Gallerie</h1>
      <small class="text-center">klicke auf die Bilder um weitere Ansichten zu sehen</small>
    </div>
    <hr>
    <div class="row mt-2">
      @foreach($images = DB::table('image')->where('is_thumb',1)->orderBy('title')->get() as $image)
      <div class="col-sm-6 rounded shadow position-relative">
        <div class="p-2 bg-white shadow rounded">


        <div class="row">
          <h5>{{$image->title}}</h5>
        </div>
        <div class="row center_items m-0">
          <a class="center_items bg-dark p-3" onclick="loadModal({{$image->id}})" style="cursor:pointer;">
            <img src="{{asset('Gallerys/'.$image->url.'')}}" class="img-fluid" alt="">
          </a>
        </div>
        <div class="row">
          <p>Beschreibung:</p>
          <p>{{$image->description}}</p>
        </div>
        <div class="row">
          <p>Auf Ebay:</p>
          <p><a href="{{$image->link}}">Klicke den Link</a></p>
        </div>
      </div>
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
