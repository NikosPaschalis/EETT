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
    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Πληροφοριακό Σύστημα Ραδιοφωνικών Σταθμών</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Αρχική</a></li>
                <li><a href="stoixeia_i.php">Στοιχεία ιδιοκτησίας</a></li>
                <li><a href="texnika_st.php">Τεχνικά στοιχεία ραδιοφωνικών σταθμών</a></li>
                <li ><a href="r_zeuxeis.php">Ραδιοηλεκτρικές ζεύξεις</a></li>
                <li><a href="egrafa.php">Εξερχόμενα/εισερχόμενα εγγράφων</a></li>
                <li class="active"><a href="texnikes_anafores.php">Τεχνικές αναφορές</a></li>
            </ul>
        </div>
    </nav>
   
<ul class="nav nav-pills nav-justified">
    <li ><a data-toggle="tab" href="#tab1">Αναζήτηση στοιχείων ραδιοφωνικών σταθμών</a></li>
    <li><a data-toggle="tab" href="#tab2">Αναζήτηση ραδιοηλεκτρικών ζεύξεων</a></li>
    <li><a data-toggle="tab" href="#tab3">Αναζήτηση εγγράφων</a></li>
    <li><a data-toggle="tab" href="#tab4">Αναζήτηση σημείου μέτρησης</a></li>
    <li><a data-toggle="tab" href="#tab5">Αναζήτηση στοιχείων ιδιοκτήτη</a></li>
  </ul>
