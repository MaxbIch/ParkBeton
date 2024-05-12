<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>ПаркБетон</title>
    <link rel="stylesheet" href="../MainPage.css">
    <link rel="stylesheet" href="../media.css">
    <link rel="stylesheet" href="../slick/css/style.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="../Images/P.png" />

</head>
<body>

    <header class="header">
      <div class="container">
        <div class="header-body">
          <a href="../MainPage.html" class="header-logo">
            <img src="../Images/logo.svg" alt="Логотип">
          </a>
          <div class="number"><a href="tel:+79107054627">+7 (910) 705 46 27</a></div>
          <div class="header-burger">
            <span></span>
          </div>
          <div class="header-menu">
            <div class="header-list">
              <div>
                <a href="../MainPage.html" class="header-link">Главная</a>
              </div>
              <div>
                <a href="../AboutUs.html" class="header-link">О нас</a>
              </div>
              <div>
                <a href="../Catalog.php" class="header-link">Каталог</a>
              </div>
              <div>
                <a href="../Contacts.html" class="header-link">Контакты</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="navigation-section">
        <div class="navigation-section-item">
            <a href="../MainPage.html">Главная</a>
            <a class="cat-arrow"></a>
            <a href="../Catalog.php">Каталог</a>
            <a class="cat-arrow"></a>
            <a href="#">Тумбы под скульптуры</a>
        </div>
    </section>

    <div class="cart">
        <div class="cart-content">
            <?php
            $db_host = 'Localhost';
            $db_user = 'new-site';
            $db_password = 'jZ3aU8xX9y';
            $db_db = 'new-sitebd';
            $mysqli = new mysqli(
                 $db_host,
                 $db_user,
                 $db_password,
                 $db_db
               );

            $query = "set names utf8";
            $mysqli->query($query);
            $query = "select * from Tumbi_pod_skulpturi";
            $results = $mysqli->query($query);
            while($row = $results->fetch_assoc()){
            echo'

            <div>
                <div class="cart-item">
                    <div class="cart-item-img"><img src="'.$row["Image"].'" alt="Изображение карточки товара"></div>
                    <div class="cart-item-text-block">
                        <div class="cart-item-tittle">'.$row["Name"].'</div>
                        <div class="cart-item-description">'.$row["Description"].'</div>
                        <div class="cart-item-price">'.$row["Price"].' ₽</div>
                    </div>
                </div>

                <div class="cart-item-pop-up">
                    <div class="cart-item-pop-up-content">
                        <div class="slider-product">
                            <div class="slider__item">
                                <img src="'.$row["Image"].'" alt="Изображение карточки товара">
                            </div>
                            <div class="slider__item">
                                <img src="'.$row["Image2"].'" alt="Изображение карточки товара">
                            </div>
                            <div class="slider__item">
                                <img src="'.$row["Image3"].'" alt="Изображение карточки товара">
                            </div>
                        </div>
                        <div class="cart-item-pop-up-content-description">
                            <div class="cart-item-pop-up-title">'.$row["Name"].'</div>
                            <div class="cart-item-pop-up-description">'.$row["Description-pop-up"].'</div>
                            <div class="item-character">
                                <div class="item-character-width">Ширина: <span>'.$row["width"].' мм</span> </div>
                                <div class="item-character-height">Высота: <span>'.$row["height"].' мм</span></div>
                                <div class="item-character-length">Длина: <span>'.$row["length"].' мм</span></div>
                                <div class="item-character-color">Цвет: <span>'.$row["color"].'</span> </div>
                            </div>
                            <div class="cart-item-pop-up-price">'.$row["Price"].' ₽</div>
                            <div class="cart-item-pop-up-content-close"><img  src="../Images/Group.svg" alt="Закрыть"></div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            }

            ?>
        </div>
    </div>


    <footer>
      <div class="footer-content" id="Kat">
        <div class="logo">
          <img src="../Images/logo.svg" alt="Логотип">
        </div>
        <div class="footers-pages">
          <div class="footers-pages-item"><img src="../Images/arrow-roght.svg" alt="Стрелка"><a href="../AboutUs.html#id_about-us-section">О компании</a></div>
          <div class="footers-pages-item"><img src="../Images/arrow-roght.svg" alt="Стрелка"><a href="../AboutUs.html#id_questions-section">Покупателям</a></div>
          <div class="footers-pages-item"><img src="../Images/arrow-roght.svg" alt="Стрелка"><a href="../Catalog.php">Каталог</a></div>
        </div>
        <div class="footer-questions">
          <div class="footer-questions-tittle">Есть вопросы?</div>
          <div class="footer-questions-mail"><a href="mailto:sadbeton@mail.ru">sadbeton@mail.ru</a></div>
          <div class="footer-questions-phones"><a href="tel:+79107054627">+7 (910) 705 46 27</a></div>
          <div class="footer-questions-phones"><a href="tel:+79107054627">+7 (910) 705 46 27</a></div>
          <div class="footer-questions-location">Москва, МКАД 38км, д.4в, оф.216</div>
        </div>
        <div class="footer-socials">
          <div class="footer-socials-tittle">Мы в соцсетях</div>
            <div class="footer-socialss">
                <div class="footer-socials-item"><a href="https://www.instagram.com/arhitectsad?igsh=MzRlODBiNWFlZA=="><img src="../Images/insagram.svg" alt="Инстаграм"></a></div>
                <div class="vk"><a href="https://vk.com/club121199315">B</a></div>
            </div>
        </div>



      </div>
    </footer>

    <a class="whatsApp" href="https://api.whatsapp.com/send/?phone=79107054627&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5%2C+%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81+%D0%BF%D0%BE+%D1%82%D0%BE%D0%B2%D0%B0%D1%80%D1%83%3A+%D0%91%D0%B5%D1%82%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5+%D0%B8%D0%B7%D0%B4%D0%B5%D0%BB%D0%B8%D1%8F+%D0%BE%D1%82+%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8F&type=phone_number&app_absent=0"><img src="../Images/WhatsApp_icon.png" alt="WhatsApp"></a>

    <script src="../main.js"></script>
    <script src="../slick/js/slick.min.js"></script>

</body>
</html>