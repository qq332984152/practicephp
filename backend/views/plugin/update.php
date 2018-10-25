<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Plugin */

$this->title = 'Update Plugin: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Plugins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plugin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
