<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd" >


<html>
<head>
<title>{PPCENGINE} - Плащане на клик!</title>
<meta http-equiv="Content-Type" content="text/html; charset={ENCODING}">
<meta name="keywords" content="{META-KEYWORDS}">
<meta name="description" content="{META-DESC}">
	
<script type="text/javascript" src=""></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://krasiv-svqt.com/ppc-templates/test/jcarousellite.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://www.Krasiv-svqt.com/js/login.js"></script>
<script type="text/javascript" src="http://krasiv-svqt.com/ppc-templates/test/jquery.bxSlider.min.js"></script>

<script type="text/javascript">
//<!--
$(document).ready(function() {
        //add the dialog links to boxes
    //linkToDialog('a.big-box');
    
    $("#carousel").jCarouselLite({                               
        btnNext: ".rightarrow",                                        
        btnPrev: ".leftarrow",
        auto: 10000, 
        visible:4                                        
    });

    loginInit()
    $("form#login").validate()
        $(".brokers ul").bxSlider({
        displaySlideQty: 6,
        ticker: true,
        tickerSpeed: 15000
    });

});
//-->

</script>    <script type="text/javascript" src="http://krasiv-svqt.com/ppc-templates/test/global.js"></script>        <link href="http://krasiv-svqt.com/ppc-templates/test/global.css" media="screen" rel="stylesheet" type="text/css" >
<link href="http://krasiv-svqt.com/ppc-templates/test/jquery-ui.css" media="screen" rel="stylesheet" type="text/css" >
</head>
<body>


            <div id="header">
            <div class="leftside">
                
                <div id="introtext">
                    <span class="quotes">"</span> Пътя на успеха е труден, но никой не е успял без маркетингова стратегия, ние ви предлагаме добрия път към печалбата! <span class="quotes">"</span>  
                    <div class="subscribe">-  Управител на Хелт 3000 ЕООД -  </div> 
    
                </div>
                <div id="introtext2">
                Цена на клик от 0,05лв.
                
                <a href="http://krasiv-svqt.com/ppc-user-registration.php"  id='signupLink' ><div id="signup"><span>Включете се</span></div></a>
                </div>
            </div>
                <div class="rightside"><div class="login">
	
	<div class="titallogin">
    Вход за рекламодатели</div>
    <form action="ppc-user-login-action.php" method="post" accept-charset="utf-8" name='login' id='login'>
        <input id="username" type="text" name="username" value="Потребителско име" class='required' ><br>
        <input id="password" type="password" name="password" value="Парола" class='required' >
        <div class="clear"></div>
        <span><a href="http://krasiv-svqt.com/ppc-forgot-password.php" target="_blank">Забравена парола?</a></span><br>
        <input id="login" type="submit" value="Вход!" />
    </form>
</div></div>

        </div>
    <div id="container">
        

<div id="main">
    <div class="leftarrow"><img src="http://krasiv-svqt.com/ppc-templates/test/leftarrow.png" width="16" height="241" alt="Krasiv-svqt.com" /></div>
    <div class="rightarrow"><img src="http://krasiv-svqt.com/ppc-templates/test/rightarrow.png" width="16" height="241" alt="Krasiv-svqt.com" /></div>
    <div id='carousel'>
        <ul>
            <li>
                <a href="http://krasiv-svqt.com" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Поддръжка по всяко време</div>
    <div class="promo-box">Ние ще ви помогнем да изградите рекламна кампания безплатно! Свържете се с нас.</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/statistika-kliu4.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a>
            </li>
            <li>
                <a href="/pages/statsreports" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Статистика и отчети</div>
    <div class="promo-box">Вие получавате подробна статистика за отчети и кликове върху вашите реклами! Изразходван бюджет, налични суми и т.н.</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/statistika.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/paymentmethods" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Методи за плащане</div>
    <div class="promo-box">Може да заредите бързо и лесно вашата сметка с най-популярните начини за интернет разплащане.</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plastane.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/commissions" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">    
    <div class="title-box">Такси за реклама</div>
    <div class="promo-box">Вие плащате най-ниската цена за реклама в Интернет само 0.05лв. за реален посетител.</div><br>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/kalkolator.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/geo-targeted" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Таргетирана аудитория</div>
    <div class="promo-box">Пътя към успеха на добрата реклама е подходяща аудитория, нашата мрежа генерира над 80% женски трафик!</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/strelka-s-tochka.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/multilingual" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Често задавани въпроси</div>
    <div class="promo-box">Посетете тази секция, за да се информирате за най-често срещаните въпроси и техните отговори!</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/vyprosi-otgovori.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/agencies" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Ние ще ви помогнем</div>
    <div class="promo-box">Да популяризирате услугите, които предлагате в Интернет.</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/dve-chovecheta.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
            <li>
                <a href="/pages/optimization" class="big-box" >
                    <div class="box">
                        <div class="img-plus"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/plus.png" width="26" height="26" alt="Krasiv-svqt.com" /></div>
                        <div id="box_text">
    <div class="title-box">Рекламна ефективност</div>
    <div class="promo-box">По-всяко време получавате отчет за ефективноста на вашата рекламна кампания.</div>
