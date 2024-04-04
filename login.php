<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Parking Registration</title>
    <link rel="stylesheet" href="Styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body{
        background-color: rgb(255, 255, 255);
        box-shadow: initial;
    }
</style>
<body>
    <div class="container mt-5" style="width: 50%; border-radius: 20px;  border: 0px solid;">
        <div class="card">
            <div class="card-header"  style="background-color: rgb(228, 255, 255); border-radius: 20px; border: 0px solid;">
                <h1 class="text-center"> REGISTRATION</h1>
            </div>
            <div class="card-body" style="background-color:aliceblue;box-shadow: 0 3px 10px gray;outline-style: none; outline: none;
             border-radius: 10px;">
                <form action="login_process.php" method="post">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
