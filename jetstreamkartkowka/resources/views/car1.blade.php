<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CarController" method="get">
        <input type="text" name="marka" placeholder="Podaj marke" autofocus value="{{old('marka')}}">
        @error('marka')
            {{$message}}
        @enderror
        <br><br>
        <input type="number" name="pojemnosc" placeholder="Podaj pojemnosc" value="{{old('pojemnosc')}}">
        @error('pojemnosc')
            {{$message}}
        @enderror
        <br><br>
        <input type="text" name="email" placeholder="podaj emial" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
        <input type=submit value="Zatwierdz dane">
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
@endif
    </form>
</body>
</html>