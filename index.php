<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGIMA test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php require 'validation/checkForm.php' ?>

<div class="container col-md-4 order-md-1 mt-5">
    <h4 class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Форма обратной связи</font></font>
    </h4>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger print-error-msg">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if (empty($errors) && $formSubmitted): ?>
        <div class="alert alert-success">
            <ul>
                <li>Данные успешно отправлены! ⭐</li>
            </ul>
        </div>
    <?php endif; ?>

    <form id="loginForm" action="" method="POST">
        <div class="mb-3">
            <label for="name"><font style="vertical-align: inherit;"><font
                        style="vertical-align: inherit;">Имя</font></font></label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-4">
            <label for="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email</font></font></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="" value="" required>
        </div>

        <div class="mb-4">
            <select class="form-select" name="select" id="select" required>
                <option selected>Выберите оценку страницы</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>

        <div class="input-group mb-3 height-5">
            <span class="input-group-text">Комментарий</span>
            <textarea class="form-control form-control-lg" name="comment" id="comment" aria-label="With textarea" required></textarea>
        </div>

        <button class="btn btn-primary btn-submit" type="submit"><font style="vertical-align: inherit;"><font
                    style="vertical-align: inherit;">Отправить</font></font></button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>