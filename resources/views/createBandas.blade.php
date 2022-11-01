<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
        <div class="row mt-12">

            <form method="post" action="">

                    @csrf

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome da Banda">
                  </div>

                  <div class="mb-3">
                    <label for="Estilo" class="form-label">Estilo</label>
                    <input type="text" class="form-control" id="estilo" name="estilo" placeholder="Digite o estilo da Banda">
                  </div>

                  <div class="mb-3">
                    <label for="Ano" class="form-label">Ano</label>
                    <input type="text" class="form-control" id="ano_criacao" name="ano_criacao" placeholder="Digite o ano da Banda">
                  </div>

                  <div class="mb-3">
                    <label for="Ano" class="form-label">Total de Discos</label>
                    <input type="text" class="form-control" id="total_de_discos" name="total_de_discos" placeholder="Digite o total de discos da Banda">
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-success"> Cadastrar </button>
                  </div>
                </form>


        </div>
    </div>



</body>
</html>