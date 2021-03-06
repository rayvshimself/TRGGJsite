<?php
    $status = 0; // default is loading the main page

    if (isset($_GET["a"]))
    {
        $id = $_GET["a"];
        if (file_exists("html/$id.html"))
          $status = 1; // load article file
        else{
            $status = -1; // article not found
        }
    }

    // Choose Title and selected Nav Item
    $title = "GGJ Trier";
    $selectedMenuItem = "welcome";
    if ($status == 1){
      switch($id){
        case "past": $selectedMenuItem = "past"; $title = "GGJ Trier - Past GGJ"; break;
        case "infos": $selectedMenuItem = "infos"; $title = "GGJ Trier - Practical information"; break;
        case "dir": $selectedMenuItem = "dir"; $title = "GGJ Trier - Directions"; break;
        case "code-of-conduct": $selectedMenuItem = "code-of-conduct"; $title = "GGJ Trier - Code of Conduct"; break;
      }
    } else if ($status != 0) {
      // in case of error
      $selectedMenuItem = -1;
      $title = "GGJ Trier - 404 Error";
    }
    // Build HTML
    include "html/header.php";
    switch ($status) {
    case 0: // default
        include "html/index_main.html";
        break;
    case 1: // load article
        include "html/$id.html";
        break;
    default:
        echo "The page was not found 404";
        break;
    }
    include "html/footer.html";
    ?>
