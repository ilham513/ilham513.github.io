<?php
// Ambil XML
$file = "http://isetiabhakti.blogspot.com/atom.xml";
// Perse XML
$xml = simplexml_load_file($file) or die ("Unable to load XML file!");
// Ambil Href
$xml =  $xml ->entry->link[4]->attributes()->href;
// Echo
echo $xml;
