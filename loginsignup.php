<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Sign-up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Login / Sign-up Page</h2>

        <!-- Login Section -->
        <div class="card mb-5 p-4">
            <h4>Login</h4>
            <form id="loginForm">
                <div class="mb-3">
                    <input type="email" id="loginEmail" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <input type="password" id="loginPassword" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-2" onclick="submitLogin()">Login</button>
            </form>
        </div>

        <!-- Signup Section -->
        <div class="card mb-5 p-4">
            <h4>Signup</h4>
            <form id="signupForm">
                <div class="mb-3">
                    <input type="text" id="firstName" class="form-control" placeholder="Enter First Name" required>
                </div>
                <div class="mb-3">
                    <input type="text" id="lastName" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" id="signupEmail" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <input type="password" id="signupPassword" class="form-control" placeholder="Enter your password" required>
                </div>
                <div class="mb-3">
                    <input type="tel" id="phoneNumber" class="form-control" placeholder="Enter Phone Number" maxlength="10" required>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-2">Sign Up</button>
            </form>
        </div>
    </div>
</body>
</html>
