
<?php
function cookieconsent()
{
  setcookie('cookieconsent_status', 'allow', time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>
<head>
    <style>
        body{
            font-family: 'Noto Sans Thai', sans-serif;
            background-color: #FFFF;
            }
}
    </style>
</head>
<link rel="stylesheet" href="../../theme/assets/css/theme2.css">



<div class="site-index top">
    
    <?php
    cookieconsent();
    if (!isset($_COOKIE['cookieconsent_status'])) {

        Yii::$app->session->setFlash('info', ['เว็บไซต์นี้ใช้คุกกี้เพื่อให้แน่ใจว่าคุณได้รับประสบการณ์ที่ดีที่สุดบนเว็บไซต์ของเรา']);
      }
      
      ?>
    <section id="hero">
        <div class="hero-container">
            <!-- <div>
                <img src="../assets/img/slide/slide-1.jpg" width:>
            </div> -->
            <div class="row">
                <div idata-bs-interval="5000" class="carousel slide carousel-fade" >
                    <ol class="carousel-indicators" ></ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active " style="background-image: url(../assets/img/slide/slide-1.jpg)">
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Welcome to <span>WU Expert Database</span></h2>
                                    <p>ระบบฐานข้อมูลผู้เชี่ยวชาญ เป็นระบบ Web based Application ที่สามารถใช้ค้นหา และดูรายงานผู้เชี่ยวชาญ</p>
                                    <a href="http://localhost/yii2/frontend/web/index.php?r=personal-info%2Findex" class="btn-get-started">
                                        <div class=" bi-search bi-1x">  ค้นหา</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>
</div>
<br>
<br>
<br>
        