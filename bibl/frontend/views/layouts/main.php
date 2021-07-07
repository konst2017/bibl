<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\data\Pagination;
use kartik\select2\Select2;

use frontend\controllers\CategoryController;

AppAsset::register($this);
?>

    <!doctype html>
    <?php
    $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php
        $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php
        $this->head() ?>
    </head>

    <?php
    $this->beginBody()
    ?>
    <body>
    <div class="main-wrapper">
        <div class="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Test</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">


                                <a class="nav-link " aria-current="page"
                                   href="<?= \yii\helpers\Url::to(['mater/index']) ?>">Материалы</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['teg/index']) ?>">Тег</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= \yii\helpers\Url::to(['/kat/index']) ?>">Категории</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <?= $content ?>
            </div>
            <footer class="footer py-4 mt-5 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col text-muted">Test</div>
                    </div>
                </div>
            </footer>

        </div>

        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
             tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalToggleLabel">Добавить ссылку</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Добавьте подпись"
                                   id="floatingModalSignature">
                            <label for="floatingModalSignature">Подпись</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>

                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Добавьте ссылку"
                                   id="floatingModalLink">
                            <label for="floatingModalLink">Ссылка</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Добавить</button>
                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                crossorigin="anonymous"></script>
        <?php
        $this->endBody() ?>

    </body>
    </html>
<?php
$this->endPage() ?>