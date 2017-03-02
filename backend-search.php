<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "findfriends");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$query = mysqli_real_escape_string($link, $_REQUEST['query']);
 
if(isset($query)){
    // Attempt select query execution
    $sql = "SELECT * FROM users WHERE first_name LIKE '" . $query . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<div class='container-fluid'>
                        <div class='cal-12 col-md-3 push-md-9'>
                   <span>
                    <img src='asset/profile-img/boy-512.png' class='post-image-profile' alt='profile-img' >  
                    </div>
                    <div class='cal-12 col-md-9 push-md-3'> 
                    <p> <strong>" . $row['first_name'] . "</strong></p>
                    
                    </span>
                    </div>
                    </div>";
            }
            // Close result set
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found for <b>$query</b></p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// close connection
mysqli_close($link);
?>