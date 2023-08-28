<!DOCTYPE html>
<html lang="fa">
<head>
    <title>Laravel Livewire CRUD - ItSolutionStuff.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel Livewire CRUD - saeedghsmi.ir</h2>
                </div>
               {{$slot}}
            </div>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