<div class="col-lg-7 col-centered tab-content">
       
        <div id="tab1" class="tab-pane fade in active">
            <h3>Αναζήτηση στοιχείων ραδιοφωνικών σταθμών</h3>
            <form  action="texnikes_anafores.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="form-group col-xs-7">
                    <label for="dtitlos">Διακριτικός τίτλος</label>
                    <input type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" value="">
                </div> 
                <div class="form-group col-xs-7">
                    <label for="penothta">Περιεφεριακή ενότητα</label>
                    <select class="form-control"  name="penothta" />
                    <option value="NULL">Όλες</option>
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
                <div class="col-xs-7">
                    <button type="submit"  name="submit0" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </form>
        </div>
        <!---τεχνικα στοιχεια------>
        <div id="tab2" class="tab-pane fade ">
            <h3>Αναζήτηση ραδιοηλεκτρικών ζεύξεων</h3>
            <form action="texnikes_anafores.php" method="POST" enctype="multipart/form-data" accept-charset="utf-8">

                <div class="form-group col-xs-7">
                    <label for="dtitlos">Διακριτικός τίτλος</label>
                    <input type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" value="">
                </div> 
                <div class="form-group col-xs-7">
                    <label for="penothta">Περιεφεριακή ενότητα</label>
                    <select class="form-control"  name="penothta" />
                    <option value="NULL">Όλες</option>
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
                <div class="col-xs-7">
                    <button type="submit"  name="submit2" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </form>
        </div>
        <!---αναζητηση ζευξεων---->
         
        <div id="tab3" class="tab-pane fade">
            <h3>Αναζήτηση εγγράφων</h3>
            <form action="texnikes_anafores.php" method="POST"  accept-charset="utf-8">

                <div class="form-group col-xs-7">
                    <label for="dtitlos">Διακριτικός τίτλος</label>
                    <input type="text" class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" >
                </div> 
                <div class="form-group col-xs-7">
                    <label for="tupos_egrafou">Τύπος εγγράφου</label>
                    <select class="form-control" name="tupos_egrafou" required>
                        <option value="all">'Ολα</option>
                        <option value="εισερχόμενα">Εισερχόμενα</option>
                        <option value="εξερχόμενα">Εξερχόμενα</option>
                        <option value="εσωτερικά">Εσωτερικά</option>
                    </select>
                </div>  
                <div class="form-group col-xs-7">
                    <label for="kathgoria_e">Κατηγορία εγγράφου</label>
                    <select class="form-control" name="kathgoria_e" required>
                        <option value="ΑΠ">ΑΠ</option>
                        <option value="ΥΑ">ΥΑ</option>
                        <option value="ΤΕ">ΤΕ</option>
                        <option value="ΥΣ">ΥΣ</option>
                        <option value="ΣΠ">ΣΠ</option>
                    </select>
                </div>
                <div class="col-xs-7">
                    <button type="submit"  name="submit1" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </form>
        </div>
        <!----αναζητηση με βαση τις συντεταγμενες 10/21/2016--->
              <div id="tab4" class="tab-pane fade">
            <h3>Αναζήτηση σημείου μέτρησης</h3>
            <form action="texnikes_anafores.php" method="POST"  accept-charset="utf-8">
                <div class="form-group col-xs-7">
                    <label for="dtitlos">Διακριτικός τίτλος</label>
                    <input type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" value="">
                </div> 
   <div class="form-group col-xs-7">
    <label for="shm_metr">Σημείο μέτρησης</label>
    <input type="text" class="form-control" name="shm_metr" placeholder="Γεωγραφικές συντεταγμένες">
  </div> 
                <div class="col-xs-7">
                    <button type="submit"  name="submit3" class="btn btn-primary">Αναζήτηση</button>
                </div>
            </form>
        </div>
        
        <!---αναζητηση ζευξεων---->
 
        <!----αναζητηση εγγραφων------>
 <div id="tab5" class="tab-pane fade">
            <h3>Αναζήτηση στοιχείων ιδιοκτήτη</h3>
            <form action="texnikes_anafores.php" method="POST"  accept-charset="utf-8">

                <div class="form-group col-xs-7">
                    <label for="dtitlos">Διακριτικός τίτλος</label>
                    <input type="text" class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος" >
                </div> 
                        <div class="form-group col-xs-7">
                    <label for="penothta">Περιεφεριακή ενότητα</label>
                    <select class="form-control"  name="penothta" />
                    <option value="NULL">Όλες</option>
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
      
                <div class="col-xs-7">
                    <button type="submit"  name="submit4" class="btn btn-primary">Αναζήτηση</button>
                    
                </div>
             
            </form>
        </div>
        <!---Αναζήτηση ιδιοκτήτη---->
 
 <!-- Modal  Επεξεργασία τεχνικών στοιχείων ραδιοφωνικών σταθμών-->
  <div class="modal fade" id="myModalupdate1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Επεξεργασία τεχνικών στοιχείων ραδιοφωνικών σταθμών</h4>
        </div>
        <div class="modal-body">
        <!-----  <p id="update01">The id of row is :</p>----->
        <div class="container">
          <form action="update.php" method="POST"  accept-charset="utf-8">
    
 <div class="form-group col-xs-7">
    <label for="penothta">Περιεφεριακή ενότητα</label>
      <select style="width:50%;" class="form-control"  name="penothta" />
 
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
    <label for="dtitlos">Διακριτικός τίτλος</label>
    <input style="width:50%;" type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος">
  </div>
  
   <div class="form-group col-xs-7">
    <label for="suxnothta">Συχνότητα MHz</label>
    <input style="width:50%;" type="number" min="87.5" max="108" step="0.1" class="form-control" name="suxnothta" placeholder="Συχνότητα MHz">
  </div>

   <div class="form-group col-xs-7">
    <label for="shm_m">Σημείο μέτρησης(γεωγραφ. συντεταγμένες)</label>
    <input style="width:50%;" type="text" class="form-control" name="shm_m" placeholder="Σημείο μέτρησης">
  </div>  
  
     <div class="form-group col-xs-7">
    <label for="hm_m">Ημερομηνία μέτρησης</label>
    <input style="width:50%;" type="date" class="form-control" name="hm_m" placeholder="Ημερομηνία μέτρησης">
  </div>  
  
    <div class="form-group col-xs-7">
      <label for="nom_k">Νομική κατάσταση</label>
      <select style="width:50%;" class="form-control" name="nom_k">
        <option value="νόμιμος">Νόμιμος</option>
        <option value="παράνομος">Παράνομος</option>
        
      </select>
  </div>    
  
