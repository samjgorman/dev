<html>
<head>
  <title>Summer Programs</title>
  <link href="https://fonts.googleapis.com/css?family=Zilla+Slab" rel="stylesheet">
  <style>
  body{
    background-color: #ff9999;
    color:white;
  }
  .newOp{
    margin-top: 10vh;
    margin-bottom: 5vh;
    margin-right: 15vw;
    margin-left: 15vw;
    padding-bottom: 15px;
    border: 1px solid white;
  }
  .newOp:hover{
    background-color: #ff9191;
  }
  a{
    color: #e74c3c;
  }
  </style>
</head>
<body>
<script>
  function link(a){
    var win = window.open(a, '_blank');
    win.focus();
  }
</script>
<form action="" method="post">
  <input type="radio" name="grade" value="9">9th<br>
  <input type="radio" name="grade" value="10">10th<br>
  <input type="radio" name="grade" value="11">11th<br>
  <input type="radio" name="grade" value="12">12th<br>
  <input type="checkbox" name="tags[]" value="stem">stem<br>
  <input type="checkbox" name="tags[]" value="pre-college">pre-college<br>
  <input type="checkbox" name="tags[]" value="leadership">leadership<br>
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


  class summerP {
    function summerP($nameP, $descriptionP, $linkP, $selectivityP, $locationP, $financialAidP, $descriptionDateP, $metricDateP, $tagsP, $gradesP) {
      $this->name = $nameP;
      $this->description = $descriptionP;
      $this->link = $linkP;
      $this->selectivity = $selectivityP;
      $this->location = $locationP;
      $this->financialAid = $financialAidP;
      $this->descriptionDate = $descriptionDateP;
      $this->metricDate = $metricDateP;
      $this->tags = $tagsP;
      $this->grades = $gradesP;
    }
    public function __toString() {
            return "{$this->metricDate}\t{$this->financialAid}\t{$this->selectivity}\tname{$this->name}endName\t{$this->description}\t{$this->link}\t{$this->tags}\t{$this->grades}\t";
    }
  }
  // create an object
  //$herbie = new summerP('test','pen','hello','hello','hello','hello','hello','hello','hello','hello');

  // show object properties
  //echo $herbie;
  //echo (string)$herbie;

  //connect to the server, if connection is succesful it prints conn, if not then it prints out noconn.
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'peer_lift1';

  $conn = mysqli_connect($host, $user, $password, $db);
    if($conn){
      echo "conn<br>";
    }
    else{
      echo 'noConn';
    }


  echo "<br><br>";
    echo "test" ;
  $sql = "SELECT * FROM  `summerprograms` WHERE 1";

  $result = $conn->query($sql);

  function printData($link, $name, $description, $descriptionDate, $grades, $tags){
    echo "<div class=\"newOp\" onclick=\"link('" . $link . "')\">";
    echo "<br><b>Name:</b> " . $name;
    echo "<br><b>Description:</b> " . $description;
    echo "<br><b>Link:</b> <a target=\"_blank\" href=\"" . $link . "\">" . $name . "</a>";
    //echo "<br><b>Location:</b> " . $row["Location"];
    echo "<br><b>Due Date:</b> " . $descriptionDate;
    echo "<br><b>Grades:</b> " . $grades;
    echo "<br><b>Tags:</b> " . $tags;
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
          $grades = $row["Grades"];
          $tags = $row["Tags"];
          $selectivity = $row["Selectivity"];
          $financialAid = $row["financialAid"];
          $metricDate = $row["metricDate"];


          $qwerty = new summerP($name, $description, $link, $selectivity, $location, $financialAid, $descriptionDate, $metricDate, $tags, $grades);
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
              if (metricFilter($grades,$_POST['grade']){
                printData($link, $name, $description, $descriptionDate, $grades, $tags);
              }
              else{
                echo "";
              }


            }
            else{
              echo "<div class=\"newOp\" onclick=\"link('" . $link . "')\">";
              echo "<br><b>Name:</b> " . $name;
              echo "<br><b>Description:</b> " . $description;
              echo "<br><b>Link:</b> <a target=\"_blank\" href=\"" . $link . "\">" . $name . "</a>";
              //echo "<br><b>Location:</b> " . $row["Location"];
              echo "<br><b>Due Date:</b> " . $descriptionDate;
              echo "<br><b>Grades:</b> " . $grades;
              echo "<br><b>Tags:</b> " . $tags;
              echo "</div>";
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
