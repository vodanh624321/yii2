<?php
    use yii\helpers\Html;
    use yii\bootstrap\ActiveForm;

$this->title = 'Entry';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-entry">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to entry:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'entry-form']); ?>

                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'email') ?>

                <div class="form-group">
                    <?= Html::submitButton('Confirm', ['class' => 'btn btn-primary', 'name' => 'entry-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>