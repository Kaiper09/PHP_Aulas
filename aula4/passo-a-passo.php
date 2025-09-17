<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4</title>
</head>

<body>
    <div>
        <form name="meu_form" method="post">
            <h1>CADASTRO</h1>
            <p><input type="text" placeholder="Nome" required="required" name="nome"/></p>
            <p>
                <select name="serie">
                    <option value="0">Série</option>
                    <?php for($s=1; $s<=9; $s++){ ?>
                        <option value="<?php echo $s;?>"><?php echo $s;?></option>
                    <?php } ?>
                </select>
            </p>
            <p><input type="submit" value="Enviar"></p>
            
        </form>
        
        <div>
            <?php
                if(!empty($_POST)){
                    @$nome=$_POST["nome"];
                    @$serie=$_POST["serie"];  ?>
                    <p><?php echo "Aluno: ".$nome;?></p>
                    <p><?php echo "Série: ".$serie;?></p>

                <?php } ?>

        </div>

    </div>
</body>
</html>