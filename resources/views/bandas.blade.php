<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
        <div class="div">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Estolo</th>
                <th scope="col">Ano</th>
                <th scope="Total de Discos">Ano</th>

                </tr>
            </thead>
                <tbody>
                    @foreach($bandas as $bandas)
                        
                        <tr>
                        <th scope="row">{{$bandas->id}}</th>
                        <td>{{$bandas->nome}}</td>
                        <td>{{$bandas->estilo}}</td>
                        <td>{{$bandas->ano_de_criacao}}</td>
                        <td>{{$bandas->total_de_discos}}</td>
                        </tr>

                    @endforeach
                   
                  
                    </tr>
                </tbody>

            </table>


        </div>
</body>
</html>