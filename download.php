<?php

//new variable createing by $file   $_GET =super global variable

$file = $_GET['file'] .".pdf" ; //concanitate to get pdf file by using .pdf

//to download

header("content-disposition: attachment; filename=" .urlencode($file));

//download  gareyci viw garna laini

$fb = fopen($file, "r");

//to read using loop cuz theres are lots of lines and pages
//feof= file end of file

while(!feof($fb))
{
    //to check and read
    //open wala file lai read garnu xa so $fb

echo fread($fb, 8192 /*bytes*/);

//to deal with big files and improve readability use fflush

flush();

}

fclose($fb);


?>