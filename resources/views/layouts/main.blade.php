<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.0/css/dataTables.dataTables.css">
    <title>Web Movies - @yield('title')</title>

    <style>
        html,
        body {
            height: 100%;
        }

        .main-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .content-wrapper {
            flex: 1;
        }
    </style>
</head>

<body>
    <div class="container-fluid main-container">

        <!-- Baris 1: Header -->
        <div class="row">
            <div class="col-lg-12 py-4 bg-primary">
                <div class="dropdown float right">
                    <button class="btn btn-primary dropdown-toggle float-right" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">
                            <div class="media">
                                <img src="https://bmw.astra.co.id/wp-content/uploads/2023/07/BMW.svg_.png"
                                    height="50" width="50" class="align-self-center mr-3" alt="...">
                                <div class="media-body">
                                    <h5 class="mt-0">BMW</h5>
                                    <p class="mb-0"><i class="bi bi-clock-history"></i> Pkl 13.00 WIB</p>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Change Password</a>
                        <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Baris 2: Sidebar dan Konten -->
        <div class="row content-wrapper">
            <div class="col-md-3 border">
                <div class="nav flex-column nav-pills pt-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link {{ $key == 'home' ? 'active' : '' }}" href="/" role="tab">Home</a>
                    <a class="nav-link  {{ $key == 'Movie' ? 'active' : '' }}" href="/movie" role="tab">Data
                        Movie</a>
                    <a class="nav-link  {{ $key == 'Kategori' ? 'active' : '' }}" href="/kategori" role="tab">Data
                        Kategori</a>
                    <a class="nav-link  {{ $key == 'genre' ? 'active' : '' }}" href="/genre" role="tab">Data
                        Genre</a>
                </div>
            </div>

            <div class="col-md-9 border pt-4">
                @yield('content')
            </div>
        </div>

        <!-- Baris 3: Footer -->
        <div class="row">
            <div class="col-md-12 py-3 bg-primary text-center text-white">
                <medium>template by Yoga Christian</medium>
            </div>
        </div>

    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.3.0/js/dataTables.js"></script>
    <script>
      new DataTable('#example');
    </script>
</body>

</html>
