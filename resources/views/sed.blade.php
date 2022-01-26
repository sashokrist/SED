<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row justify-content-center">
            <header class="text-center">
               <h1>SED</h1>
            </header>
            <div class="col-6">
                <form action="{{ route('load-data') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <h4>Upload text file</h4>
                        <input type="file" id="inputfile" class="form-control" name="input">
                        <span style="color: red; font-weight: bold">*txt</span>
                        <br>
                        <h4>Or type/paste your text</h4>
                        <textarea id="output" name="input2" class="form-control" cols="30" rows="10" placeholder="Your text here..."></textarea>
                    </div>
                    <div class="mb-3">
                        <h4>Word to be replaced: </h4>
                        <input type="text" class="form-control" name="pattern">
                    </div>
                    <div class="mb-3">
                        <h4>To be replaced with: </h4>
                        <input type="text" class="form-control" name="replace">
                    </div>
                    <button type="submit" class="btn btn-primary">Replace</button>
                </form>
            </div>
        </div>
</div>
<script type="text/javascript">
    document.getElementById('inputfile')
        .addEventListener('change', function() {
            var fr=new FileReader();
            fr.onload=function(){
                document.getElementById('output')
                    .textContent=fr.result;
            }
            fr.readAsText(this.files[0]);
        })
</script>
</body>
</html>
