<?php session_start();
require_once('helper.php');
if (isset($_SESSION['user'])){
    header('location: success.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="col-md-12">
                <h1 class="text-center mt-5 mb-5 success">Đăng nhập</h1>
            </div>
            <form action="controller.php" class="col-md-12" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text"
                           class="form-control <?php if (isset($_SESSION['errors']['email'])) {
                               echo "is-invalid";
                           } ?>"
                           value="<?php old('email')?>"
                           id="email" name="email"
                           placeholder="Enter email">
                    <?php if (isset($_SESSION['errors']['email'])) { ?>
                        <span class="invalid-feedback"><?= $_SESSION['errors']['email'] ?></span>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text"
                           class="form-control <?php if (isset($_SESSION['errors']['password'])) {
                               echo "is-invalid";
                           } ?>"
                           value="<?php if (isset($_SESSION['data']['password'])) {
                               echo $_SESSION['data']['password'];
                           } ?>"
                           id="password" name="password"
                           placeholder="Enter password">
                    <?php if (isset($_SESSION['errors']['password'])) { ?>
                        <span class="invalid-feedback"><?= $_SESSION['errors']['password'] ?></span>
                    <?php } ?>
                </div>
                <button class="btn btn-success" type="submit">login</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
<?php

    unset($_SESSION['errors']);
    unset($_SESSION['data']);
?>