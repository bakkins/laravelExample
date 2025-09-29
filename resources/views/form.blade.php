<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Forma</title>
</head>
<body>
    <h1>Ievades forma</h1>
    <form action="/submit" method="POST">
        @csrf <!-- Laravel drošības tokens -->
        
        <label>Vārds:</label>
        <input type="text" name="name"><br><br>

        <label>E-pasts:</label>
        <input type="email" name="email"><br><br>

        <button type="submit">Nosūtīt</button>
    </form>
</body>
</html>
