<?php
    use yii\helpers\Html;

$this->title = 'Entry Confirm';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-entry">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <p>You have entered the following information:</p>

            <ul>
                <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
                <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
            </ul>

            <div class="form-group">
                <?= Html::submitButton('Complete', ['class' => 'btn btn-primary', 'name' => 'entry-button']) ?>
            </div>

        </div>
    </div>
</div>
