<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Students</title>
</head>
<body>
<div class="container">
    <h2>Contact form</h2>
    <?php if(isset($_POST['save'])):?>
    <?php validate($_POST);?>
    <?php if(empty($validationErrors)):?>
        <li class="alert alert-success">Issaugota</li>
    <?php saveMessage($_POST)?>
        <?php else:?>
        <ul>
        <?php foreach ($validationErrors as $error):?>
            <li class="alert alert-danger"><?=$error;?></li>
        <?php endforeach;?>
        </ul>
    <?php endif;?>
    <?php endif;?>
    <?php if($validationErrors || empty($_POST)):?>
    <form method="post" onsubmit="disabled">
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Įveskite vardą" name="name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Įveskite pavardę" name="lname">
        </div><div class="mb-3">
            <input type="email" class="form-control" placeholder="El.paštas" name="email">
        </div><div class="mb-3">
            <input type="color" class="form-control" placeholder="Akių spalva" name="color">
        </div>
        <div class="mb-3">
            <select class="form-control" name="departament">
                <option selected disabled>--Pasirinkite skyrių--</option>
                <?php foreach($departaments as $key=>$departament):?>
                <option value="<?=$key;?>"><?=$departament;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="mb-3">
            <textarea cols="30" rows="10" class="form-control" placeholder="Jūsų žinutė" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="save">Saugoti</button>
    </form>
    <?php endif;?>
    <section>
        <h3>Clients messages</h3>
        <table class="table table-bordered table striped">
            <tr>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>El. paštas</th>
                <th>Akių spalva</th>
                <th>Skyrius</th>
                <th>Žinutė</th>
            </tr>
            <?php foreach(getData() as $list):?>
            <tr>
            <tr>
                    <?php $list = explode(',', $list);?>
                    <?php foreach ($list as $item):?>
                    <?php if(!empty($item)):?>
                    <td><?=$item;?></td>
                    <?php endif;?>
                    <?php endforeach;?>
            </tr>
            <?php endforeach;?>
        </table>
    </section>

</div>
</body>
</html>
