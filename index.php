<?php
require_once "plugin/faisal_style.php";
require_once "plugin/basic.php";
echo head("Welcome :: ".$cname);
echo basic_fav();
echo m_css();
echo c_head();
echo basic_nav($dcname,$theme);
?>
<main>
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text animated bounceInUp">Jamia Millia Islamia</h1>
        <h1 class="header center white-text animated lightSpeedIn">Robo Club</h1>
       
        <div class="row center animated bounceInDown">
          <h4 class="header col s12 light">Automate The Feature</h4>
        </div>
      
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo host(); ?>/images/back/drone_1.jpeg" alt="Unsplashed background img 1"></div>
  </div>
  

  <div class="container">
    <div class="section">


      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center"><strong>Who Are We?</strong></h5>

            <p class="light">We are a community of students passionate about exploring the exciting world of robotics and autonomous systems.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center"><strong>What We Do?</strong></h5>

            <p class="light">Through workshops and hands-on projects spanning multiple engineering disciplines, we work together to build real robotic systems while developing meaningful technical and leadership skills.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center"><strong>Jamia Millia Islamia</strong></h5>

            <p class="light">Jamia Millia Islamia is a public central university in Delhi. It was established during British rule in 1920. It became a Central University by an act of the Indian Parliament in 1988</p>
          </div>
        </div>
      </div>

<a class="waves-effect waves-teal btn green" href="<?php echo host(); ?>/projects">Current Projects>></a>
    </div>
  </div>
</main>
<?php
echo basic_foot($dcname,$theme);
echo m_js();
echo r_css("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css");
?>