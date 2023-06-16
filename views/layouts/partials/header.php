<?php
use yii\bootstrap5\Html;
use yii\bootstrap5\Breadcrumbs;
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= isset($this->title) ? Html::encode($this->title) : '' ?></h1>
            </div>
            <div class="col-sm-6">
                <?php if (!empty($this->params['breadcrumbs'])): ?>
                    <?= Breadcrumbs::widget([
                    'options' => ['class' => 'breadcrumb float-sm-right'],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                    ]) ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>