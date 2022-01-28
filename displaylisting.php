<?php
$q=$_GET['id'];
if($q!=NULL) {
    $db_host='mysql';
    $db_user='root';
    $db_pass='root';
    $db_name='laravel';

    if (getenv('IDP_ENVIRONMENT') === 'docker') {
        $db_host = 'mysql';
        $db_name = 'laravel';
        $db_user = 'docker_u';
        $db_pass = 'docker_p';
    }    
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$sql="SELECT * FROM listings WHERE id =".$q;
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);

print "    
        <img id='displayImg' src=\"".$row['img']."\">
        <div id='data'>
            <h3>
                ".$row['name']."
            </h3>
            <br /> 
            <p>
                ".$row['price']."
            </p>
            <a href='#' class='button'>READ MORE</a>
        </div>
        ";
}
?>