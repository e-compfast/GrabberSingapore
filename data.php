<?php 

	$html = file_get_contents("");
	$xpath_doc = new DOMDocument(); // Disable warning errors on the website

	libxml_use_internal_errors(TRUE);
    if(!empty($html)){
    	$xpath_doc -> loadHTML($html);
    	libxml_clear_errors(); // Disable Clear Error occured in xml file
    }

 ?>