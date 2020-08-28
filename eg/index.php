
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="shortcut icon" href="images/favicons/favicon.ico">
    <title>Hey I'm RJ</title>

    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Bungee&display=swap" rel="stylesheet">
  </head>

<style media="screen">
  .home_links .row div{
    margin-top: 30px;

  }
  .home_links_btn{
    padding: 20px;
    border: 1px solid green;
    width:70px;
    height: auto;
    margin:auto 20px;
  }
</style>
<body>
<section id="banner">

    <video loop muted autoplay class="banner_video">
        <source src="images/fire.mp4" type="video/mp4">
    </video>
    <div class="bannertxt">
      <h2 style="color:#fff;">Hello there! I'm</h2>
      <h1 style="color:yellow;font-size:4rem;font-family:'Bungee', cursive;">RAJDEEP JADHAV</h1>
      <p style="color:#fff;font-size:20px;">I am <span id="typewriter_result"></span></p>
    </div>
    <div class="home_links">
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-4">
          <div class="home_links_btn">
            <button type="button" class="home_button" onclick="javascript:window.open('about.php','_self');">About Me</button>
          </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-4">
          <div class="home_links_btn">
            <button type="button" class="home_button" onclick="javascript:window.open('education.php','_self');">Education</button>
          </div>

        </div>
        <div class="col-lg-4 col-sm-4 col-4">
          <div class="home_links_btn">
              <button type="button" class="home_button" onclick="javascript:window.open('skills.php','_self');">Skills</button>
          </div>

        </div>

      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-3 col-3">
          <div class="home_links_btn">
            <button type="button" class="home_button">Projects</button>
          </div>

        </div>
        <div class="col-lg-3 col-sm-3 col-3">
          <div class="home_links_btn">
              <button type="button" class="home_button" onclick="javascript:window.open('RAJDEEP_JADHAV_RESUME.pdf','_self');">Resume</button>
          </div>

        </div>
        <div class="col-lg-3 col-sm-3 col-3">
          <div class="home_links_btn">
            <button type="button" class="home_button">Experience</button>
          </div>

        </div>
        <div class="col-lg-3 col-sm-3 col-3">
          <div class="home_links_btn">
              <button type="button" class="home_button">Contact</button>
          </div>

        </div>
      </div>
      <!-- <div class="row">
        <div class="col-lg-4 col-6">
          <button type="button" class="home_button" onclick="javascript:window.open('RAJDEEP_JADHAV_RESUME.pdf','_self');">Resume</button>
        </div>
        <div class="col-lg-4 col-6">
          <button type="button" class="home_button">Experience</button>
        </div>
        <div class="col-lg-4 col-6">
          <button type="button" class="home_button">Contact</button>
        </div>

      </div> -->
      <!-- <p style="text-align:center;color:yellow;padding-top:100px;">Made with <i class="fa fa-heart pulse"></i> by Rajdeep Jadhav</p> -->

    </div>

</section>

  </body>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript">
  var text = document.getElementById('typewriter_result');

  var typewriter = new Typewriter(text, {

      strings: ['a Code Geek','an Electronics Builder','a Japanese Sensei'],
      autoStart: true,
      loop:true

  });
  </script>
</html>
