<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <meta property="og:image" content="https://peerlift.org/img/Peerlift_FB_Logo.png" />
  <meta property="og:description" content="We've put together the best high school summer programs with the best financial aid, period.  Have the experience of a lifetime without breaking the bank." />
  <meta property="og:url" content="https://peerlift.org/summerPrograms.html" />
  <meta property="og:title" content="Summer Programs" />
  <link rel="icon" href="img/favicon.ico">
  <title>Summer Programs</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/linecons.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/plus.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
  <link href="css/opportunities.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/classie.js"></script>

  <!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
    <![endif]-->

    <script type="text/javascript">
      $(document).ready(function(e) {
        $('.res-nav_click').click(function() {
          $('ul.toggle').slideToggle(600)
          if ($("#hamburger").hasClass('fa-bars')){
            $("#hamburger").removeClass('fa-bars').addClass('fa-times');
          }
          else {
            $("#hamburger").removeClass('fa-times').addClass('fa-bars');
          }
        });


      });
    </script>
    <style>
      body {
        color: grey;
        font-family: sans-serif;
      }

      #header_outer {
        position: fixed;
        width: 100%;
        top: 0px;
        z-index: 1000;
      }

    </style>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104681104-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>

  <body>
    <script>
      function link(a) {
        var win = window.open(a, '_blank');
        win.focus();
      }
      $(document).ready(function() {
        $('#filterButton').click(function() {
          if (!$('#filterMenu').hasClass('show')) {
            $('#filterMenu').addClass('show');
          }
        });
        $('#filterMenu > i').click(function() {
          if ($('#filterMenu').hasClass('show')) {
            $('#filterMenu').removeClass('show');
          }
        });
        $('#toggleOpportunities').click(function() {
          if (!$('#opportunitiesDropdown').hasClass('show')) {
            $('#opportunitiesDropdown').addClass('show');
          }
          else if ($('#opportunitiesDropdown').hasClass('show')) {
            $('#opportunitiesDropdown').removeClass('show');
          }
        });
      });
      $(document).ready(function() {
        $('.opportunity > .toggleDetails').click(function(){
          if ($(this).parent().find('.details').hasClass('collapsed')) {
            $(this).parent().find('.details').removeClass('collapsed');
            $(this).parent().find('.details').addClass('expanded');
            $(this).parent().find('.toggleDetails span:first-child').addClass('hideSpan');
            $(this).parent().find('.toggleDetails span:last-child').removeClass('hideSpan');
          }
          else if ($(this).parent().find('.details').hasClass('expanded')) {
            $(this).parent().find('.details').removeClass('expanded');
            $(this).parent().find('.details').addClass('collapsed');
            $(this).parent().find('.toggleDetails span:last-child').addClass('hideSpan');
            $(this).parent().find('.toggleDetails span:first-child').removeClass('hideSpan');
          }
        });
      });
      $(document).ready(function() {
        $('.toggle > li > .triggerOpportunities').click(function(){
          if ($('.toggle > li > .mobileOpportunitiesDropdown').hasClass('displayBlock')) {
            $('.toggle > li > .mobileOpportunitiesDropdown').removeClass('displayBlock');
          }
          else {
            $('.toggle > li > .mobileOpportunitiesDropdown').addClass('displayBlock');
          }
        });
        $('#nav ul:last-child > li > .triggerOpportunities').click(function(){
          if ($('li > .opportunitiesDropdown').hasClass('displayBlock')) {
            $('li > .opportunitiesDropdown').removeClass('displayBlock');
          }
          else {
            $('li > .opportunitiesDropdown').addClass('displayBlock');
          }
        });
      });
      $(document).ready(function() {
        $('.stem-tooltip').click(function() {
          $('.stem-info').toggleClass('displayInline-Block');
        });
      });
    </script>


    <header id="header_outer">
      <div class="container">
        <div class="header_section">
          <div class="logo"><a href="index.html"><img style="width:175px; margin-right:15px;" src="img/logoc.png" alt=""></a></div>
          <nav class="nav" id="nav">
            <ul class="toggle">
              <li><a href="index.html#top_content">Home</a></li>
              <li><a class="triggerOpportunities">Opportunities <i class="fa fa-caret-down"></i></a>
                <div class="mobileOpportunitiesDropdown">
                  <ul>
                    <li><a href="awards.html">Awards</a></li>
                    <li><a href="flyins.html">College Fly-Ins</a></li>
                    <li><a href="internships.html">Internships</a></li>
                    <li><a href="scholarships.html">Scholarships</a></li>
                    <li><a href="studyAbroad.html">Study Abroad</a></li>
                    <li><a href="summerPrograms.html">Summer Programs</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="index.html#goToMission">Mission</a></li>
              <li><a href="team.html">Our Team</a></li>
              <li><a href="getInvolved.html">Get Involved</a></li>
              <li><a href="donate.html">Donate</a></li>
            </ul>
            <ul class="">
              <li><a href="index.html#top_content">Home</a></li>
              <li><a class="triggerOpportunities">Opportunities <i class="fa fa-caret-down"></i></a>
                <div class="opportunitiesDropdown">
                  <ul>
                    <li><a href="awards.html">Awards</a></li>
                    <li><a href="flyins.html">College Fly-Ins</a></li>
                    <li><a href="internships.html">Internships</a></li>
                    <li><a href="scholarships.html">Scholarships</a></li>
                    <li><a href="studyAbroad.html">Study Abroad</a></li>
                    <li><a href="summerPrograms.html">Summer Programs</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="index.html#goToMission">Mission</a></li>
              <li><a href="team.html">Our Team</a></li>
              <li><a href="getInvolved.html">Get Involved</a></li>
              <li><a href="donate.html">Donate</a></li>
            </ul>
          </nav>
          <a class="res-nav_click animated wobble  " href="javascript:void(0)"><i id="hamburger" style="color: #6094d7;" class="fa-bars"></i></a> </div>

        </div>
      </div>
    </header>
    <div id="filterButton">Filter</div>
    <form id="filterMenu" action="" method="post">
      <div style="display:hidden; height: 120px"></div>
      <i class="fa fa-2x fa-times"></i>
      <h1>Select your grade: </h1>
      <fieldset>
        <div class="container-fluid">
          <div class="row">
            <div class="col-xs-3">
              <input type="radio" name="grade" value="9" id="nine"><label for="nine"><span>9</span></label>
            </div>
            <div class="col-xs-3">
              <input type="radio" name="grade" value="10" id="ten"><label for="ten"><span>10</span></label>
            </div>
            <div class="col-xs-3">
              <input type="radio" name="grade" value="11" id="eleven"><label for="eleven"><span>11</span></label>
            </div>
            <div class="col-xs-3">
              <input type="radio" name="grade" value="12" id="twelve"><label for="twelve"><span>12</span></label>
            </div>
          </fieldset>
          <h1>Select additional tags: </h1>
          <fieldset>
            <ul class="tagNames">
              <li><label for="leadership"><span>Leadership </span></label></li>
              <li><label for="pre-college"><span>Pre-College </span></label></li>
              <li><label for="stem"><span>STEM </span></label><i class="fa fa-info-circle stem-tooltip"><span class="stem-info"><u>S</u>cience, <u>T</u>echnology, <u>E</u>ngineering, and <u>M</u>athematics</span></i></li>
            </ul>
            <ul class="tagBoxes">
              <li><input type="checkbox" name="tags[]" value="leadership" id="leadership"><label for="leadership"><i class="fa fa-check"></i></label></li>
              <li><input type="checkbox" name="tags[]" value="pre-college" id="pre-college"><label for="pre-college"><i class="fa fa-check"></i></label></li>
              <li><input type="checkbox" name="tags[]" value="stem" id="stem"><label for="stem"><i class="fa fa-check"></i></label></li>
            </ul>
          </fieldset>
          <input type="submit" name="SubmitButton">
        </form>
