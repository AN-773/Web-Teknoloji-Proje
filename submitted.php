<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,900|Source+Sans+Pro:300,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css" />
    <link rel="stylesheet" href="/css/contact.css" />
    <link rel="icon" href="/assets/favicon.ico" />
    <title>Submitted Data</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="/index.html#intro" class="navbar-brand">
                    <img src="/assets/logo.png" alt="logo" style="max-width: 200px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                            <a href="/mycity.html" class="nav-link">
                                Şehrim
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/culture.html" class="nav-link">
                                Mirasımız
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
            <div class="form_item d-flex align-items-center">
                <label class="form-lable fw-bold m-0 p-0">Adı:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Name -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">E-posta:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Email -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">Cins:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['gender'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Gender -->
            <!-- Contact Info -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">İletişim nedeni:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo htmlspecialchars($_POST['reason'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
            <!-- Contact reason -->
            <div class="form_item">
                <label class="form-label fw-bold m-0 p-0">Detaylar:</label>
                <div class="form-control-plaintext ms-1 p-0">
                    <?php
                        echo htmlspecialchars($_POST['details'], ENT_QUOTES, 'UTF-8');
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

</body>

</html>