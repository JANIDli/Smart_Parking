<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navigation Bar</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <style>
      body{
            margin: auto;
            padding: auto;
            
        }
        .main-container{
            width: 100%;
            padding: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(public/back.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }


        .beautiful-button {
      background-color: #0a200a; 
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 8px;
      cursor: pointer;
      transition-duration: 0.4s;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }
    .beautiful-button:hover {
      background-color: #45a049; }

    </style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" style="border: 1px solid black; padding: 5px;" href="#">S M A R T-P A R K I N G</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
        <input type="submit" href="registration.html" value="Sign-up" class="btn-btn btn-outline-info">
    </ul>
  </div>
</nav>
    <div class="main-container">
      <section id="home">
        <button class="beautiful-button">BOOK A SOLT</button>
      </section>
    </div>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
