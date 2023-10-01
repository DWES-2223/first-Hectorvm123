<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taula amb files i columnes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
    require "functions.php";
    extract($_POST);
    ?>
    <form method="post">
        <div class="form-group row">
            <label for="nom" class="col-4 col-form-label">Cantidad euros</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="euros" name="euros" placeholder="Escriu la quantitat de euros" type="number" value="<?php echo isset($_POST['pesetes']) ? peseta2euro((int)$_POST['pesetes']) : ''; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-4 col-form-label">Cantidad pesetas</label>
            <div class="col-8">
                <div class="input-group">
                    <input id="pesetes" name="pesetes" placeholder="Escriu la quantitat de pesetes" type="text" value="<?php echo isset($_POST['euros']) ? euro2peseta((int)$_POST['euros']) : ''; ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>