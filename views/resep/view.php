<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Resep */

$this->title = $model->id_resep;
$this->params['breadcrumbs'][] = ['label' => 'Reseps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resep-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- <= Html::a('Update', ['update', 'id' => $model->id_resep], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a('Delete', ['delete', 'id' => $model->id_resep], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_resep',
            'nama_pasien',
            'created_at:date',
            // 'status',
        ],
    ]) ?>
    <h4>Obat</h4>
    <!-- <div class="table-responsive">
				<table class="table table-striped table-bordered detail-view">
					<tbody>

						<php foreach ($modelRef as $j) { ?>
							<tr><th>Obat </th><td><= $modelRef->obat ?></td></tr>
							<tr><th>Dosis</th><td><= $modelRef->dosis ?></td></tr>
						<php } ?>
					</tbody>
				</table>
			</div>

</div> -->
