<html>
<head>
  <!-- SEO -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Ваша заявка отправлена. В ближайшее время мы с вами свяжемся!">
  <meta name="keywords" content="Спасибо за заявку! Ваша заявка отправлена. В ближайшее время мы с вами свяжемся!">
  <meta HTTP-EQUIV="Refresh" CONTENT="4; URL=index.php">
  <!-- OG -->

  <!-- OG -->

  <meta property="og:type" content="website" />
  <meta property="og:locale" content="ru" />
  <meta property="og:title" content="Спасибо за заявку!" />
  <meta property="og:image" content="img/logo_msg.png" />
  <meta property="og:site_name" content="Спасибо за заявку!" />
  <meta property="og:description" content="Ваша заявка отправлена. В ближайшее время мы с вами свяжемся!" />

  <!-- Android and etc. -->
  <meta name="format-detection" content="telephone=no"/>
  <meta name="format-detection" content="address=no"/>

  <!-- Page Title -->
  <title>Спасибо за заявку!</title>

  <!-- Library -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">


  <!-- Favicon -->
  <!--[if IE]>
  <link rel="shortcut icon" href="favicon.ico" />
  <![endif]-->



  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

    <style>
      body {
        background: url('../img/t1.png') #fff  no-repeat 50% 0;
        font-family: 'Open Sans', sans-serif;
      }
      .mailblock {
        line-height: 40px;
      }
      #timer_inp {
        font-size: 18px;
      }
      .top-text {
        font-size:30px;
        font-weight: 600;
        color:#000;
        margin: 0 0 50px;
        text-align: center;
      }
    </style>
	
	

	

</head>
<body>
    <script>
        function timer(){
         var obj=document.getElementById('timer_inp');
         obj.innerHTML--;

         if(obj.innerHTML==0){setTimeout(function(){},1000);}
         else{setTimeout(timer,1000);}
        }
        setTimeout(timer,1000);
    </script>
    <div style="margin-top:15%; text-align: center;">
        <div class="mailblock">
          <p class="top-text">СПАСИБО! <br> ВАША ЗАЯВКА ОТПРАВЛЕНА. <br> В ближайшее время мы с вами свяжемся!</p>
          <p>Вы будете перенаправлены на главную страницу через <span id="timer_inp">5</span> секунды</p>
        </div>
    </div>
</body>
</html>