<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PersonalInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Search-Expert-Personal';
// $this->params['breadcrumbs'][] = $this->title;
?>
<head>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@600&display=swap');
    body{
        font-family: 'Noto Sans Thai', sans-serif;
        
        background-color: #FFFF
            }
    </style>
</head>
<div class="personal-info-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!--<p>
    
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <!-- <p>
    <?= Html::a('Create-Expert-Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>- -->
    <form action="" method="GET">
    <div class="input-group mb-3">
  <input type="text" name="search" class="form-control"  placeholder="ค้นหาชื่อบุคลลากร">
  
    <button class="btn btn-danger" type="button">Search</button>
        </form>
  </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'firstname',
            'lastname',
            'graduating',
        
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, '_id' => (string) $model->_id]);
                 }
            ],
        ],
        
    ]); ?>


</div>
