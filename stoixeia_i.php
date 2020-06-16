	<head>
	  <title>Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</title>
		<meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="index.php">Αρχική</a></li>
      <li class="active"><a href="#">Στοιχεία ιδιοκτησίας</a></li>
      <li><a href="texnika_st.php">Τεχνικά στοιχεία ραδιοφωνικών σταθμών</a></li>
      <li><a href="r_zeuxeis.php">Ραδιοηλεκτρικές ζεύξεις</a></li>
      <li><a href="egrafa.php">Εξερχόμενα/εισερχόμενα εγγράφων</a></li>
      <li><a href="texnikes_anafores.php">Τεχνικές αναφορές</a></li>
    </ul>
  </div>
</nav>
</nav>
 <div class="container">
<form action="stoixeia_i.php" method="POST" accept-charset="utf-8">
    
  <div class="form-group col-xs-7">
    <label for="on_nom_u">*Ονοματεπώνυμο νομικού υπεύθυνου</label>
    <input type="text" pattern="([A-ZΆ-ΫÀ-ÖØ-Þ][A-ZΆ-ΫÀ-ÖØ-Þa-zά-ώß-öø-ÿ]{1,19} ?){1,20}" title="Επιτρέπονται,το πρώτο γράμμα κεφαλαίο μόνο χαρακτήρες και μέγιστο 20 χαρακτήρες" class="form-control" name="on_nom_u" placeholder="Ονοματεπώνυμο νομικού υπεύθυνου" required>
  </div>

  <div class="form-group col-xs-7">
    <label for="ep_et">*Επωνυμία εταιρίας</label>
    <input type="text" pattern="([A-ZΆ-ΫÀ-ÖØ-Þ][A-ZΆ-ΫÀ-ÖØ-Þa-zά-ώß-öø-ÿ]{1,19} ?){1,20}" title="Επιτρέπονται μόνο χαρακτήρες,το πρώτο γράμμα κεφαλαίο και μέγιστο 20 χαρακτήρες" class="form-control" name="ep_et" placeholder="Επωνυμία εταιρίας" required>
  </div>

  <div class="form-group col-xs-7">
    <label for="dieuthunsh">*Διεύθυνση</label>
    <input type="text" class="form-control" name="dieuthunsh" placeholder="Διεύθυνση" required>
  </div>
  
  <div class="form-group col-xs-7">
    <label for="thl_e">*Τηλέφωνα επικοινωνίας</label>
    <input type="tel" pattern="((\+|00)?[1-9]{2}|0)[1-9]( ?[0-9]){8}" title="Το τηλέφωνο δεν ειναι έγκυρο" class="form-control" name="thl_e" placeholder="Τηλέφωνα επικοινωνίας" required>
  </div>  

  <div class="form-group col-xs-7">
    <label for="on_texn_u">Ονοματεπώνυμο τεχνικού υπεύθυνου</label>
    <input type="text" pattern="([A-ZΆ-ΫÀ-ÖØ-Þ][A-ZΆ-ΫÀ-ÖØ-Þa-zά-ώß-öø-ÿ]{1,19} ?){1,20}" title="Επιτρέπονται μόνο χαρακτήρες,το πρώτο γράμμα κεφαλαίο και μέγιστο 20 χαρακτήρες" class="form-control" name="on_texn_u" placeholder="Ονοματεπώνυμο τεχνικού υπεύθυνου">
  </div>  
  
    <div class="form-group col-xs-7">
    <label for="thl_texn_u">Τηλέφωνο τεχνικού υπεύθυνου</label>
    <input type="tel" pattern="((\+|00)?[1-9]{2}|0)[1-9]( ?[0-9]){8}" title="Το τηλέφωνο δεν ειναι έγκυρο" maxlength="10" class="form-control" name="thl_texn_u" placeholder="Τηλέφωνο τεχνικού υπεύθυνου">
  </div>  


    <div class="form-group col-xs-7">
    <label for="fax">*Fax</label>
    <input type="text" class="form-control" name="fax" placeholder="Fax" required>
  </div>  

    <div class="form-group col-xs-7">
    <label for="webpage">Webpage</label>
    <input type="text" pattern="https?:\/\/(?!.{253}.+$)((?!-.*|.*-\.)([^ !-,\.\/:-@\[-`{-~]{1,63}\.)+([^ !-\/:-@\[-`{-~]{2,15}|xn--[a-zA-Z0-9]{4,30})|(([01]?[0-9]{2}|2([0-4][0-9]|5[0-5])|[0-9])\.){3}([01]?[0-9]{2}|2([0-4][0-9]|5[0-5])|[0-9]))(\/.*)?" title="Το link δεν είναι έγκυρο" class="form-control" name="webpage" placeholder="Webpage">
  </div>  
 
 
     <div class="form-group col-xs-7">
    <label for="email">Email</label>
    <input type="email" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" title="Το email δεν είναι έγκυρο"class="form-control" name="email" placeholder="Email">
  </div>   
  
      <div class="form-group col-xs-7">
    <label for="penothta">*Περιεφεριακή ενότητα</label>
      <select class="form-control"  name="penothta" required/>
 
  <option value="ΑΧΑΙΑΣ">ΑΧΑΙΑΣ</option>
  <option value="ΑΙΤΩΛ/ΝΙΑΣ">ΑΙΤΩΛ/ΝΙΑΣ</option>
  <option value="ΗΛΕΙΑΣ">ΗΛΕΙΑΣ</option>
  <option value="ΑΡΤΑΣ">ΑΡΤΑΣ</option>
  <option value="ΠΡΕΒΕΖΗΣ">ΠΡΕΒΕΖΗΣ</option>
  <option value="ΙΩΑΝΝΙΝΩΝ">ΙΩΑΝΝΙΝΩΝ</option>
  <option value="ΘΕΣΠΡΩΤΙΑΣ">ΘΕΣΠΡΩΤΙΑΣ</option>
  <option value="ΚΕΡΚΥΡΑΣ">ΚΕΡΚΥΡΑΣ</option>
  <option value="ΛΕΥΚΑΔΑΣ">ΛΕΥΚΑΔΑΣ</option>
  <option value="ΚΕΦΑΛΛΗΝΙΑΣ">ΚΕΦΑΛΛΗΝΙΑΣ</option>
  <option value="ΖΑΚΥΝΘΟΥ">ΖΑΚΥΝΘΟΥ</option>
