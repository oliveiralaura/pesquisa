
<?php 
                    if(isset($_GET['input'])){
                        $nome = addslashes($_GET["input"]);
                    }

                    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<body>
    <main>
        <section id='informação' class='infopretty'>
                <form action="pesquisa3.php" class="forma" id="formula">
                    <?php 
                    if(isset($_GET['input'])){
                        $nome = addslashes($_GET["input"]);
                        echo "<h1> Olá ".$nome.", digite seu CEP:</h1>";
                    
                    ?>
                    <input type='text' method='get' id='input2' name='input2'>
                    <?php 
                        echo "<input type='hidden' name='input3' id='input3' value='$nome'>";
                    ?>
                    
                    <div class="vaivolta">
                <button class="botao"><span class="material-symbols-outlined" >arrow_back</span>Voltar</button>
                <button class="botao" type="button" onclick="enviarForm()">Continuar<span class="material-symbols-outlined">arrow_forward</span></button>
            </div>
                    <?php 
                        }
                        else{
                            header('Location: pesquisa.php');
                        }
                    ?>
                </form>
        </section>
        
        <div id="empresa">Corporativo da NilMar enterprise</div>
    </main>
    <footer></footer>
    <script>
        function clicar(){
            document
        }
            function enviarForm() {
                Swal.fire({
                    title: "Aguarde",
                    text: "Estamos consultando seu endereço:",
                    timer: 3000,
                    icon: "info"
                });

                document.getElementById("formula").submit();
            }
        </script>
</body>
</html>


        
       

            
