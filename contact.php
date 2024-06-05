<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>株式会社とくらや／問い合わせ</title>
        <meta name="description" content="関わる全ての人を、幸せに。">
        <link rel="icon" type="image/png" href="images/tokuraya.logo.png">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <!--FONT-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!--CSS -->
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/reset.css"rel="stylesheet" type="text/css" >
    </head>
    
    <body>
     <div id="contact" class="big-bg">

        <header class="page-header wrapper">
    
            <h1><a href="index.html"><img class="logo" src="images/tokuraya.logo.png" alt="tokurayaホーム"></a></h1>
            <nav>
                <ul class="main-nav scroll_right">
                    <li><a href="index.html#home">HOME</a></li>
                    <li><a href="index.html#service">SERVICE</a></li>
                    <li><a href="index.html#company">COMPANY</a></li>
                    <li ><a href="contact.html" class="button">CONTACT</a></li>
                </ul>

                <button><img class="menu-logo" src="images/toggle_button.png"></button>
                <ul class="togglemenu">
                    <li><a href="index.html#home">HOME</a></li>
                    <li><a href="index.html#service">SERVICE</a></li>
                    <li><a href="index.html#company">COMPANY</a></li>
                    <li ><a href="contact.html" class="button">CONTACT</a></li>
                </ul>
            </nav>
        </header>  

        <div class="contact_zone">

            <div class="nagarerutext scroll_right">
                <ul>
                  <li>CONTACT&nbsp;</li>
                  <li>CONTACT&nbsp;</li>
                  <li>CONTACT&nbsp;</li>
                </ul>
                <ul>
                    <li>CONTACT&nbsp;</li>
                    <li>CONTACT&nbsp;</li>
                    <li>CONTACT&nbsp;</li>
                </ul>
            </div>
    
            <div class="contact_box">
    
                <div class="imgbox">
                    <img src="images/1226.jpg">
                </div>
    
                <div class="contact_textbox scroll_right">
                    <div class="contact_title">
                        <p class="grdtext">CONTACT</p>
                        <p class="midasi">お問合せ</p>
                    </div>
                    
                    <div class="wrapper">
                        <form class="contactform" enctype=”text/plain” action="confirm.php" method="post">
                           <div>
                               <label for="name">お名前</label>
                               <input type="text" id="name" name="your name" required>
                           </div>
                           <div>
                               <label for="email">メールアドレス</label>
                               <input type="email" id="email" name="your-email" required>
                           </div>
                           <div>
                               <label for="message">メッセージ</label>
                               <textarea id="message" name="your-message"></textarea>
                           </div>
           
                           <input type="submit" class="button" value="送信">
                        </from>
                    </div><!--wrapper-->

                </div>
            </div>
        </div>

     </div><!--/#contact-->

     


     <footer class="page-fotter wrapper scroll_right">
        <div class="footer-nav">
            <h1>株式会社とくらや</h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="index.html#home">HOME</a></li>
                    <li><a href="index.html#service">SERVICE</a></li>
                    <li><a href="index.html#company">COMPANY</a></li>
                    <li ><a href="contact.html" class="button">CONTACT</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer-nav2">

            <div class="company-address">
                東京都港区西新橋 2-15-17<br>
                リッツ虎ノ門6B<br>
                EMAIL: tokuraya.tt@gmail.com<br>
                TEL: 03-6825-0829<br>
            </div>

            <div class="right-bottom">
                <a href="privacy.html">プライバシーポリシー</a></li>
                <p><small>&copy; 2024 TOKURAYA Inc.</small></p>
            </div>

        </div>
        
     </footer>

     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
     <script src="script.js"></script>
     
    </body>
    
</html>
