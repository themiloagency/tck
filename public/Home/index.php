<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta charset="utf-8" />
<meta name="author" content="Script Tutorials"/>
<title>Turkey Creek Boarding Kennels</title>

<!-- Fonts____________________________________-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600,700,400,300italic' rel='stylesheet' type='text/css'>

<!-- CSS____________________________________-->
<link href="../_css/tcbk_m.css" rel="stylesheet" type="text/css" />

<!-- JQuery____________________________________-->
<script src="../_js/jquery-2.1.4.min.js"></script>
<script src="../_js/imgLiquid-min.js"></script>
</head>

<!-- Header Start -->

<body>
<header>
<?php
    include_once("incl/menu.php");
?>
</header>
<main class="mainNoPad" role="main">
  <section class="headerSection">
    <div class="heroImage">
      <img src="../_Images/TCK_03" alt="testPhoto" display="block"></div>
  </section>
  <div class="underHeadingContainer">
    <article class="interiorContainer">
    <section class="homeWriteUp">
        <h1>Turkey Creek Boarding Kennels</h1>
            <p>Here at Turkey Creek Boarding Kennels pride ourselves on the resort-like atmosphere we provide your dog while boarding with us.</p><p>Turkey Creek Boarding Kennels is the epitome of the Midwest resting on eight open acres of land. Your furry friend won’t even know your gone.</p>
    </section>
        <section class="homeWriteUp">
          <h2>Our Kennels Are Different</h2>
           <p>At Turkey Creek Boarding Kennels, we know there’s nothing like home. Cleanliness is a must, comfort is key, safety is a top priority, and an enjoyable environment for playtime makes all the difference.</p><p>We are your premier dog boarding facility that will take away any worries that come with leaving your beloved dog behind. We&#39;ve even added a huge fenced-in play area! Recess awaits!</p>
        </section>
      </article>
      <div class="interiorContainer">
    <div class="greetingLinks">
    <div class="greetingLinksInner">
    <div class="homeLink">
        <div class="homeLinkImage1">
        <a href="../Gallery/index.php">Check out<br>our Location</a>
        </div></div>
    <div class="homeLink">
       <div class="homeLinkImage2">
        <a href="../Information/faqs.php">Questions?</a>
        </div></div>
    <div class="homeLink">
    <div class="homeLinkImage3">
    <a href="../AboutUs/index.php">Learn Our<br>Story</a>
        </div></div>
        </div></div>
        </div>
   </div>
</main>
<footer>
<?php
    include_once("../incl/footer.php");
?>
</footer>
</body>

<!-- SCRIPTS -->

<script> // JQUERY MENU / IMAGE CONTAINER / DROPDOWN MENU
    $( document ).ready(function() {
        console.log( "document loaded" );
    $(function () {
        $('nav li ul').hide().removeClass('fallback');
        $('nav li').hover(function () {
            $('ul', this).stop().slideToggle(200);
        });
    });
    $(function () {
    $('.menuWrapper').hide().addClass('menuWrapperShow')
        $('.open').on('click mouseenter', function(){
            $('.menuWrapper').stop().fadeToggle(100);
        });
    });
    $(function () {
    $(".heroImage").imgLiquid({
        fill: true,
        horizontalAlign: "center",
        verticalAlign: "top"
    });
    $(".imgLiquidNoFill").imgLiquid({
        fill: false,
        horizontalAlign: "center",
        verticalAlign: "50%"
    });
    });
});
</script>

</html>