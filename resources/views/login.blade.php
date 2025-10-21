<html>
    <head>
        <title>Mamang Gun'Shop - Login</title>
        @vite(['resources/css/login.css', 'resources/js/login.js'])
    </head>
    <body>
        <div class="login-container">
            <h1 class="login-title">Masuk ke Mamang Gun'Shop</h1>
            <form action="/login" method="POST" class="login-form">
                @csrf
                <div class="form-group">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>
                <button type="submit" class="form-button">Masuk</button>
            </form>
        </div>
    </body>
</html>