<input type="hidden" id="test" value="" name="id"/>


  <div class="col-xs-7">
  <button type="submit" name="update1" class="btn btn-primary">Ενημέρωση</button>
  </div>
  
  
</form></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <!-- Modal  Επεξεργασία ραδιοηλεκτρικών ζεύξεων-->
  <div class="modal fade" id="myModalupdate2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Επεξεργασία ραδιοηλεκτρικών ζεύξεων</h4>
        </div>
        <div class="modal-body">
        <!-----  <p id="update01">The id of row is :</p>----->
        <div class="container">
          <form action="update.php" method="POST"  accept-charset="utf-8">
    
 <div class="form-group col-xs-7">
    <label for="penothta">Περιεφεριακή ενότητα</label>
      <select style="width:50%;" class="form-control"  name="penothta" />
 
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
    <label for="dtitlos">Διακριτικός τίτλος</label>
    <input style="width:50%;" type="text"  class="form-control" name="dtitlos" placeholder="Διακριτικός τίτλος">
  </div>
  
   <div class="form-group col-xs-7">
    <label for="suxnothta">Συχνότητα MHz</label>
    <input style="width:50%;" type="number" min="87.5" max="108" step="0.1" class="form-control" name="suxnothta" placeholder="Συχνότητα MHz">
  </div>

   <div class="form-group col-xs-7">
    <label for="shm_m">Σημείο μέτρησης(γεωγραφ. συντεταγμένες)</label>
    <input style="width:50%;" type="text" class="form-control" name="shm_m" placeholder="Σημείο μέτρησης">
  </div>  
  
     <div class="form-group col-xs-7">
    <label for="hm_m">Ημερομηνία μέτρησης</label>
    <input style="width:50%;" type="date" class="form-control" name="hm_m" placeholder="Ημερομηνία μέτρησης">
  </div>  
  
    <div class="form-group col-xs-7">
      <label for="nom_k">Νομική κατάσταση</label>
      <select style="width:50%;" class="form-control" name="nom_k">
        <option value="νόμιμος">Νόμιμος</option>
        <option value="παράνομος">Παράνομος</option>
        
      </select>
  </div>    
  
<input type="hidden" id="tes2" value="" name="id"/>


  <div class="col-xs-7">
  <button type="submit" name="update2" class="btn btn-primary">Ενημέρωση</button>
  </div>
  
  
</form></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
</body>

<?php
$flag = 0;
include 'connect.php';
include 'latlng.php';
mysqli_set_charset($connection,"utf8");

