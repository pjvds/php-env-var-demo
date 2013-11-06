<?php
echo("Hello!\n");
echo("Here are the defails of the MySQL service:\n";
echo("\thost:\t" . $_ENV["WERCKER_MYSQL_HOST"]);
echo("\tdb:\t" . $_ENV["WERCKER_MYSQL_DATABASE"]);
echo("\tuser:\t" . $_ENV["WERCKER_MYSQL_USERNAME"]);
?>
