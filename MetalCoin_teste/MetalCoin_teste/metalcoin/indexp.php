<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Cadastro de Pessoas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Cadastro de Pessoas</h1>
            <br>
            <form action="" method="post" id="formulario">
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Nome: </label>
                        <input type="text" name="name_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Digite seu CPF: </label>
                        <input type="text" name="qtd_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Informe seu Email: </label>
                        <input type="text" name="valor_prod" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <label for="">Diga sua Raça: </label>
                        <input type="text" name="cat_prod" id="" class="form-control">
                    </div>
                </div>
                <br>
                <div class="form-group offset-md-3">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-success" value="CADASTRAR PESSOA">
                        <a href="tabelaP.php" type="button" class="btn btn-primary float-end">Tabela Pessoas</a>
                    </div>
                </div>
            </form>
            <div id="resultado"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
        <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

        <script>
            $('formulario').submit(function()){
                event.preventDefault();
                var dados = $(this).serialize();
                $.ajax({
                    type:'POST',
                    url:'CRUD/cad_prod.php'
                    data: dados,
                    success: (data){
                        $("resultado").html(data);
                    }
                });
            }
        </script>
    </body>
</html>