<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">

    <title>
        @yield('title')
    </title>    
</head>
<body>
    <header>
        <h1>Library System</h1>
        
        <nav>
            <a href="{{ route('books.index') }}">Buku</a> 
            <a href="{{ route('member') }}">Member</a>
            <a href="{{ route('kategori') }}">Kategori</a>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <form action="{{ route ('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>

        <hr>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        <p>Library System</p>
    </footer>
</body>
</html>
