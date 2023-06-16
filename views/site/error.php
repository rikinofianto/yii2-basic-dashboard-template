<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<!-- Main content -->
<section class="content">
  <div class="error-page">
    <h2 class="headline text-warning"> <?= Html::encode($this->title) ?></h2>

    <div class="error-content">
      <h4><i class="fas fa-exclamation-triangle text-warning"></i> <?= nl2br(Html::encode($message)) ?></h4>
      <p>
          The above error occurred while the Web server was processing your request.
      </p>
      <p>
          Please contact us if you think this is a server error. Thank you.
      </p>

      <form class="search-form">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>
            </button>
          </div>
        </div>
        <!-- /.input-group -->
      </form>
    </div>
    <!-- /.error-content -->
  </div>
  <!-- /.error-page -->
</section>
<!-- /.content -->