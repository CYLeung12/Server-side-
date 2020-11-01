<!DOCTYPE html>
<?
include("inc_db.php");
open_db();
?>

<html>
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121431622-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

      gtag('config', 'UA-121431622-1');
      </script>
      <link rel="icon" type="image/png" href="images/icons/lunar_icon.ico"/>
      <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
      <link href="styles/reset.css" rel="stylesheet" type="text/css">
      <link href="styles/script_abt.css" rel="stylesheet" type="text/css">
      <link href="styles/style.css" rel="stylesheet" type="text/css">
      <script src="scripts/jquery-3.3.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
      <script src="scripts/script.js"></script>
      <style>
          #blog{
              margin: 50px auto;
              text-align: center;
              display: flex;
              flex-wrap: wrap;
          }
          
          .article{
              padding: 30px;
              width: 250px;
          }
          #blog h1{
              font-size: 25px;
              font-weight: 500;
              margin-bottom: 5px;
              color: #333;
          }
          #blog h5{
              font-size: 14px;
              color: #777;
              margin-bottom: 5px;
          }
          #blog img{
              margin-bottom: 5px;
          }
          #blog p{
              text-align: justify;
              text-align-last: center;
          }
      </style>
      <meta charset="utf-8">
      <title>Lunar Hong Kong</title>
  </head>
  <body>
      <header>
          <div class="container">
              <div id="logo">
                  <a href="index.php"><img src="images/icon.png" id="icon"></a>
                  <div id=name>
                    <h3 id=lunar>Lunar</h3>|| 
                    <h3 id=head3>Design House</h3>
                    <h3 id=hk>@ Hong Kong</h3>
                  </div>
              </div>
              <div id="bar">
                <ul>
                  <li><a href="index.php">Home</a></li>|
                  <li><a href="about.php">About</a></li>|
                  <li><a href="service.php">Service</a></li>|
                  <li><a href="blog.php">Blog</a></li>|
                  <li><a href="contact_sim.php">Contact</a></li>
                </ul>
              </div>
          </div>
      </header>

      <main>          
        <div id="blog" class="container">
            
<?
$sql="select * from blog";
$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?> 
            <div class="article">
                <h1><?=urldecode($row[topic])?></h1>
                <h5><?=$row[date]?></h5>
                <img src="../<?=$row[pic]?>" width="250";>
                <p><?=urldecode($row[description])?></p>
            </div>
<? }?>	 
            
        </div>
      </main>
      <footer>
        <div class="container">  
            <div id="web">lunarhk.com</div>
            <div id="btt">Back to Top</div>
        </div>
      </footer>
  </body>
</html>