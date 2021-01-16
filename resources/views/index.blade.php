<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/app.js')}}" defer></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Songs</title>
</head>
<body>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-2 bg-dark pt-4 pb-4 pl-0 h-100">
                <div>
                    <h1 class="text-light font-title pl-3">KaraokeYukz</h1>
                    <nav class="nav flex-column pt-2">
                        <div class="overflow-hidden">
                            <span class="bullet d-inline mr-3 current"></span>
                            <a href="/" class="nav-link">Songs</a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-10 bg-light h-100 pt-4 pl-4">
                <div>
                    <div class="search-box bg-dark">
                        <input class="search-input mr-2" type="text" name="" placeholder="Search">
                        <a href="#" class="search-btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="d-flex justify-content-between">
                        <h1 class="display-4 font-amaranth">Songs</h1>
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a class="btn btn-success">
                                <i class="fas fa-plus mr-1"></i>
                                Add Song
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover mt-5">
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
            </div>
        </div>

    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".clickable-row").forEach(element => {
            element.addEventListener("click" , function() {
                console.log(element.dataset.href);
            });
        });
    });
</script>

</html>
