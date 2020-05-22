<?php
function setComments($db){
   
    $message = "";
    include "db_connect.php";

if( isset($_POST['submit_data']) ){
   // Includs database connection

   // Gets the data from post
   $Namn = $_POST['Namn'];
   $Email = $_POST['Email'];
   $Inlägg = $_POST['Inlägg'];

   // Makes query with post data
   $query = "INSERT INTO Användare (Namn, Email, Inlägg) VALUES ('$Namn', '$Email', '$Inlägg')";

   // Executes the query
   // If data inserted then set success message otherwise set error message
   if( $db->exec($query) ){
       $message = "Data inserted successfully.";}
       else{
       $message = "Sorry, Data is not inserted.";
   }
  

}
}

function getComments($db){
$sql = "SELECT * FROM Användare";
$result = $db->query($sql);
while($row = $result-> fetchArray(SQLITE3_ASSOC)){
    echo "<div class='comment-box'>";
    echo $row['Namn']."<br>";
    echo $row['Inlägg']."<br><br>";
    echo "</div>";

}


}



