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
        <h3>Add Post</h3>
            <form action="" method="POST" role="form">
                <div>
                    <label for="post_title">Title</label><br>
                    <input type="text" name="post_title" id="post_title" size="50" class="form-control">
                </div>
                <div>
                    <label for="post_content">Post Content</label><br>
                    <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="mt-3">
                    <input type="submit" name="create" value="Create"  class="btn btn-primary form-control">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>