if(isset($_POST[submit0])){
        $dtitlos= $_POST["dtitlos"];
        $penothta = $_POST["penothta"];
        $flag =1 ;
        if(empty($ditlos)=="false" and $penothta=="NULL"){
        
        $query = "SELECT * FROM texnika_stoixeia  WHERE dtitlos LIKE '%{$dtitlos}%'";
        $result = mysqli_query($connection, $query);
        }
        elseif($penohta!="NULL" and empty($dtitlos)=="false")
        {
        $query = "SELECT * FROM texnika_stoixeia  WHERE penothta='$penothta'";
        $result = mysqli_query($connection, $query);
        }
        else
        {
        $query = "SELECT * FROM texnika_stoixeia  WHERE penothta='$penothta' AND dtitlos LIKE '%{$dtitlos}%'";
        $result = mysqli_query($connection, $query); 
        }

echo '<div class="container">';
echo '<table class="table table-bordered " >';
echo '<thead>
<tr>
<th>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</th>
<th>ΣΥΧΝΟΤΗΤΑ</th>
<th>ΠΕΡΙΦ/ΚΗ ΕΝΟΤΗΤΑ</th>
<th>ΧΑΡΑΚΤΗΡΙΣΜΟΣ</th>
<th>ΣΗΜΕΙΟ ΜΕΤΡΗΣΗΣ</th>
<th>ΗΜΕΡ/ΝΙΑ ΜΕΤΡΗΣΗΣ</th>
<th>ΕΝΕΡΓΕΙΕΣ</th>
</tr>
</thead>';

while ($row = mysqli_fetch_assoc($result))
{
        $id=$row['id'];
        $penothta = $row['penothta'];
        
        echo"<tr>";
        echo "<td>"  . $row['dtitlos']."</td>";
        echo "<td>". $row['suxnothta']."</td>";
        echo "<td>". $row['penothta']."</td>";
        echo "<td>". $row['xarakthrimos']."</td>";
        echo "<td>". $row['shmeio_m']."</td>";
        echo "<td>". $row['hm_metr']."</td>";
        echo '<td style="width:15%">'.'<a href="delete.php?id='.$row['id'].'&flag='.$flag.'"">
        <img class="img-thumbnail" src="delete.png" alt="Διαγραφή" title="Διαγραφή" style="width:32px;height:32px;border:0;">
        </a>'.
        '&nbsp;&nbsp;&nbsp;<a  id ='.$row['id'].' href="#myModalupdate1" data-value='.$row['id'].' data-toggle="modal"  data-target="#myModalupdate1">
        <img class="img-thumbnail" src="edit.png" alt="Επεξεργασία" title="Επεξεργασία" style="width:32px;height:32px;border:0;">
        </a>'.
        '&nbsp;&nbsp;&nbsp;<a id ='.$row['id'].'  href="#myModalimg"  data-toggle="modal" data-target="#myModalimg">
        <img class="img-thumbnail" src="img.png" alt="Εικόνες" title="Εικόνες" style="width:42px;height:42px;border:0;">
        </a>'.
        "</td>";
        echo"</tr>";
}

echo '</table>';
echo '</div>';

}//end ifset submit

?> <!----Telos texnikwn stoixeiwn--->


<?php

