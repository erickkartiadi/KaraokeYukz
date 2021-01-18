@extends("layouts.master")
@section("subtitle", "Edit")
@section("content")

<div class="mt-2">
    <div class="d-flex justify-content-between mb-5">
        <h1 class="display-4 font-amaranth">Edit Song</h1>
    </div>
    <form action="/song/{{$song->id}}" method="POST">
      {{ csrf_field() }}
      @method("PUT")
      <div class="form-group">
        <label for="songTitle">Song Title</label>
        <input name="title" type="text" class="form-control" id="songTitle"
         value="{{$song->title}}">
      </div>
      <div class="form-group">
        <label for="songArtist">Artist</label>
        <input name="artist_name" type="text" class="form-control" id="songArtist" value="{{$song->artist_name}}">
      </div>
      <div class="form-group">
        <label for="songAlbum">Album Name</label>
        <input name="album_name" type="text" class="form-control" id="songAlbum" value="{{$song->album_name}}">
      </div>
      <div class="form-group">
        <label for="songReleaseDate">Release Date</label>
        <input name="release_date" type="date" class="form-control" id="songReleaseDate" value="{{$song->release_date}}">
      </div>
      <div class="form-group">
        <label for="lyric">Lyric</label>
        <textarea name="lyric" class="form-control" id="exampleFormControlTextarea1" rows="6">{{$song->lyric}}
        </textarea>
      </div>
      <button type="submit" class="btn btn-warning">
        Update
      </button>
    </form>

</div>
@stop
