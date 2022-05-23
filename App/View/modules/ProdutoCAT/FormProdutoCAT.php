<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria de Produto</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Categoria de Produto</legend>

        <form method="post" action="/produtoCat/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id"/>
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text"/>
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>