<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Internetprog */

$this->title = 'Create Internetprog';
$this->params['breadcrumbs'][] = ['label' => 'Internetprogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internetprog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
