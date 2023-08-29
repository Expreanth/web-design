<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/style.css">

  <title>Document</title>
</head>

<body>
  <div class="formulario-bg">
    <div class="formulario">
      <form action="dados.php" method="POST">
        <div id="emailHelp" class="form-text c0">
          <div class="mb-3 c1">
            <label for="Nome1" class="form-label" id="x">Nome</label>
            <input name="Nome1" type="Nome" class="form-control" id="Nome1" aria-describedby="NomeHelp">
          </div>
          <div class="mb-3 c1">
            <label for="Email1" class="form-label">Email</label>
            <input name="Email1" type="email" class="form-control c1" id="Email1" aria-describedby="emailHelp" >
          </div>
          <div class="mb-3 c2">
            <label for="Number1" class="form-label c2">Telefone</label>
            <input name="Number1" type="tel" class="form-control" id="Number1">
          </div>
          <div class="mb-3 c1">
            <label for="Assunto1" class="form-label">Assunto</label>
            <input name="Assunto1" type="Assunto" class="form-control" id="Assunto1" aria-describedby="AssuntoHelp">
          </div>
          <div class="mb-3 c1">
            <label for="Menssagem1" class="form-label">Menssagem</label>
            <input name="Menssagem1" type="Menssagem" class="form-control" id="Menssagem1" aria-describedby="MenssagemHelp">
          </div>
        </div>
        <button type="submit" class="btm c2">Submit</button>
    </div>
    </form>
</body>

</html>