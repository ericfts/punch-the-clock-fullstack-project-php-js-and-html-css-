<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

              <!--         CSS ONLY               -->

    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">

              <!--         CSS ONLY               -->         

                    <title>Ponto</title>
</head>


<body>

    <form class="form-login" action="#" method="post">

        <div class="login-card card">

          <div class="card-header">     

                 <i class="icofont-users-alt-2 mr-3"></i>

                 <span class="font-weight-light"> PONTO </span>

                 <i class="icofont-bell ml-3"></i>   

           </div>
          <div class="card-body">

            <?php include(TEMPLATE_PATH . '/messages.php') ?>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"
                    class="form-control <?= $errors['email'] ? 'is-invalid': '' ?>" 
                    value="<?= $email ?>" placeholder="Informe o Email cadastrado"  autofocus>

                    <div class="invalid-feedback">
                    <?= $errors['email']?>
                    </div>
                </div>

                <div class="form-group">

                    <label for="password">Senha:</label>

                    <input type="password" name="password" id="password"
                    class="form-control <?= $errors['password'] ? 'is-invalid': '' ?>" 
                    placeholder="Informe a senha">

                    <div class="invalid-feedback">

                      <?= $errors['password']?>

                    </div>

                 </div>
          </div>   

           <div class="card-footer">

                    <button class="btn btn-lg btn-success">Enviar</button>

            </div>
             
        </div>
    </form>
</body>
</html>