<?php
use yii\bootstrap5\Html;
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <?php if (!Yii::$app->user->isGuest): ?>
            <li class="nav-item dropdown pe-3">
              <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <span class="d-none d-md-block dropdown-toggle ps-2"><?= Yii::$app->user->identity->username ?></span>
              </a>
              <!-- End Profile Iamge Icon -->

              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                  <h6><?=!empty(Yii::$app->user->identity->full_name) ? Yii::$app->user->identity->full_name : Yii::$app->user->identity->username ?></h6>
                  <span><?= Yii::$app->user->identity->email ?></span>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <?php echo '<li class="nav-item">'
                  . Html::beginForm(['/site/logout'])
                  . Html::submitButton(
                    '<i class="bi bi-box-arrow-right"></i> <span>Sign Out</span>',
                    ['class' => 'dropdown-item d-flex align-items-center']
                  )
                  . Html::endForm()
                  . '</li>'; ?>
              </ul>
            </li>
        <?php endif;?>
    </ul>
</nav>
<!-- /.navbar -->