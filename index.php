<DOCTYPE! html>
  <head>
    <title>NCSU SATELLITE: Science & Technology Enriching Lifelong Leadership in Tomorrow's Endeavors</title>
    <link rel="stylesheet" type="text/css" href="/assets/style.css" />
  </head>
  <body>
    <div id="center">
      <!-- #### START TOP LINKS #### -->
      <!--<img src="layout/logo_top.jpg" />
      <img src="layout/top_ncsu.jpg" />-->
      
      <div class="topnav inline">
        <a href="?page=home">HOME</a> <font size="3">|</font>
        <a href="?page=about">ABOUT</a> <font size="3">|</font>
        <a href="?page=stu_app">APPLICATION</a> <font size="3">|</font>
        <a href="?page=spon_sponsorcamper">SPONSOR A CAMPER</a> <font size="3">|</font>
        <a href="?page=contact">CONTACT</a>
      </div>
      <!-- ##### END TOP LINKS ##### -->
      <header class="head">
        <img src="assets/logo.png" class="logo"/>
        <h2 style="text-align: center;">Science & Technology Enriching Lifelong Leadership in Tomorrow's Endeavors</h2>
        <!-- 
        <img src="layout/logo_mid1.jpg" />
        <img src="layout/top_sat.jpg" />
        <img src="layout/top_abr.jpg" />
           -->
      </header>
      <hr class="cell" color="#000" size="10">
      <nav>
        <section>
          <ul class="navigation flex">
            <li><a href="?page=about">About Us</a></li>
            <li><a href="?page=alumni">Alumni</a></li>
        </section>
        <section>
          <header>Students</header>
          <ul class="navigation">
            <li><a href="?page=stu_activities">Activities</a></li>
            <li><a href="?page=stu_app">Application\<br> Recommendations</a></li>
            <li><a href="?page=stu_whattobring">What you need to bring</a></li>
          </ul>
        </section>
        <section>
          <header>Parents</header>
          <ul class="navigation">
            <li><a href="?page=par_directions">Directions to NC State</a></li>
            <li><a href="?page=par_samplesched">Sample Schedule</a></li>
            <li><a href="?page=par_whotakescare">Who Takes Care of Your Child</a></li>
          </ul>
        </section>
        <section>
          <header>Teachers</header>
          <ul class="navigation">
            <li><a href="?page=tch_recommendation">Recommendation Form</a></li>
            <li><a href="?page=tch_students">Students We Target</a></li>
          </ul>
        </section>
        <section>
          <header>Sponsors</header>
          <ul class="navigation">
            <li><a href="?page=spon_current">Current Sponsors</a></li>
            <li><a href="?page=spon_sponsorcamper">Sponsor A Camper</a></li>
            <li><a href="?page=spon_counselors">Potential Counselors</a></li>
            <li><a href="?page=spon_report">Annual Report</a></li>
          </ul>
        </section>
      </nav>
      <hr class="black">
      <aside>
        <section class="red">
          <header>Recent News</header>
          <?php include "nav_news.txt"; ?>
        </section>
        <section class="yellow">
          <header>Quick Links</header>
          <?php include "nav_quicklinks.txt"; ?>
        </section>
        <section class="blue">
          <header>Caldwell Fellows Program</header>
          <?php include "nav_caldwellfellows.txt"; ?>
        </section>
      </aside>
      <article class="main">
        <?php
        if (!$_GET['page']) {
	          readfile('./home.txt');
        } else {
	          // Only allow txt files in the current directory by always taking the last
	          // part of a multi-part path.
	          $page = array_pop(explode('/', str_replace('\\', '/', $_GET['page'])));
	          if (file_exists("./$page.txt")) {
		            readfile("./$page.txt");
	          } else {
		            readfile('./not-found.txt');
	          }
        }
        ?>
      </article>
      <footer>
        <hr color="#c40000">
        <hr color="#c40000" size="30">
        <img src="layout/bot_logo.jpg" />
        <span class="right"><font size="1" color="black">Got Questions? <a href="?page=contact"><b>Contact Us.</b></a></font></span>
      </footer>
    </div>
  </body>
</html>
