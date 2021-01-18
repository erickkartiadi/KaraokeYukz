@extends("layouts.master")
@section("subtitle", "Songs")
@section("content")

<div>
    <div class="search-box bg-dark">
        <form action="/" method="GET">
            <input class="search-input mr-2" type="text" name="s" placeholder="Search by title">
            <button type="submit" class="search-btn">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>
<div class="mt-5">
    <div class="d-flex justify-content-between mb-5">
        <h1 class="display-4 font-amaranth">Songs</h1>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <a id="add-song" class="btn btn-success" href="/song/add">
                <i class="fas fa-plus mr-1"></i>
                Add Song
            </a>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Artist</th>
                <th scope="col">Album</th>
                <th scope="col">Release Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr class="clickable-row" data-href="/song/{{$song->id}}">
                    <td>{{$song->title}}</td>
                    <td>{{$song->artist_name}}</td>
                    <td>{{$song->album_name}}</td>
                    <td>{{$song->release_date}}</td>
                    <td class="d-flex">
                        <a href="/song/{{$song->id}}/edit" class="action-button btn btn-primary mr-2">
                            <i class="fas fa-edit mr-1"></i>
                            Edit
                        </a>
                        <form action="/song/{{$song->id}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button  class="action-button btn btn-danger">
                                <i class="far fa-trash-alt mr-1"></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> 
@stop

@section("script")
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".clickable-row").forEach(element => {
            element.addEventListener("click", function () {
                window.location.href = element.dataset.href;
            });
        });

        document.querySelectorAll(".action-button").forEach(element => {
            element.addEventListener("click", function(e) {
                e.stopPropagation();
            })
        })
    });
</script>
@stop
