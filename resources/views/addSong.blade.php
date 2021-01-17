@extends("layouts.master")
@section("subtitle", "Add Song")
@section("content")
<div>
    <div class="search-box bg-dark">
        <input class="search-input mr-2" type="text" name="" placeholder="Search">
        <a href="#" class="search-btn">
            <i class="fas fa-search"></i>
        </a>
    </div>
</div>
<div class="mt-5">
    <div class="d-flex justify-content-between mb-5">
        <h1 class="display-4 font-amaranth">Add Song</h1>
    </div>
    <form action="/song/add" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="songTitle">Song Title</label>
        <input name="title" type="text" class="form-control" id="songTitle">
      </div>
      <div class="form-group">
        <label for="songArtist">Artist</label>
        <input name="artist_name" type="text" class="form-control" id="songArtist">
      </div>
      <div class="form-group">
        <label for="songAlbum">Album Name</label>
        <input name="album_name" type="text" class="form-control" id="songAlbum">
      </div>
      <div class="form-group">
        <label for="songReleaseDate">Release Date</label>
        <input name="release_date" type="date" class="form-control" id="songReleaseDate">
      </div>
      <div class="form-group">
        <label for="lyric">Lyric</label>
        <textarea name="lyric" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
      </div>
      <button  type="submit" class="btn btn-success">
        Save
      </button>
    </form>

</div>
@stop
