<?php

/** @var $model \app\models\User */
?>

<h1>Register</h1>
<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<div class="row">
    <div class="col-md-6">
        <?php echo $form->field($model, 'firstname'); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'lastname'); ?>
    </div>

    <div class="col-12">
        <?php echo $form->field($model, 'email'); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'password')->passwordField(); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'confirmpassword')->passwordField(); ?>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
<?php \app\core\form\Form::end(); ?>