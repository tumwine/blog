<?php 
    if (isset($_GET["counselling"])) {
       $file = ("assets/files/cou.pdf");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
    }

    if (isset($_GET["dreams"])) {
       $file = ("assets/files/dre.pdf");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
    }

    if (isset($_GET["mentoring"])) {
       $file = ("assets/files/men.pdf");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
    }

    if (isset($_GET["prayer"])) {
       $file = ("assets/files/pra.pdf");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);
    }
?>