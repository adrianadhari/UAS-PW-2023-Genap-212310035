<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <title>{{ $title }}</title>
    <style>
        @font-face {
            font-family: PoetsenOne;
            src: url(/assets/fonts/PoetsenOne-Regular.ttf);
        }

        h1 {
            font-family: 'PoetsenOne';
        }

        .login-box {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            width: 600px;
            height: 538px;
        }

        button {
            width: 100%;
            height: 57px;
            padding: 17px 193px;
            background-color: #A4BE7B;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-top: 20px;
        }

        .form-control::placeholder {
            font-weight: 500;
            color: #BCBDBD;
        }

        form {
            margin: 30px;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex align-items-center h-100">
        <div class="login-box p-5 overflow-hidden">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h1 class="text-center mb-5" style="color: #A4BE7B">INKARIN</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username"
                        class="form-control p-3 @error('username') is-invalid @enderror" id="username"
                        placeholder="Masukkan Username" required autofocus value="{{ old('username') }}"
                        style="border: 2px solid #A4BE7B; border-radius:10px">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"
                        class="form-control p-3 @error('password') is-invalid @enderror" id="password"
                        placeholder="Masukkan Password" style="border: 2px solid #A4BE7B; border-radius:10px">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Masuk</button>
            </form>
            <span class="text-center d-block fw-medium">Belum memiliki akun?<a href="{{ route('register') }}" style="color: #A4BE7B"
                    class="text-decoration-none">
                    Daftar</a></span>
        </div>
    </div>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>
