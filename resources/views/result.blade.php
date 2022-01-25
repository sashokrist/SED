<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SED</title></head>
<style>
    h4{
        color: red;
        font-weight: bold;
    }
</style>
<body>
<div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <div class="col-6">
                    <h3> Input:</h3><h4>{{ $input }}</h4>
                    <h3> Pattern:</h3><h4>{{ $pattern }}</h4>
                    <h3> Replace:</h3><h4>{{ $replace }}</h4>
                    <h3> Output: </h3><h4>{{ $output }}</h4>
                </div>
            </div>
            <a href="{{ route('/') }}" class="btn btn-primary">Back to SED</a>
        </div>
</div>
</body>
</html>
