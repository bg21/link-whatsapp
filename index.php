<?php
define("WHATSAPP", 'http://localhost/whatsapp/');
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo WHATSAPP; ?>public/css/style.min.css">

    <meta name="keywords" content="gerar link whatsapp, gerador de links whatsapp, link whatsapp, gerar whatsapp" />

    <meta name="robots" content="index,follow">
    <meta name="description" content="Gerador de Links do WhatsApp. Preencha os campos abaixo e obtenha seu link personalizado para compartilhar seu WhatsApp.">

    <meta property="og:title" content="Gerador de Links Whatsapp" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Gerador de Links do WhatsApp. Preencha os campos abaixo e obtenha seu link personalizado para compartilhar seu WhatsApp." />
    <meta property="og:site_name" content="Youthumbnails" />

    <meta property="og:url" content="" />

    <title>Gerador de Links Whatsapp</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo WHATSAPP; ?>public/imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo WHATSAPP; ?>public/imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo WHATSAPP; ?>public/imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo WHATSAPP; ?>public/imgs/favicon/site.webmanifest">

    


</head>

<body>


    <div class="flex">


        <div class="w50">
            <nav>
                <a title="Gerador de Links Whatsapp" title="Gerador de Links Whatsapp" class="nav" href="<?php echo WHATSAPP; ?>">Gerador de Links Whatsapp</a>
            </nav>
            <h1>Gerador de Links para Whatsapp <i class="fa-brands fa-whatsapp"></i></h1>


            <form method="post">


                <input maxlength="15" class="form-control" type="text" name="telefone" id="input" placeholder="Número de Celular">
                <textarea class="form-control" placeholder="Mensagem (opcional)" name="mensagem" id="textarea"></textarea>
                <p>Não guardamos nenhum dado informado!</p>

                <input type="submit" value="Gerar Link" class="btn btn-success" name="acao">


            </form>

            <div id="msg"></div>

            <div class="box">
                <h4>Sobre a Ferramenta</h4>
                <nav>
                    <ul>
                        <li>1 - Insira o nº do WhatsApp Ex: 85 9 9660-5866</li>
                        <li>2 - Escreva a mensagem padrão que será exibida</li>
                        <li>3 - Clique em <b>"
                                GERAR LINK
                                "</b></li>
                        <li>4 - Copie o link e compartilhe
                        </li>
                        <li>5 - Antes de usar, faça o teste
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="afiliado">
            <h2><b>
                    Economize mais de
                    R$ 10.000 em todos os
                    cursos atuais e futuros!
                </b></h2>

            <p>
                O plano vitalício foi pensado em você que quer aprender e não quer investir mais nem R$1,00 em outro curso ou plano.
            </p>

            <a alt="Plano Vitalício" title="Plano Vitalício" class="plano" href="https://hotm.art/plano-vitalicio">COMPRAR COM R$800 OFF</a>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        /* Máscaras ER */
        function mascara(o, f) {
            v_obj = o
            v_fun = f
            setTimeout("execmascara()", 1)
        }

        function execmascara() {
            v_obj.value = v_fun(v_obj.value)
        }

        function mtel(v) {
            v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
            v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
            v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
            return v;
        }

        function id(el) {
            return document.getElementById(el);
        }
        window.onload = function() {
            id('input').onkeyup = function() {
                mascara(this, mtel);
            }
        }
    </script>

    <script>
        let form = document.querySelector("form");
        form.addEventListener("submit", function(e) {
            e.preventDefault();
            let tel = document.querySelector("#input").value;
            let msg = document.querySelector("#msg");
            if (tel == "") {
                msg.innerHTML = "<error>Informe o número!</error>";
            } else if (msg != '' && tel != '') {
                form.style.display = 'none';
                let removido = tel.normalize('NFD').replace(/([\u0300-\u036f]|[^0-9a-zA-Z])/g, '');
                msg.innerHTML = "<success><b>Pronto!</b> Copie e compartilhe com usuários do Whatsapp!</success>";

                msg.innerHTML += "<success><b>Link!</b> https://web.whatsapp.com/send?phone=" + removido + "</success>";

                msg.innerHTML += '<a class="mais" href="">Novo Link!</a>';
            } else {
                form.style.display = 'none';
                let removido = tel.normalize('NFD').replace(/([\u0300-\u036f]|[^0-9a-zA-Z])/g, '');
                msg.innerHTML = "<success><b>Pronto!</b> Copie e compartilhe com usuários do Whatsapp!</success>";

                msg.innerHTML += "<success><b>Link!</b> https://web.whatsapp.com/send?phone=" + removido + "</success>";

                msg.innerHTML += '<a class="mais" href="">Novo Link!</a>';
            }
        });
    </script>
</body>

</html>