<?php
session_start();
session_unset();
session_destroy();
echo "session has been logged out successfully";
echo "<a href=set_session>Click here to set session</a>";
?>