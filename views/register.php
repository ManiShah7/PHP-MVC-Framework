<h1>Register</h1>
<?php $form = \app\core\form\Form::begin('', 'POST'); ?>
<div class="row">
    <div class="col-md-6">
        <?php echo $form->field($model, 'firstname', 'First Name'); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'lastname', 'Last Name'); ?>
    </div>

    <div class="col-12">
        <?php echo $form->field($model, 'email', 'Email'); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'password', 'Password')->passwordField(); ?>
    </div>

    <div class="col-md-6">
        <?php echo $form->field($model, 'confirmpassword', 'Confirm Password')->passwordField(); ?>
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </div>
</div>
<?php \app\core\form\Form::end(); ?>