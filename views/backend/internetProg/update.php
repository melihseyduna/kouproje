<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Internetprog */

$this->title = 'Update Internetprog: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Internetprogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="internetprog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
