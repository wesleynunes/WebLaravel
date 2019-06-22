<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Repeticões if</h1>
    @if ($value > 100)
        <p>Valor maior que 100</p>
    @else
        <p>Valor menor que 100</p>
    @endif

    <h1>for</h1>
    @for ($i = 0; $i < $value; $i++)
        {{$i}}
    @endfor

    <h1>while</h1>

    @php
      $i = 0;   
    @endphp

    @while ($i < $value)
        {{$i+1}}
        @php
            $i++;
        @endphp
    @endwhile

    <h1>Foreach</h1>

    @foreach ($myArray as $key => $value)
        <p> {{$loop->index}} {{$key}} - {{$value}}</p>
    @endforeach

    <h1>forelse</h1>
    @forelse ([] as $key => $value)
        <p> {{$loop->index}} {{$key}} - {{$value}}</p>
    @empty
        <p>Nenhum registro encontrado</p>
    @endforelse

</body>
</html>