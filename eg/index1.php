
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
body{
  background:#000;
  text-align: center;
}
#main_content{
  display: inline-block;
}
.links{
  position: absolute;
  left:50%;
  top:42%;
  transform: translate(-50%,50%);
  border: 1px solid green;

  width: 60vw;
}
@media (max-width:550px)
{
  .links{
    width:100vw;
  }
}
.links .row{
  margin:20px auto;
}
.large-header {
position: relative;
width: 100%;
background: #111;
overflow: hidden;
background-size: cover;
background-position: center center;
z-index: 1;
}

.demo .large-header {
background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo-bg.jpg");
}
</style>
<body>

  <section id="main_content" class="demo">
    <div class=".large-header">
      <div class="bannertxt">
        <h2 style="color:#fff;">Hello there! I'm</h2>
        <h1 style="color:yellow;font-size:4rem;font-family:'Bungee', cursive;">RAJDEEP JADHAV</h1>
        <p style="color:#fff;font-size:20px;">I am <span id="typewriter_result"></span></p>
      </div>
      <div class="links">
        <div class="row" style="margin-left:20px;">
          <div class="col-4 col-4 col-6">
            <button type="button" class="home_button" name="button">About Me</button>
          </div>
          <div class="col-4 col-4 col-6">
            <button type="button" class="home_button" name="button">Education</button>
          </div>
          <div class="col-4  col-4 col-6">
            <button type="button" class="home_button" name="button">Skills</button>
          </div>
        </div>
        <div class="row">
          <div class="col-3  col-4 col-6">
            <button type="button" class="home_button" name="button">Resume</button>
          </div>
          <div class="col-3  col-4 col-6">
            <button type="button" class="home_button" name="button">Projects</button>
          </div>
          <div class="col-3  col-4 col-6">
            <button type="button" class="home_button" name="button">Experience</button>
          </div>
          <div class="col-3  col-4 col-6">
            <button type="button" class="home_button" name="button">Contact</button>
          </div>
        </div>
      </div>
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
  <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
  <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
  <script type="text/javascript" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js"></script>

</html>
