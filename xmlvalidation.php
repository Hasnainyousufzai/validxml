<?php 
$xml = new DOMDocument();
$xml -> load("./xml/index.xml");
if ($xml-> validate()){
    echo "valid xml";
}
else{
    echo"not valid";
}
?>