<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b><?= Html::encode($this->title) ?></b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <?php $form = ActiveForm::begin([
          'id' => 'login-form',
          'fieldConfig' => [
              'template' => "{label}\n{input}\n{error}",
              'labelOptions' => ['class' => 'col-form-label mr-lg-3'],
              'inputOptions' => ['class' => 'form-control'],
              'errorOptions' => ['class' => 'invalid-feedback'],
          ],
      ]); ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Email" name="LoginForm[username]">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="LoginForm[password]">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="hidden" name="LoginForm[rememberMe]" value="0">
              <input type="checkbox" id="remember" name="LoginForm[rememberMe]">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
          <?= Html::submitButton('Sign In', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
          </div>
          <!-- /.col -->
        </div>
      <?php ActiveForm::end(); ?>

      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>

