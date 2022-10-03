<!-- just to create sign out from session that means if user move to onether page then return it not allow for him -->
<?php
session_start();

session_unset();
session_destroy();

?>