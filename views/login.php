<?php

/** @var $model \app\models\User */
?>

<h1>Login</h1>
<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<div class="row">


    <div class="col-12">
        <?php echo $form->field($model, 'email'); ?>
    </div>

    <div class="col-12">
        <?php echo $form->field($model, 'password')->passwordField(); ?>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
<?php \app\core\form\Form::end(); ?>