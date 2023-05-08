<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>My sitio web</title>
</head>
<body>
    <nav class="navbar-expand-lg navbar-light bg-success mb-4">
        <div class="container">
            <a href="/" class="navbar-brand h1 text-white">Home</a>
            <a href="/services" class="navbar-brand h1 text-white">Services</a>
            <a href="/contact" class="navbar-brand h1 text-white">Contact</a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <?= $content; ?>
        </div>
    </div>
    
</body>
</html>