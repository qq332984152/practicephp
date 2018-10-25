<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Plugin */

$this->title = 'Create Plugin';
$this->params['breadcrumbs'][] = ['label' => 'Plugins', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plugin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
