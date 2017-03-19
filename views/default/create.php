<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RedirectPage */

$this->title = 'Create Redirect Page';
$this->params['breadcrumbs'][] = ['label' => 'Redirect Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="redirect-page-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
