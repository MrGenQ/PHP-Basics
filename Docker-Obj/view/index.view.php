<?php
    use Machines\Motorcycle;
    use Machines\Machine;
    use Machines\Bike;
    use Machines\Car;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User demo</title>
</head>
<body>
<?php
    $motorcycle = new Motorcycle('Ya', 'yamaha', 3500, 850, 'Trash bike');
    $motorcycle -> addPower(110);
    $motorcycle -> addMaxSpeed(180);
    $car = new Car('model', 'brand', 7500, 1900, 'Great car');
    $car -> addPower(210);
    $car -> addMaxSpeed(240);
    $car -> addCapacity(5);
    $bike = new Bike('Namu', 'Kaimo', 180, 45, 'great bike');
    $bike -> addMaxSpeed(33)
    ?>
    <ul>
        <?php foreach ($car -> getUserData() as $vehicle):?>
            <li><?=$vehicle;?></li>
        <?php endforeach;?>
    </ul>
<ul>
    <?php foreach ($motorcycle -> getUserData() as $vehicle):?>
        <li><?=$vehicle;?></li>
    <?php endforeach;?>
</ul>
<ul>
    <?php foreach ($bike -> getUserData() as $vehicle):?>
        <li><?=$vehicle;?></li>
    <?php endforeach;?>
</ul>
</body>
</html>