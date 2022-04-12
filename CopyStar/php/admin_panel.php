<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
    
    <title>Copy Star</title>
</head>
<body>
    <div class="container">
        <header>
            <img class="logo" src="../img/logo.png">
            <div class="h1">Домашний офис с чистого листа
                
            </div>
           
            <div> <nav class="nav">
                 <ul class="menu">
                <li><a href="">О нас</a></li>
                <li><a href="catalog.php">Каталог</a></li>
                <li><a href="map.php">Где нас найти?</a></li>
                <li><a href="korsina.php">Корзина</a></li>
                <li><a href="zakasi.php">Заказы</a></li>
                <li><a href="/">Выход</a></li>
                
              </ul>
            </nav>  
            </div>
         </header>
    </div>
</div>
<div class="container">
<?php
    if($_COOKIE['user'] == 'text'):
?>


            <?php endif;?></div>
    <div class="container">
        <section id="slider_bl">
            
            <div class="wrapper">
            <h1 class="h2">Новинки компании</h1>
              <input checked type=radio name="slider" id="slide1" />
              <input type=radio name="slider" id="slide2" />
              <input type=radio name="slider" id="slide3" />
              <input type=radio name="slider" id="slide4" />
              <input type=radio name="slider" id="slide5" />
              <div class="slider-wrapper">
                <div class=inner>
                  <article>
                    <div class="info top-left">
                      <h1 class="text">Lexmark MS421dn</h1></div>
                    <img class="img2"  src="../img/lazer1.jpg" />
                  </article>
                  <article>
                    <div class="info bottom-right">
                    <h1 class="text">Pantum P3010D</h1></div>
                    <img class="img2" src="../img/lazer3.jpg" />
                  </article>
                  <article>
                    <div class="info bottom-left">
                    <h1 class="text">Canon PIXMA TS304</h1></div>
                    <img class="img2" src="../img/stryi1.jpg" />
                  </article>
                  <article>
                    <div class="info top-right">
                    <h1 class="text">Epson M1140</h1></div>
                    <img class="img2" src="../img/stryi2.jpg" />
                  </article>
                  <article>
                    <div class="info top-left">
                    <h1 class="text">PocketJet PJ723</h1></div>
                    <img class="img2" src="../img/term1.jpg" />
                  </article>
                </div>
              </div>
              <div class="slider-prev-next-control">
                <label for=slide1></label>
                <label for=slide2></label>
                <label for=slide3></label>
                <label for=slide4></label>
                <label for=slide5></label>
              </div>
              <div class="slider-dot-control">
                <label for=slide1></label>
                <label for=slide2></label>
                <label for=slide3></label>
                <label for=slide4></label>
                <label for=slide5></label>
              </div>
            </div>
        </section>

    </div>
    <br>
    <br>
    <br>





<div class="container">        
        <div class="footer" id="footer" >
            <footer>
                <div class="text_footer">
                    Мы всегда готовы ответить на любые вопросы по нашему тел. +7 923 398 9013
    
                    
                </div>
                </footer> 
           <!-- </div>
            <a href="#" class="back-to-top"><img src="img/go_up.png" alt=""></a>
</div>-->
</body>
<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="JS/backToTop.js"></script>-->
</html>