if(isset($_POST[submit2])){
        
        $dtitlos= $_POST["dtitlos"];
        $penothta = $_POST["penothta"];
        $flag =2;
        if(empty($ditlos)=="false" and $penothta=="NULL"){
        $query = "SELECT * FROM zeuxeis  WHERE dtitlos LIKE '%{$dtitlos}%'";
        $result = mysqli_query($connection, $query);
        }
        elseif($penohta!="NULL" and empty($dtitlos)=="false")
        {
        $query = "SELECT * FROM zeuxeis  WHERE penothta='$penothta'";
        $result = mysqli_query($connection, $query);
        }
        else
        {
        $query = "SELECT * FROM zeuxeis WHERE penothta='$penothta' AND dtitlos LIKE '%{$dtitlos}%'";
        $result = mysqli_query($connection, $query);
}

echo '<div class="container">';
echo '<table class="table table-bordered">';
echo '<thead>
<tr>
<th>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</th>
<th>ΣΥΧΝΟΤΗΤΑ</th>
<th>ΠΕΡΙΦΕΡΕΙΑΚΗ ΕΝΟΤΗΤΑ</th>
<th>ΣΗΜΕΙΟ ΜΕΤΡΗΣΗΣ</th>
<th>ΗΜΕΡΟΜΗΝΙΑ ΜΕΤΡΗΣΗΣ</th>
<th>ΝΟΜΙΚΗ ΚΑΤΑΣΤΑΣΗ</th>
<th>ΕΝΕΡΓΕΙΕΣ</th>
</tr>
</thead>';
while ($row = mysqli_fetch_assoc($result))
{
    $id=$row['id'];
    echo"<tr>";
    echo "<td>"  . $row['dtitlos']."</td>";
    echo "<td>". $row['suxnothta']."</td>";
    echo "<td>". $row['penothta']."</td>";
    echo "<td>". $row['shmeio_m']."</td>";
    echo "<td>". $row['hmeromhnia_m']."</td>";
    echo "<td>". $row['nomikh_k']."</td>";
    echo "<td>".'<a href="delete.php?id='.$row['id'].'&flag='.$flag.'"">
    <img src="delete.png" alt="Διαγραφή" title="Διαγραφή" style="width:32px;height:32px;border:0;">
    </a>'.
    '&nbsp;&nbsp;&nbsp;<a title="Επεξεργασία" id='.$row['id'].' data-toggle="modal" data-target="#myModalupdate2" href="#myModalupdate2">
    <img src="edit.png" alt="Επεξεργασία" title="Επεξεργασία" style="width:32px;height:32px;border:0;">
    </a>'."</td>";
}

echo '</table>';
echo '</div>';
}//END IF2
?> 
<!----Telos zeuxewn--->
<?php
if(isset($_POST[submit1])){
$dtitlos= $_POST["dtitlos"];
$tupos_egrafou = $_POST["tupos_egrafou"];
$kathgoria_e = $_POST["kathgoria_e"];
$flag=3;
if($tupos_egrafou="all")
{
    $query = "SELECT * FROM egrafa  ";
$result = mysqli_query($connection, $query);
}
else{
$query = "SELECT * FROM egrafa WHERE kathgoria_e='$kathgoria_e' && tupos_egrafou='$tupos_egrafou' && dtitlos LIKE '%{$dtitlos}%' ";
$result = mysqli_query($connection, $query);
}
echo '<div class="container">';
echo '<table class="table table-bordered">';
echo '<thead>
<tr>
<th>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</th>
<th>ΤΥΠΟΣ ΕΓΓΡΑΦΟΥ</th>
<th>ΑΡΧΕΙΟ</th>
<th>ΕΝΕΡΓΕΙΕΣ</th>
</tr>
</thead>';
while ($row = mysqli_fetch_assoc($result))
{
echo"<tr>";
echo "<td>"  . $row['dtitlos']."</td>";
echo "<td>". $row['tupos_egrafou']."</td>";

echo "<td>".$row['fname']."</td>";
echo "<td style='width: 10%;'>".'<a href="download.php?file='.$row['fname'].'">'.
'<img src="dl1.png" alt="Λήψη" title="Λήψη" style="width:32px;height:32px;border:0;">'
.'</a>'
.'&nbsp;&nbsp;&nbsp;<a href="delete.php?id='.$row['id'].'&flag='.$flag.'"">
<img src="delete.png" alt="Διαγραφή" title="Διαγραφή" style="width:32px;height:32px;border:0;">
</a>'.
"</td>";

echo"</tr>";



}

echo '</table>';
echo '</div>';
}
?>
<!-------shmeia metrhsewn php--->
<?php
$flag = 3;
include 'connect.php';

mysqli_set_charset($connection,"utf8");

if(isset($_POST[submit3]))
{
    
    $dtitlos = $_POST["dtitlos"];
    $shm_metr = $_POST["shm_metr"];
    if(empty($ditlos)=="false" and empty($shm_metr)=="true")//exei titlo den exei shm_metr
    {
        
        $query = "SELECT * FROM texnika_stoixeia  WHERE dtitlos LIKE '%{$dtitlos}%'";
        $result = mysqli_query($connection, $query);
    }
      elseif(empty($ditlos)=="false" and empty($shm_metr)=="false")//exei kai ta duo
    {
         
        $query = "SELECT * FROM texnika_stoixeia  WHERE dtitlos LIKE '%{$dtitlos}%' AND shmeio_m='$shm_metr'";
        $result = mysqli_query($connection, $query);
    }
      else
    {
         
        $query = "SELECT * FROM texnika_stoixeia  WHERE shmeio_m='$shm_metr'";
        $result = mysqli_query($connection, $query);
    }
    echo '<div class="container">';
    echo '<table class="table table-bordered">';
    echo '<thead>
    <tr>
    <th>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</th>
    <th>ΣΥΧΝΟΤΗΤΑ</th>
    <th>ΠΕΡΙΦΕΡΙΑΚΗ ΕΝΟΤΗΤΑ</th>
    <th>ΗΜΕΡΟΜΗΝΙΑ ΜΕΤΡΗΣΗΣ</th>
    
    </tr>
    </thead>';
        while ($row = mysqli_fetch_assoc($result))
        {
        echo"<tr>";
        echo "<td>"  . $row['dtitlos']."</td>";
        echo "<td>". $row['suxnothta']."</td>";
        echo "<td>". $row['penothta']."</td>";
        echo "<td>". $row['hm_metr']."</td>";
   
        
        echo"</tr>";
       
        
        
        }
        
        echo '</table>';
        echo '</div>';
        }
        ?>
    <!------- telos shmeia metrhsewn php--->
    
     <!-------Αναζήτηση στοιχείων ιδιοκτησίας--->
