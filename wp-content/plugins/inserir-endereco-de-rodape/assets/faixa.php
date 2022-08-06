<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rodapé - FAIXA CEP</title>
  <link rel="stylesheet" href="../css/rodape.css">
</head>
<body>
  <style>
    .body {
      font-family: monospace;
    }
    .faixa {
      background: #b85300;
      display: flex;
      color: blanchedalmond;
      width: 100%;
      padding: 0vw 0vw 3vw 0vw;
      color: #FFF;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-end;
      flex-direction: row;
      list-style-type: none;
    }
    .h2 {
      font-size: 28px;
      text-align: center;
      margin: 2vw -6vw 2vw 2vw;
      color: white;
    }
  </style>
  <div class="faixa">
    <h2 class="h2">Rodapé Com Endereço</h2>
    <div class="faixa">
      <li><strong>Rua:</strong> {{logradouro}} </li>
      <li><strong>Bairro:</strong> {{bairro}} </li>
      <li><strong>Cidade:</strong> {{cidade}}</li>
      <li><strong>Estado: </strong>{{uf}} </li>
    </div>
  </div>
</body>
</html>