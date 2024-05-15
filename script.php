<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <section class="principal-resposta">
  <div class="resultado">
        <?php 
            $favcolor = $_POST["favcolor"];
            switch ($favcolor) {
                case "vermelho":
                    echo "<p>Sua cor favorita é Vermelho!</p>";
                    break;
                case "azul":
                    echo "</p>Sua cor favorita é Azul!</p>";
                    break;
                case "verde":
                    echo "</p>Sua cor favorita é Verde!</p>";
                    break;
                default:
                    echo "<p>Sua cor favorita não é vermelho, azul e nem verde</p>";
             }   
        
        ?>

        <a href="index.html" id="voltar">Retornar</a>
    </div>
  </section>

</body>
</html>