<?php
include 'connect.php';

mysqli_set_charset($connection,"utf8");

if(isset($_POST[submit4]))
{
    $dtitlos = $_POST["dtitlos"];
    $penothta = $_POST["penothta"];
      if(empty($ditlos)=="false" and empty($penothta)=="true")//exei titlo den exei penothta
        {
            $query = "SELECT * FROM idiokthsia WHERE dtitlos LIKE '%{$dtitlos}%' ";
            $result = mysqli_query($connection , $query);
        }
      if(empty($ditlos)=="false" and empty($penothta)=="false")//exei kai ta duo
        {
            $query = "SELECT * FROM idiokthsia WHERE penothtas='$penothta' AND dtitlos LIKE '%{$dtitlos}%' ";
            $result = mysqli_query($connection , $query);
        }
        if(empty($ditlos)=="true" and empty($penothta)=="false")//exei mono penothta
        {
            $query = "SELECT * FROM idiokthsia WHERE penothta='$penothta' ";
            $result = mysqli_query($connection , $query);
        }
        else
        {
            $query = "SELECT * FROM idiokthsia  ";
            $result = mysqli_query($connection , $query);
        }
    echo '<div class="container">';
    echo '<table class="table table-bordered ">';
    echo '<thead >
    <tr style="">
    <th>ΟΝΟΜΑΤΕΠΩΝΥΜΟ ΝΟΜΙΚΟΥ ΥΠΕΥΘΥΝΟΥ</th>
    <th>ΕΠΩΝΥΜΙΑ ΕΤΑΙΡΙΑΣ</th>
    <th>ΔΙΕΥΘΥΝΣΗ</th>
    <th>ΤΗΛΕΦΩΝΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</th>
    <th>FAX</th>
    <th>ΔΙΑΚΡΙΤΙΚΟΣ ΤΙΤΛΟΣ</th>
    <th>ΠΕΡΙΦΕΡΙΑΚΗ ΕΝΟΤΗΤΑ</th>
    
    </tr>
    </thead>';
        while ($row = mysqli_fetch_assoc($result))
        {
        echo"<tr>";
        echo "<td>" .$row['nomikos_u']."</td>";
        echo "<td>". $row['epwnumia_e']."</td>";
        echo "<td>". $row['dieuthunsh']."</td>";
        echo "<td>". $row['thlefwno_e']."</td>";
        echo "<td>". $row['fax']."</td>";
        echo "<td>". $row['dtitlos']."</td>";
        echo "<td>". $row['penothta']."</td>";
   
        
        echo"</tr>";
       
        
        
        }
        
        echo '</table>';
        echo '</div>';
}
?>
     <!-------Τέλος αναζήτηση στοιχείων ιδιοκτησίας--->
<script >
    
$('a').click(function() {
    var href = $(this).attr('href');
    if(href =="#myModalupdate1" ){
    var data = $(this).attr('data-value');
    $("#update01").append(data);
    $("#test").attr("value", data);
   
    }
    else if(href =="#myModalupdate2")
    {
    var data = $(this).attr('data-value');
    $("#update02").append(data);
    $("#test2").attr("value", data);
    }

});

    
    
</script>