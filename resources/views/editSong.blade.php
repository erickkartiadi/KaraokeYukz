@extends("layouts.master")
@section("subtitle", "Edit")
@section("content")

<div class="pt-2 h-100 d-flex flex-column">
    <div class="d-flex justify-content-between mb-5 flex-grow-0 flex-shrink-1 flex-basis-auto">
        <h1 class="display-4 font-amaranth">Edit Song</h1>
    </div>
    <form action="/song/{{$song->id}}" method="POST"
        class="container-fluid p-0 pb-3 m-0 flex-grow-1 flex-shrink-1 flex-basis-auto d-flex flex-column">
        {{ csrf_field() }}
        @method("PUT")
        <div class="row flex-grow-1 flex-shrink-1 flex-basis-auto">
            <div class="col-3">
                <div class="form-group">
                    <label for="songTitle">Song Title</label>
                    <input id="songTitle" value="{{ $errors-> has('title') ? old('title') : $song->title}}" name="title"
                        type="text" class="form-control {{ $errors->has('title') ? "is-invalid" : "" }}">
                    @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{$errors->first('title')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="songArtist">Artist</label>
                    <input value="{{ $errors-> has('artist_name') ? old('artist_name') : $song->artist_name}}"
                        id="songArtist" name="artist_name" type="text"
                        class="form-control {{ $errors->has('artist_name') ? "is-invalid" : "" }}">
                    @if($errors->has('artist_name'))
                    <div class="invalid-feedback">
                        {{$errors->first('artist_name')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="songAlbum">Album Name</label>
                    <input value="{{ $errors-> has('album_name') ? old('album_name') : $song->album_name}}"
                        id="songAlbum" name="album_name" type="text"
                        class="form-control {{ $errors->has('album_name') ? "is-invalid" : "" }}">
                    @if($errors->has('album_name'))
                    <div class="invalid-feedback">
                        {{$errors->first('album_name')}}
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="songReleaseDate">Release Date</label>
                    <input value="{{ $errors-> has('release_date') ? old('release_date') : $song->release_date}}"
                        id="songReleaseDate" name="release_date" type="date"
                        class="form-control {{ $errors->has('release_date') ? "is-invalid" : "" }}">
                    @if($errors->has('release_date'))
                    <div class="invalid-feedback">
                        {{$errors->first('release_date')}}
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-9">
                <div class="form-group h-100 d-flex flex-column pb-3">
                    <label for="lyric">Lyric</label>
                    <textarea style="resize:none" name="lyric" rows="6"
                        class="flex-grow-1 flex-shrink-1 flex-basis-auto
                        lyric_textarea form-control {{ $errors->has('lyric') ? "is-invalid" : "" }}">{{$errors-> has('lyric') ? old('lyric') : $song->lyric}}</textarea>
                    @if($errors->has('lyric'))
                    <div class="invalid-feedback">
                        {{$errors->first('lyric')}}
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-warning wpx-100 align-self-end">
            Update
        </button>
    </form>

</div>
@stop
