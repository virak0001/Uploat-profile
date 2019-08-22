<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload_Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card-header">
                    <h2 class="text-center">Upload_Profile</h2>
                </div>
                <div class="card p-3">
                    <form action="proccess.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control input-lg" name="username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                        <div class="form-group">
                            <label for="file">Profile Picture:</label>
                            <input type="file" name="file">
                        </div>
                        <input class="btn btn-success float-right" type="submit" name="submit" value="submit">
                    </form>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>