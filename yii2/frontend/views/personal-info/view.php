<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PersonalInfo */

#$this->title = $model->_id;

$this->title = $model->firstname." ".$model->lastname;
//$this->params['breadcrumbs'][] = ['label' => 'Personal Infos', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="personal-info-view">

   <!-- <p>
        <?= Html::a('Update', ['update', '_id' => (string) $model->_id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Delete', ['delete', '_id' => (string) $model->_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p> -->
    

    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->

<head>

   
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--- css --->
  
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@600&display=swap');
    body{
        font-family: 'Noto Sans Thai', sans-serif;
        /* background-color: #BAB5D880; */
        background-color: #FFFF;
            }
    .bg{
    /* background: #AC2DFF; */
    background: #FFFF;
    }
    .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    /* background: #212529b8; */
    background: 'black';
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #FF6240;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    /* border-bottom:2px solid #7D32AD ; */
    border-bottom:2px solid #FFFF ;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
    
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
    font-family: 'Noto Sans Thai', sans-serif;
}
.profile-tab p{
    font-weight: 600;
    /* color: #ADADAD ; */
    color: blue ;
   /* #7D32AD  */
    
}
</style>


<hr>
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="http://localhost/yii2/frontend/web/index.php?r=personal-info%2Findex">Home</a></li>
            <li class="breadcrumb-item"><a href="#">User</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?=$model->image_url?>" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?=$model->firstname?> <?=$model->lastname?></h5>
            <p class="text-muted mb-1"><?=$model->fistnamethai?> <?=$model->lastnamethai?></p>
            <p class="text-muted mb-4"></p></p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class=" text-warning"></i>
                <p class="mb-2" >https://ces.wu.ac.th/</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class=" fa-lg" style="color: #333333;"></i>
                <p class="mb-0">entry.wu.ac.th/new/home</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class=" style="color: #55acee;"></i>
                <p class="mb-0">expert.wu.ac.th</p>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->firstname?> <?=$model->lastname?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->email?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->phone?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Current Position</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->current_position?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Expertise</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->expertise?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">EduQualification</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->education_qualification?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Graduating</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->graduating?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">University</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->university?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Country</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?=$model->country?></p>
              </div>
            </div>
            <hr>
        
          </div>
        </div>
        
          
      </div>
    </div>
  </div>
</section>