</select>
  </div>  
  
      <div class="form-group col-xs-7">
    <label for="dtitlos">*Διακριτικός τίτλος</label>
    <input type="text" pattern="([A-ZΆ-ΫÀ-ÖØ-Þ][A-ZΆ-ΫÀ-ÖØ-Þa-zά-ώß-öø-ÿ]{1,19} ?){1,20}" title="Επιτρέπονται μόνο χαρακτήρες,το πρώτο γράμμα κεφαλαίο και μέγιστο 20 χαρακτήρες" class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" required>
  </div> 
  <div class="form-group col-xs-7">
      <span class="tag tag-pill tag-danger">Τα στοιχεία με * ειναι υποχρεωτικά!</span>
  
  </div>
  <div class="col-xs-7">
  <button type="submit"  name="submit" class="btn btn-primary">Καταχώρηση</button>
  </div>
  
  
</form>

</div>
</body>
<?php
include 'connect.php';

mysqli_set_charset($connection,"utf8");

if(isset($_POST[submit])){
$nomikos_u = $_POST["on_nom_u"];
$epwnumia_e = $_POST["ep_et"];
$dieuthunsh = $_POST["dieuthunsh"];
$thlefwna = $_POST["thl_e"];
$onoma_texnikou = $_POST["on_txn_u"];
$thlefwno_texnikou = $_POST["thl_texn_u"];
$fax = $_POST["fax"];
$webpage = $_POST["webpage"];
$email = $_POST["email"];
$penothta = $_POST["penothta"];
$dtitlos = $_POST["dtitlos"];

$query="INSERT INTO idiokthsia(nomikos_u,epwnumia_e,dieuthunsh,thlefwno_e,onoma_te,thlefwno_te,fax,webpage,email,penothta,dtitlos)
VALUES ('$nomikos_u','$epwnumia_e','$dieuthunsh','$thlefwna','$onoma_texnikou','$thlefwno_texnikou','$fax','$webpage','$email','$penothta','$dtitlos')";

if ($connection->query($query) === TRUE) {
    echo "Η εγγραφή καταχωρήθηκε με επιτυχία"."<br>";
   /* header("Refresh:0");*/
   
} else {
 echo "Error: " . $query . "<br>" . $connection->error;
}


}//End isset submit



?>