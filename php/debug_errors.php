// turn on error reporting, for debugging
function debug_errors($turn_on = 1) {
  // enable error reporting for debugging (remove once done)
  ini_set('display_errors', $turn_on);
  ini_set('display_startup_errors', $turn_on);

  if ($turn_on == 1)
    error_reporting(E_WARNING); // warnings and errors
  else
    error_reporting(E_ERROR); // warnings and errors
}
