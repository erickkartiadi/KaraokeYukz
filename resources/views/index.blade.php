@extends("layouts.master")

@section("subtitle", "Songs")
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
            </tr>
        </thead>
        <tbody>
            <tr class="clickable-row" data-href="/">
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr class="clickable-row" data-href="/2">
                <th>1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</div>
@stop

@section("script")
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".clickable-row").forEach(element => {
            element.addEventListener("click", function () {
                console.log(element.dataset.href);
            });
        });
    });

</script>
@stop
