<?php
require_once 'TeachingResource.php';


$php1 = new TeachingResource('Descubriendo PHP', Subject::PHP, 'www.descubriendophp.com', Resource::WebArticle);
$html1 = new TeachingResource('La magia de HTML', Subject::HTML, 'www.htmlmagico.com', Resource::File);
echo $php1;
echo "<br>";
echo $html1;