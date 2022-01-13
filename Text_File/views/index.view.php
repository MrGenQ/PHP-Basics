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
    <?php saveMessage($_POST)?>
    <?php endif;?>
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

</div>
</body>
</html>
