<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>

<body>

    <div>
        <form method="post">
            <h1>Informe quanto voccê ganha menos<h1>
                <select name=salario>
                        <option value="0" required="required">Selecione</option>
                        <option value="1" required="required" name="quantia">$1.045,00</option>
                        <option value="2" required="required" name="quantia">$2.089,60</option>
                        <option value="3" required="required" name="quantia">$3.134,40</option>
                        <option value="4" required="required" name="quantia">$6.191,06</option>
                    </select>
                    <p><input type="submit" value="Calcular"></p>
        </form>

            <?php   
                if(!empty($_POST)){
                    $salario=$_POST["salario"]; 
                    $quantia=0;
                    
                    
                    switch($salario){
                        case "1":
                            $subtracao= 1045 * 0.075;
                            $quantia= ($salario - $subtracao );
                            break;
                        
                        case "2":
                            $subtracao= 2089.60 * 0.09;
                            $quantia= ($salario - $subtracao );
                            break;
                        
                        case "3":
                            $subtracao= 3134.40 * 0.12;
                            $quantia= ($salario - $subtracao );
                            break;

                        case "4":
                            $subtracao= 6191.06 * 0.14;
                            $quantia= ($salario - $subtracao );
                            break; 
                            
                            
                    } } ?>
                    
        <div>
            <?php
                if(!empty($_POST)){
                    ?>
                    <p><?php echo "Salário final: ".$quantia;?></p>
                <?php } ?>
        </div>
              
                 

    </div>
</body>
</html>


