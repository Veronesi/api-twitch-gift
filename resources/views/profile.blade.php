<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaityBait</title>
    <style>
        * {
            font-family: Inter, Roobert, "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 0;
            margin: 0;
        }

        tr > * {
          text-align: center;
          width: 50%;
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 100vh; width: 100vw;">
  <h3 style="display: flex; justify-content: center; align-items: center;"><img style="width: 2em; height: 2em" src="{{ $user->avatar }}">{{ $user->name }}</h3>
  <img src="public/vMp3Ghxg_400x400.png" style="margin-bottom: 1em;height: 10em; width: 10em;" />
  <h1 style="margin-bottom: 1em;">Bienvenido guapetón</h1>
  @if ($keys->isEmpty())
    <h4 style="text-align: center; margin-bottom: 1em;">Enorabuena has ganado un total de <span style="font-size: 70px">0</span> claves 😉</h4>
@else
  <table style="width: 100%; margin-bottom: 1em;">
    <tr>
        <th>Key</th>
        <th>Nueva</th>
    </tr>
    @foreach ($keys as $key)
    <tr>
        <td>{{ $key->key }}</td>
        <td>{{ $key->claimed ? 'No' : 'Si' }}</td>
    </tr>
    @endforeach
</table>
@endif
<form action="{{ route('logout') }}" method="POST">
  @csrf
  <button style="background-color: #9047ff; color: #fff; text-decoration: none; padding: .5em 2em; border-radius: .3em; border: none;" type="submit">Logout</button>
</form>
</body>
</html>
