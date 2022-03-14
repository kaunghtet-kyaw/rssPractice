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
            <form method="post" action="<?php echo site_url('students/update')?>/<?php echo $row->id; ?>" role="form">
                <div class="row">
                    <div class="form-group">
                        <label for="name">Your <span>Name</span></label>
                        <input id="name" type="text" name="student[name]" class="form-control" value="<?php echo $row->name; echo set_value('name');?>" aria-describedby="emailHelp" placeholder="Enter Your Name">

                    </div>
                    <div class="form-group">
                        <label for="age">Your <span>Age</span></label>
                        <input id="age" type="text" name="student[age]" class="form-control" value="<?php echo $row->age; ?>" aria-describedby="emailHelp" placeholder="Enter Your Age">
                    </div>
                    <div class="form-group">
                        <label for="address">Your <span>Address</span></label>
                        <input id="address" type="text" name="student[address]" class="form-control" value="<?php echo $row->address; ?>" aria-describedby="emailHelp" placeholder="Enter Your Address">
                    </div>
                </div>
                <div class="row  mt-3">
					<div class="col-6">
						<div class="form-group">
                            <button type="submit" class="btn btn-danger form-control" value="save" name="EditStudent">Submit</button>
						</div>
					</div>
                    <div class="col-6">
                        <a href="<?php echo site_url('students')?><button type="button" class="btn btn-danger form-control">Cancel</button></a>
                    </div>
				</div>
                
            </form>
        </div>
    </div>
</body>
</html>