<!--<script>
  //Name	Description	Link	Selectivity	Location	financialAid	descriptionDate	metricDate	Tags	Grades
  function summerProgram(name, description, link, selectivity, location, financialAid, descriptionDate, metricDate, tags, grades) {
    this.name = name;
    this.description = description;
    this.link = link;
    this.selectivity = selectivity;
    this.location = location;
    this.financialAid = financialAid;
    this.descriptionDate = descriptionDate;
    this.metricDate = metricDate;
    this.tags = tags;
    this.grades = grades;
  }
</script>-->
<?php
  //this is to test to see if the page is updating.


  class StudyA {
    function studyA($nameP, $descriptionP, $linkP, $locationP, $financialAidP, $selectivityP, $descriptionDateP, $metricDateP, $tagsP, $gradesP) {
      $this->name = $nameP;
      $this->description = $descriptionP;
      $this->link = $linkP;
      $this->location = $locationP;
      $this->financialAid = $financialAidP;
      $this->selectivity = $selectivityP;
      $this->descriptionDate = $descriptionDateP;
      $this->metricDate = $metricDateP;
      $this->tags = $tagsP;
      $this->grades = $gradesP;
    }
    public function __toString() {
      $a2 = stripos($this->metricDate,"/");
      $a3 = substr($this->metricDate, 0, $a2);
      return "{$a3}\t{$this->financialAid}\t{$this->selectivity}\tname{$this->name}endName\t";
    }
  }
  // create an object
  //$herbie = new summerP('test','pen','hello','hello','hello','hello','hello','hello','hello','hello');

  // show object properties
  //echo $herbie;
  //echo (string)$herbie;

  //connect to the server, if connection is succesful it prints conn, if not then it prints out noconn.
  $host = 'localhost:3306';
  $user = 'peerl_root';
  $password = 'peerliftDB2017!';
  $db = 'peerlift_db2';

  $conn = mysqli_connect($host, $user, $password, $db);
    if($conn){
      //echo "conn<br>";
    }
    else{
      //echo 'noConn';
    }


  //echo "<br><br>";

  $sql = "SELECT * FROM  `studyabroad` WHERE 1";
  $result = $conn->query($sql);


  function printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid){


        if (strcmp($financialAid, '1') == 0){
          $financialAid = "Full Aid";
        }
        else if(strcmp($financialAid, '2') == 0){
          $financialAid = "Good Aid";
        }
        else{
          $financialAid = "Partial Aid";
        }


        echo "<div class=\"container opportunity\">";
        echo "<div class=\"title\">" . $name . "</div>";
        echo "<div class=\"row\">";
          echo "<div class=\"col-xs-4 box1\">" . $grades . "</div>";
          echo "<div class=\"col-xs-4 box2\">" . $financialAid . "</div>";
          echo "<div class=\"col-xs-4 box3\">" . $descriptionDate . "</div>";
        echo "</div>";
        echo "<div class=\"details collapsed\">" . $description . "</div>";
        echo "<div class=\"toggleDetails\"><span >See More</span><span class=\"hideSpan\">See Less</span></div>";
        echo "<div class=\"apply\"><a href=\". $link .\" target=\"_blank\">Apply</a></div>";
        echo "</div>";


  }

  function metricFilter($metric, $metricPost){

    if (isset($metricPost)) {
      if ((stripos($metric, $metricPost)!==false)){
        return true;
      }
      else{
        return false;
      }

    }
    else {
      return true;
    }

  }

  if ($result->num_rows > 0) {
    $summerProgramOpArray = array();
    $arr = array("key" => "value");
    $i = 0;
      // output data of each row
      while($row = $result->fetch_assoc()) {

        $name = $row["Name"];
        $description = $row["Description"];
        $link = $row["Link"];
        $location = $row["Location"];
        $descriptionDate = $row["descriptionDate"];
        $grades = $row["grade"];
        $tags = $row["Tags"];
        $selectivity = $row["Selectivity"];
        $financialAid = $row["FinancialAid"];
        $metricDate = $row["metricDate"];

        $qwerty = new studyA($name, $description, $link, $selectivity, $location, $financialAid, $descriptionDate, $metricDate, $tags, $grades);
        $qname = $qwerty->name;
        $arr[$qname] = $qwerty;

        array_push($summerProgramOpArray, $qwerty);
        //echo $summerProgramOpArray[$i];
        //echo $arr[$qname]->link;

        $i = $i + 1;

      }

      $summerProgramOpArrayString = array();

      for($a = 0; $a<count($summerProgramOpArray); $a++){
        $proxy = (string)$summerProgramOpArray[$a];
        array_push($summerProgramOpArrayString, $proxy);
        //echo $proxy;
        //echo "<br>";
      }
      sort($summerProgramOpArrayString);

      echo "<div id=\"wrapper\">";
      echo "<div style=\"display:hidden; height: 120px\"></div>";
      echo "<h1 id=\"title\">Summer Programs</h1>";

      for($a = 0; $a<count($summerProgramOpArrayString); $a++){

        $aTestString = (string)$summerProgramOpArrayString[$a];
        $a1 = stripos($aTestString,"name");
        $a2 = stripos($aTestString,"endname");
        $a3 = substr($aTestString, ($a1+4), ($a2-($a1+4)));
        //echo $a3;
        $name = $arr[$a3]->name;
        $description = $arr[$a3]->description;
        $link = $arr[$a3]->link;
        //$location = $arr[$a3]->location;
        $descriptionDate = $arr[$a3]->descriptionDate;
        $grades = $arr[$a3]->grades;
        $tags = $arr[$a3]->tags;
        $selectivity = $arr[$a3]->selectivity;
        $financialAid = $arr[$a3]->financialAid;
        $metricDate = $arr[$a3]->metricDate;

          if(isset($_POST['SubmitButton'])){
            //echo (stripos($_POST['grade'], $grades));
            /*if ((stripos($grades,$_POST['grade'])!==false)){
              printData($link, $name, $description, $descriptionDate, $grades, $tags);

            }

            else{
              echo "";
            }*/
            $tT = 0;
            $gT = 0;
            $tT = isset($_POST['tags']);
            $gT = isset($_POST['grade']);

            if($tT == 1 && $gT== 1){

              if (metricFilter($grades,$_POST['grade'])){
                $arraryNew = $_POST['tags'];
                foreach ($arraryNew as $value) {

                  if (metricFilter($tags,$value)){
                    printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid);
                  }
                  else{
                    echo "";
                  }
                }
              }
              else{
                echo "";
              }

            }
            else if($gT== 1 && ($tT != 1)){

              if (metricFilter($grades,$_POST['grade'])){
                printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid);
              }
              else{
                echo "";
              }
            }
            else if($gT != 1 && ($tT== 1)){

              $arraryNew = $_POST['tags'];
              foreach ($arraryNew as $value) {

                if (metricFilter($tags,$value)){
                  printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid);
                }
                else{
                  echo "";
                }
              }
            }
            else{


              printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid);
            }

          }
          else{
            printData($link, $name, $description, $descriptionDate, $grades, $tags, $financialAid);
          }


      }

    }
    else {
      echo "0 results";
    }

        ?>




</script>

</body>
</html>
