<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF</title>
</head>
  <body>

    @foreach ($solicitacao as $solicitacao)
      <h2>{{$solicitacao->nameroteiro}}</h2>
      <h2>{{$solicitacao->namefinalidade}}</h2>
      <h2>{{$solicitacao->datasaida}}</h2>
      <h2>{{$solicitacao->nameusuario}}</h2>
    @endforeach
  </body>
</html>
