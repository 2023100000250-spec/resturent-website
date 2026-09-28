
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend Connection Test</title>
</head>
<body>
    <div style="max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px;">
        <h2>Database Test Form</h2>
        <form action="backend/contact.php" method="POST">
            <label>Name:</label><br>
            <input type="text" name="name" required style="width: 100%; padding: 8px; margin: 8px 0;"><br>
            
            <label>Email:</label><br>
            <input type="email" name="email" required style="width: 100%; padding: 8px; margin: 8px 0;"><br>
            
            <label>Message:</label><br>
            <textarea name="message" required style="width: 100%; padding: 8px; margin: 8px 0; height: 100px;"></textarea><br>
            
            <button type="submit" style="background: green; color: white; padding: 10px 15px; border: none; cursor: pointer; border-radius: 4px;">Test Send</button>
        </form>
    </div>
</body>
</html>
