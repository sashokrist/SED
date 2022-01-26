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
            <header class="text-center">
                <h1>SED Result</h1>
            </header>
            <div class="card col-md-8">
                <div class="col-10">
                    <h3> Input:</h3><h4>{{ $input }}</h4>
                    <h3> Pattern:</h3><h4>{{ $pattern }}</h4>
                    <h3> Replace:</h3><h4>{{ $replace }}</h4>
                    <textarea onfocus="copy()" id="copy" class="form-control" cols="30" rows="10">{{ $output }}</textarea>
                    <a href="{{ route('/') }}" class="btn btn-primary">Back to SED</a>
                </div>
            </div>

        </div>
</div>
<script type="text/javascript">
    function copy()
    {
        var copyTextarea = document.getElementById("copy");
        copyTextarea.select(); //select the text area
        document.execCommand("copy"); //copy to clipboard
    }
</script>
</body>
</html>
