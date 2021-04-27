<?php
$email = "b201210562@sakarya.edu.tr";
$password = "b201210562";
if (isset($_POST['email']) && isset($_POST['password'])) {
    if ($_POST['email'] != $email || $_POST['password'] != $password) {
        header("location: login.html");
        die();
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <link rel="icon" href="/assets/favicon.ico" />
    <title>Welcome</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="/index.html#intro" class="navbar-brand">
                    <img src="/assets/logo.png" alt="logo" style="max-width: 200px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a href="/index.html" class="nav-link">
                                Hakkında
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/cv.html" class="nav-link">
                                Özgeçmiş
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/mycountry.html" class="nav-link">
                                Şehrim
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="myinterests.html" class="nav-link">
                                İlgi alanlarım
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/contact.html" class="nav-link">
                                İletişim
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/login.html" class="nav-link">
                                Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="message text-success fs-3">
                <?php
                    if (isset($_POST['email']) && isset($_POST['password'])) {
                        echo "Hoşgeldiniz, " . $_POST['password'];
                    }
                ?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>