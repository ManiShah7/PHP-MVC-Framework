<?php

/** @var $this \app\core\View */

use app\core\form\TextareaField;

/** @var $model \app\models\ContactForm */

$this->title = 'Contact Us';

$form = \app\core\form\Form::begin('', 'post'); ?>
<?= $form->field($model, 'subject') ?>
<?= $form->field($model, 'email') ?>
<?= new TextareaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>

<?php $form = \app\core\form\Form::end(); ?>