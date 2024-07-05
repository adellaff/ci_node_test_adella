<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h3 class="text-center">Login</h3>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
                <form action="<?= base_url('/auth/login') ?>" method="post">
                    <!-- <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button> -->

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            name="username" id="username" placeholder="Enter Username Address...">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                    </div>
                    

                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>