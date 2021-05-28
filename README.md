# PHP-PDO-htmlspecialchars
Must assign htmlspecialchars to each value of fetch and fetchall

Include hcs.php 

Set Attribute in php
$PDO->setAttribute(PDO::ATTR_STATEMENT_CLASS, ['PDO_htmlspecialchars']);
