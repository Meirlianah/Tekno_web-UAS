<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
    @livewireScripts
</head>

<body>
    <a href="/product">Product</a>
    <a href="/cart">POS</a>
    <br>
    @livewire('product')
</body>

</html>