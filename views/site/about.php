<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title"><?= Html::encode($this->title) ?></h3>
            </div> <!-- /.card-body -->
            <div class="card-body">
                <p>
                    This is the About page. You may modify the following file to customize its content:
                </p>
                <code><?= __FILE__ ?></code>
            </div><!-- /.card-body -->
        </div>
    </div><!-- /.container-fluid -->
</section>