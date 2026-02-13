<?php
// Retrieve the server name
$serverName = $_SERVER['SERVER_NAME'];

// Retrieve the client/browser IP address
// We use a fallback check in case the server is behind a proxy
$clientIP = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) 
            ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
            : $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server & Client Info</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .container { border: 1px solid #ddd; padding: 20px; border-radius: 8px; max-width: 400px; }
        b { color: #333; }
    </style>
</head>
<body>

    <div class="container">
        <h3>Connection Details</h3>
        <p><b>Server Name:</b> <?php echo htmlspecialchars($serverName); ?></p>
        <p><b>Client IP Address:</b> <?php echo htmlspecialchars($clientIP); ?></p>
    </div>

</body>
</html>
