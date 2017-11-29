<?php
    $status = 0;

    // if (!isset($_GET["a"]))
    // {
    //     echo "Name is not set. ";
    //     $status = 2;
    // }
    // else{
    //     $id = $_GET["a"];
    //     if (file_exists("html/$id.html"))
    //         include "html/$id.html";
    //     else{
    //         echo "The article $id doesn't exist.";
    //         $status = 1;
    //     }
    // }
    //
    // if ($status == 1) echo "Error 404: Invalid Link!";

    $title = "GGJ Trier - Main Page";
    include "html/header.php";
    include "html/index_main.html";
    include "html/footer.html";
    ?>
