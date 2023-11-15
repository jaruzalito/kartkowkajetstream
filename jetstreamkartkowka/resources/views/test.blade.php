<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- <form method="get" action="">
        <input type="text" name="marka" value="{{old('marka')}}">
        @error('marka')
            {{$message}}
        @enderror<br><br>
        <input type="number" name="pojemność" value="{{old('pojemność')}}"> @error('pojemność'){{$message}}@enderror<br><br>
        <input type="email" name="email"  value="{{old('email')}}"> @error('email'){{$message}}@enderror<br><br>
        <input type="submit" value="wyślij"></input>
    </form>
    <ul>
        @foreach($errors->all() as $error)
            <li>$error</li>
        @endforeach
</ul> -->
<!-- @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
@endif
    <form action="" method="get">
        <input type="text" name="marka" placeholder="Podaj marke" autofocus value="{{old('marka')}}">
        @error('marka')
            {{$message}}
        @enderror
        <br><br>
        <input type="text" name="pojemnosc" placeholder="Podaj pojemnosc" value="{{old('pojemnosc')}}">
        @error('pojemnosc')
            {{$message}}
        @enderror
        <br><br>
        <input type="text" name="email" placeholder="podaj emial" value="{{old('email')}}">
        @error('email')
            {{$message}}
        @enderror
        <input type=submit value="Zatwierdz dane">
    </form>
</body> -->
<!--</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Twoj samochod jest marki {{$marka}},<br> ma pojemnosc {{$pojemnosc}}litra,<br> a twoj email to {{$email}}
</body>
</html>