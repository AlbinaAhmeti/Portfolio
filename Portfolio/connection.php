<?php
global $dbcon;
connection();
function connection(){
    //DB CONN
    global $dbcon;
    $dbcon=mysqli_connect("localhost","root","","portofolio");
   
    if(!$dbcon){
        die("GABIM" . mysqli_error($dbcon));
    }
}
function projects(){
    global $dbcon;
    $sql="SELECT * FROM projects  ORDER BY  id DESC";
    $projects=mysqli_query($dbcon,$sql);
    return $projects;        
}