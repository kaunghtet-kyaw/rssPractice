<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>
            <form class="" method="post" action="<?php echo site_url('students/create') ?>" role="form">
                <div class="row">
                    <div class="form-group">
                        <label for="name">Your <span>Name</span></label>
                        <input id="name" type="text" name="student[name]" value="<?php echo set_value('name'); ?>" size="50" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="age">Your <span>Age</span></label>
                        <input id="age" type="number" name="student[age]" value="<?php echo set_value('age'); ?>" size="50" class="form-control" />

                    </div>
                    <div class="form-group">
                        <label for="address">Your <span>Address</span></label>
                        <input id="address" type="text" name="student[address]" value="<?php echo set_value('address'); ?>" size="50" class="form-control" />
                    </div>
                </div>
                <div class="row  mt-3">
                    <input type="submit" class="btn btn-primary form-control" value="Send" name="register">	
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>