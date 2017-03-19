<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RedirectPage */

$this->title = 'Update Redirect Page: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Redirect Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="redirect-page-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
