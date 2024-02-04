<?php
    $cep = $_GET["input2"];
    $url = "https://viacep.com.br/ws/{$cep}/json/";

    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <main>
        <section id="mostra" class="infopretty">
            <?php 
            if($cep == ''){
                echo 'digite um cep válido';
            }else{
                $adress= json_decode(file_get_contents($url));
                $localidade = ($adress->localidade);
                $bairro = ($adress->bairro);
                $logradouro = ($adress->logradouro);
                $uf = ($adress->uf);

                echo "<p>", $_GET["input3"],", confira abaixo o endereço :</p>";
                echo "<div class='informa'>
                    <li><b>Cidade:</b> ".$localidade."</li>
                    <li><b>Bairro:</b> ".$bairro."</li>
                    <li><b>Logradouro:</b> ".$logradouro."</li>
                    <li><b>Estado:</b> ".$uf."</li>
                    </div>";
                
                    
                
                date_default_timezone_set('America/Sao_Paulo');
                echo $hoje = date('d/m/Y');
            }      
            ?>
        </section>
        <div id="empresa">Corporativo da NilMar enterprise</div>
    </main>
    <footer></footer>
</body>
</html>