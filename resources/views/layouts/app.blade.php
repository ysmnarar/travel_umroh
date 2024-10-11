<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Travel Umroh</title>
</head>

<style>
    html,
    body {
        height: 100%;
        /* Pastikan body dan html memiliki tinggi 100% */
    }

    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        /* Buat tinggi minimal body menutupi seluruh viewport */
        font-family: 'Roboto', sans-serif;
        background-color: #f0f8ff;
    }

    .navbar {
        background: rgba(255, 255, 255, 0.9);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 15px 30px;
    }

    .navbar-brand {
        font-size: 1.8rem;
        font-weight: 700;
        color: #007bff !important;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .nav-link {
        color: #343a40 !important;
        transition: color 0.3s, transform 0.3s;
        font-weight: 700;
    }

    .nav-link:hover {
        color: #007bff !important;
        transform: scale(0.9);
    }

    .btn {
        margin-bottom: 20px;
    }

    .custom-btn {
        padding: 12px 25px;
        margin-left: 50px;
        border-radius: 25px;
        transition: background-color 0.3s, color 0.3s;
        text-align: right;
    }

    .custom-btn:hover {
        background-color: #007bff;
        color: #fff !important;
    }

    .logout-btn {
        background-color: #f44336;
        color: #fff !important;
        border: none;
    }

    .logout-btn:hover {
        background-color: #e53935 !important;
    }

    main {
        flex: 1;
        margin: 20px 0;
        padding: 20px;
    }

    footer {
        background-color: #343a40;
        color: #ffffff;
        padding: 10px 0;
        padding-top: 24px;
        margin-top: auto;
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Travel Umroh</a>

            <!-- Navbar items aligned to the right -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto d-flex gap-3 align-items-center">
                    <a class="nav-link custom-btn" href="{{ route('admin.jamaah.index') }}">Data Jamaah</a>
                    <a class="nav-link custom-btn" href="{{ route('admin.kamar.index') }}">Data Kamar</a>
                    <a class="nav-link custom-btn" href="{{ route('admin.paket.index') }}">Data Paket</a>
                    <a class="nav-link custom-btn logout-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2024 Travel Umroh by Yasmin Rahma Fathiyya.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>