<main class="main">
    <?php
      renderTitle(
       "Cadastro de Usuários",
       "Crie ou atualize um usuário",
       'icofont-user' 
      );

      include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
    <input type="hidden" name="id" value="<?= $id ?? "" ?>">
        <div class="form-row">
        <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" placeholder="Informe o nome" class="form-control 
                <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $name ?? "" ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
            <label for="email">Email:</label>
                    <input type="email" name="email" id="email"
                    class="form-control <?= $errors['email'] ? 'is-invalid': '' ?>" 
                    value="<?= $email ?? "" ?>" placeholder="Informe o Email cadastrado"  autofocus>

                    <div class="invalid-feedback">

                    <?= $errors['email']?>

                    </div>

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha" 
                class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirme a senha</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha" 
                class="form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de admissão</label>
                <input type="date" id="start_date" name="start_date" 
                class="form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>"
                value="<?= $start_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de desligamento</label>
                <input type="date" id="end_date" name="end_date" 
                class="form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>
                " value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-1">
                <label for="is_admin">Administrador?</label>
                <input type="checkbox" id="is_admin" name="is_admin" class="form-control
                 <?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= isset($is_admin) && $is_admin ? 'checked' : '' ?>>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
        </div>
        <div>
            <button class="btn btn-success btn-lg">Salvar</button>
            <a href="/users.php" class="btn btn-danger btn-lg"
            >Cancelar</a>
        </div>
    </form>
</main>