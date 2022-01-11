<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Students</title>
</head>
<body>
    <div class="container">
            <table border="solid">
                <caption><h1>Students</h1></caption>
                <thead>
                    <tr>
                        <th>Klasė</th>
                        <th>Kodas</th>
                        <th>Vardas</th>
                        <th>Pavardė</th>
                        <th>Kontrolinių darbų vidurkis</th>
                        <th>Duomenų formavimo data</th>
                    </tr>
                </thead>
                <tbody>
                        <?php foreach($students as $id => $all):?>
                            <tr>
                                <th><?=$id?></th>
                                <?=str_repeat( '<th></th>', 5 )?>
                            </tr>
                            <?php foreach($all as $key => $student):?>
                            <tr>
                                <th></th>

                                <th><?=$key?></th>
                                    <?php foreach($student as $data => $basicData):?>
                                        <?php if(is_string($basicData)):?>
                                        <th><?=strtoupper($basicData)?></th>
                                        <?php endif;?>
                                        <?php if(is_array($basicData)):?>
                                                <th><?=round(array_sum($basicData)/count($basicData), 2)?></th>
                                        <?php endif;?>

                                    <?php endforeach;?>
                                    <th><?=date("Y-m-d")?></th>
                            </tr>
                                <?php endforeach;?>

                        <?php endforeach;?>
                </tbody>
            </table>


    </div>
</body>
</html>