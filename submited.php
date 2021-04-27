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
    <main>
        <div class="container">
            <div class="form_item d-flex align-items-center">
                <label class="form-lable fw-bold m-0 p-0">Adı:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo $_POST['name'];
                    ?>
                </div>
            </div>
            <!-- Name -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">E-posta:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo $_POST['email'];
                    ?>
                </div>
            </div>
            <!-- Email -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">Cins:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo $_POST['gender'];
                    ?>
                </div>
            </div>
            <!-- Gender -->
            <!-- Contact Info -->
            <div class="form_item d-flex align-items-center">
                <label class="form-label fw-bold m-0 p-0">İletişim nedeni:</label>
                <div class="form-control-plaintext ms-2 p-0">
                    <?php
                        echo $_POST['reason'];
                    ?>
                </div>
            </div>
            <!-- Contact reason -->
            <div class="form_item">
                <label class="form-label fw-bold m-0 p-0">Detaylar:</label>
                <div class="form-control-plaintext ms-1 p-0">
                    <?php
                        echo $_POST['details'];
                    ?>
                </div>
            </div>
        </div>
    </main>


</body>

</html>