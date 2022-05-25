@extends('FrankR.landingpageStructureFrank')

@section('refresh')
 <!-- <meta http-equiv="refresh" content="5"> -->
@endsection

@section('title')
  <title>Bilder upload</title>
@endsection

@section('keywords')
<meta name="keywords" content="Bildergallerien, Bilderauktionen">
@endsection

@section('description')
<meta name="description" content="Willkommen in der aufregenden Welt der digitalen Währungen">
@endsection

@section('additional_css')
<style media="screen">
  .subimg
  {
    height: 200px;
    object-fit: cover;
  }
  .overlaymenu
  {
    opacity: 0;

  }
  ul
  {
    list-style: none;
  }
  a{
    text-decoration: none;
    color: black;
  }
  .overlayhover:hover .overlaymenu
  {
    opacity: 1;
    background-color: rgba(0,0,0,0.5);
  }
</style>
@endsection
@section('content')
<div class="body h-100 bg-light">
  <div class="container bg-white">
    @if($errors->any())
    <div class="row" id="errormodal">
      <div class="bg-danger">
        Fehler aufgetreten: {{$errors}}
      </div>
      @foreach($errors as $error)
      <div class="bg-warning">
        Fehler aufgetreten: {{$error}}
      </div>
      @endforeach
    </div>
    @endif
    <div class="row">
      <h1>Lade deine Bilder hoch</h1>
    </div>
    <div class="row center_items">
      <form action="{{route('pictureUpload.post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Bildtitel</label>
          <input type="text" name="title"class="form-control" id="exampleFormControlInput1" placeholder="nur eingeben wenn das Bild als erstes erscheinen soll">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput2">Link</label>
          <input type="text" name="link" class="form-control" id="exampleFormControlInput2" placeholder="www.ebay.de">
        </div>
        <div class="form-group">
          <div class="row">
          <div class="col-6">
            <label for="exampleFormControlInput1">einem Bild zuweisen</label>

            <select class="" name="thumbid">
              <option value="" disabled selected>Wähle ein Bild</option>
              @foreach(DB::table('image')->where('is_thumb',1)->select('id','title')->get() as $image)
                <option value="{{$image->id}}">{{$image->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-6">
            <label for="exampleFormControlFile1">Bilddatei</label><br>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </div>

        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Beschreibung</label>
          <textarea class="form-control" name="description" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-block btn-sm btn-success" name="button">Absenden</button>
        </div>
      </form>
    </div>
  </div>
  <div class="container bg-white mt-2">
    <div class="row center_items">
      <h3 class="text-center">Deine Gallerie Bilder</h3>
    </div>
    <div class="row center_items">
      @foreach($images = DB::table('image')->where('is_thumb',1)->orderBy('title')->get() as $image)
      <div class="col-sm-3 m-1 rounded shadow position-relative overlayhover">
        <div class="row">
          <h5>{{$image->title}}</h5>
        </div>
        <div class="row">
          <div class="col-sm-3 bg-light h-100 w-100 position-absolute overlaymenu center_items">
            <ul style="decoration: none;">
              <!-- <li><a href="{{route('change.picTure.front', ['newthumb' => $image->id, 'oldthumb'=> $image->id])}}">Erstes Bild</a> </li> -->
              <li> <a class="m-2 btn btn-primary" onclick="loadModal({{$image->id}})" style="cursor:pointer;">verknüpfte Bilder</a> </li>
              <li><a href="{{route('gallerys.delete',['id' =>$image->id])}}" class=" m-2 btn btn-primary ">Gallerie löschen</a> </li>

            </ul>
          </div>
          <img src="{{asset('Gallerys/'.$image->url.'')}}" class="img-fluid h-100" alt="">
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
                <div class="bg-light h-100 w-100 position-absolute overlaymenu" style="">
                  <ul>
                    <li><a href="{{route('change.picTure.front', ['newthumb' => $picture->id, 'oldthumb'=> $image->id])}}">Erstes Bild</a> </li>
                    <li><a href="{{route('picture.delete', ['id' => $picture->id])}}">Bild löschen</a> </li>
                    <li><a href="#">Bild nicht anzeigen</a> </li>
                  </ul>
                </div>
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
