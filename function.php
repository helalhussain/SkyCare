<?php

// function for post category name 
function getCategory($db,$id){

    $query = "SELECT * FROM blog_category WHERE id = $id";
    $run = mysqli_query($db,$query);
    $data = mysqli_fetch_assoc($run);
    return $data['name'];

}





?>