</div>                        <div class="img-box"><img src="http://krasiv-svqt.com/ppc-templates/test/IMG/sait-krygovrat.png" width="195" height="132" alt="Krasiv-svqt.com" /></div>
                    </div> 
                </a> 
            </li>
        </ul>
    </div>
    <div clear="both"></div>
</div>

</div>
   

       
</div>

 

    <div id="footer-box">
        <div class="footer-left">
            <img src="http://www.krasiv-svqt.com/ppc-templates/test/men.jpg" width="486" height="330" alt="Krasiv-svqt.com" />
        </div>
    <div class="footer-rightside">
            
      
<div id="rssfeed">
  <div class="rssfeed-top">
    <span>Сайтове в мрежата</span>
  </div>
  <div class="rssfeed_point">
    <ul id="rss">
            <li class="news">
        <p class='title-rssfeed'><a href="#" target='_blank' >Списание Тя жената</a></p>
        <p class='text-rssfeed' id="rsscontent1">Сайт с почти 90% посещения от женска аудитория. Уникалните посетители са над 2000 на ден. А импресиите са над 5000.;</p>
      </li>

            <li class="news">
        <p class='title-rssfeed'><a href="#" target='_blank' >Лечител - Здравен портал</a></p>
        <p class='text-rssfeed' id="rsscontent2">Един добре развиващ се портал за здраве и красота в него има много полезна информация за жени и мъже</p>
      </li>

            <li class="news">
        <p class='title-rssfeed'><a href="#" target='_blank' >Dieti-otslabvane.eu</a></p>
        <p class='text-rssfeed' id="rsscontent3">Практичен сайт изпълнен с полезно съдържание за красива фигура с помощта на диети и упражнения;</p>
      </li>

            <li class="news">
        <p class='title-rssfeed'><a href="#" target='_blank' >Testovebg.com</a></p>
        <p class='text-rssfeed' id="rsscontent4">Сайт за ежедневни хороскопи, любопитни и интересни тестове за учиници и студенти както и за любознателни хора;</p>
      </li>

            <li class="news">
        <p class='title-rssfeed'><a href="#" target='_blank' >Pojelaniqza.com</a></p>
        <p class='text-rssfeed' id="rsscontent5">Един от първите наши сайтове с който започнахме. Много любов и сили са вътворени в този полезен за хората сайт.</p>
      </li>

          </ul>

    <small>Дневно над 10 000 уникани посетителя от които над 80% жени!</small>
  </div>
</div>
    </div> 
    </div>
        <div id="footer">
            <div id="links">
                <span><a href="#">За нас</a></span> |
                <span><a href="#">Как работи</a></span> | 
                <span><a href="#">Блог</a></span> |
                <span><a href="http://krasiv-svqt.com/ppc-advertiser-faq.php">Въпроси и отговори</a></span> | 
                <span><a href="#">Правила и условия</a></span> | 
                <span><a href="#>Политика</a></span> | 
                <span><a href="#">Анти спам политика</a></span> | 
                <span><a href="http://krasiv-svqt.com/ppc-contact-us.php">За връзка с нас</a></span>
            </div>
        </div>

<div class="clear"></div>
<div class="footerlower">
    <div class="directtrack">
       Рекламна мрежа за жени <br>
	   Сигурния път към успеха!
    </div>
     <a class="linkoffer" href="http://krasiv-svqt.com/ppc-contact-us.php">
    <div class="offer">  
        <span>Имате нужда от добра реклама?</span><br>
        <span>Доверете се на нашите маркетингови канали!</span><br>
        <span>Свържете се с нас още днес!</span>    
    </div>
    </a>
    
    <div class="thirdparty">
        <a href="#" target="_blank" ><img src="http://www.krasiv-svqt.com/ppc-templates/test/IMG/facebook.png" width="46" height="46" alt="Krasiv-svqt.com" /></a>
         <a href="#" target="_blank" ><img src="http://www.krasiv-svqt.com/ppc-templates/test/IMG/twitter.png" width="46" height="46" alt="Krasiv-svqt.com" /></a>
         <a href="#" target="_blank" ><img src="http://www.krasiv-svqt.com/ppc-templates/test/IMG/rss.png" width="46" height="46" alt="Krasiv-svqt.com" /></a>
    </div>
                <span id="copy">&copy; 20011-2012 Красив свят</span>
<?php  'http://krasiv-svqt.com/ppc-templates/test/footer.php'; ?>
</div>
<?

if (!(file_exists("kategori.dat"))) {
   echo "Lipsva";
}
else {
   $fp=fopen("kategori.dat","r");
   $fo=fread($fp,12000);
echo "$fo";

}

?>
  </div>
</body>
</html>

