<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hi Berlin, how's work!</h1>
    <!-- html寫法 -->
    <a href="{{ url('f1') }}">1樓</a><br>
    <a href="{{ url('f2') }}">2樓</a><br>
    <!-- laravel 寫法 -->
    <!--  -->
    {{-- <a href="{{ url('f3') }}">3樓</a><br> --}}
    <a href="{{ route('f3') }}">3樓</a><br>

    <a href="{{ route('berlin') }}">hello 4樓</a><br>

    @php
        echo '這裡可以寫原生的PHP';
        echo '<hr>';
        echo url('f1');
    @endphp

    <?php for($i=1; $i<10; $i++) : ?>
    <h2>show & test</h2>
    <?php endfor; ?>
</body>

</html>
