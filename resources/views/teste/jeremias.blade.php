<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremias Blade Template</title>
</head>
<body>
    <h1>Welcome to Jeremias Blade Template</h1>
    <p>This is a sample Blade template for testing purposes.</p>
    <?php
        echo "Hello, World!";
    ?> 
    <?php foreach(range(1, 10) as $number): ?>
        <p><li><?php echo $number; ?></li></p>
        <?php endforeach; ?>

        @foreach(range(1, 10) as $number)
        <p><li>{{ $number }}</li></p>
        @endforeach
        
        @Auth
        <p>User is authenticated</p>
        @else
        <p>User is not authenticated</p>
        @endauth

</body>
</html>