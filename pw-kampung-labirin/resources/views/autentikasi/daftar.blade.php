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
            font-size: 14px;
            font-weight: 500;
            color: #BCBDBD;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex align-items-center h-100">
        <div class="login-box p-5">
            <h1 class="text-center mb-3" style="color: #A4BE7B">INKARIN</h1>
            <form action="/daftar" method="post">
                @csrf
                <div class="mb-2">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap"
                        class="form-control p-2 @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap"
                        placeholder="Masukkan Nama Lengkap" style="border: 2px solid #A4BE7B; border-radius:10px"
                        required value="{{ old('nama_lengkap') }}">
                    @error('nama_lengkap')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username"
                        class="form-control p-2 @error('username') is-invalid @enderror" id="username"
                        placeholder="Masukkan Username" style="border: 2px solid #A4BE7B; border-radius:10px" required
                        value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control p-2 @error('email') is-invalid @enderror"
                        id="email" placeholder="Masukkan Email"
                        style="border: 2px solid #A4BE7B; border-radius:10px" required value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password"
                        class="form-control p-2 @error('password') is-invalid @enderror" id="password"
                        placeholder="Masukkan Password" style="border: 2px solid #A4BE7B; border-radius:10px" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="konfirmasi_password" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="konfirmasi_password"
                        class="form-control p-2 @error('konfirmasi_password') is-invalid @enderror"
                        id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password"
                        style="border: 2px solid #A4BE7B; border-radius:10px" required>
                    @error('konfirmasi_password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit">Daftar</button>
            </form>
            <span class="text-center d-block fw-medium mt-3">Sudah memiliki akun?<a href="/masuk"
                    style="color: #A4BE7B" class="text-decoration-none">
                    Masuk</a></span>
        </div>
    </div>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>

</html>
