<?php
// prints the html from the target url
echo(htmlentities(file_get_contents($_POST['target_url'])));
?>