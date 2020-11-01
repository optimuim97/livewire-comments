<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LiveWire</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    @livewireStyles
</head>
<body>
    {{-- @livewire('counter') --}}

    <div class="container">
        <div class='flex justify-center' style="margin-top: 20px;">
            <h1>Coments</h1>
            <div class='form-group'>
                <div class="d-flex justify-content-start">
                    <input type="text" class="form-control" name="" id="">
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
            <br>

            <div>
                <div>
                    <h4>Sidik <small>3 min ago</small></h4>
                </div>
            </div>

            <div class='form-group'>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto animi magni, voluptatibus, excepturi molestiae magnam temporibus eius voluptas quam, voluptates culpa quae inventore aut exercitationem quis harum autem iure. Dicta?
                </p>
            </div>
        </div>
    </div>



    @livewireScripts
</body>
</html>
