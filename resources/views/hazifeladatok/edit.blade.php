<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('hazifeladatok.update', $hazi->id) }}">
        @method("PATCH")
        @csrf
        <div>
            <span>
                URL:
            </span>
            <input type="url" name="url" value="{{$hazi->url}}">
        </div>
        <div>
            <span>
                Értékelés:
            </span>
            <input type="text" name="ertekeles" value="{{$hazi->ertekeles}}">
        </div>
        <div>
            <span>
                Pontszám:
            </span>
            <input type="number" name="pontszam" value="{{$hazi->pontszam}}">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
