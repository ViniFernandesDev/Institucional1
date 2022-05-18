<!DOCTYPE html>
<html lang="pt-br">
<head>
    
     <?php include('meta_tags.php'); ?>
        
</head>
<body>

<?php include('header.php'); ?>

<section class="banner">
	<img src="assets/img/banner.jpg" alt="Banner">
</section><!-- banner -->

<section class="content_index">
    <div class="content_1">
        <div class="container">
            <div class="txt">
                <h1>Título</h1>    
                <h2>Subtitle</h2>
                

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>

                <a href="/sobre_nos" class="btn_type1">Conheça nossa história.</a>
            </div><!--txt-->

            <div class="img">
                <img src="assets/img/corte2.png" alt="Corte">
            </div><!--img-->
        </div><!--container-->
    </div><!--content_1-->

    <div class="content_2">
        <div class="container">
            <div class="img">
                <img src="assets/img/molde_litro.png" alt="Molde">
            </div><!--img-->    
        
            <div class="txt">
                <h2>TEXTO TESTE<br> PARA SUA EMPRESA</h2>
                <p>Nossos produtos são fabricados visando a qualidade<br>
                 final das peças, com acabamentos detalhados,<br>
                  tamanhos diversificados e encaixe exato.</p>

                <a href="/produtos_servicos" class="btn_type2">Veja as opções para o seu negócio.</a>
            </div><!--txt-->
        </div><!--container-->
    </div><!--content_2-->
</section><!--content_index-->

<section class="help_index">
    <div class="container">

        <div class="txt">
            <h2>Precisa de<br> Ajuda?</h2>

            <p>Supervisionamos rigorosamente os<br>
             nossos produtos para que os melhores<br>
              resultados sejam atingidos. </p>

            <h3>Em caso de dúvidas, entre em contato com <br>
            a central de atendimento através do telefone</h3>

            <h2>49 3522.2222</h2>
        </div>

        <div class="form inputs">
            <h4>Ou solicite uma chamada</h4>

            <form id="ajuda" name="ajuda" action="" method="POST" data-reset="true">

                <input type="hidden" id="g-recaptcha-response-ajuda" name="g-recaptcha-response"/><br>
                
                <div class="inputs-content">
                    <div class="margin" style="width:48%;">
                        <input type="text" name="nome" placeholder="Nome" style="width: 100%;" required="">
                    </div><!--margin-->

                    <div class="margin" style="width:48%;">
                        <input type="text" name="email" placeholder="E-mail" style="width: 100%;" required="">
                    </div><!--margin-->

                    <div class="margin" style="width:48%;">
                        <input type="text" name="telefone" class="mask-tel" placeholder="Telefone" style="width: 100%;" required="">
                    </div><!--margin-->

                    <div class="margin" style="width:48%;">
                        <input type="text" name="empresa" placeholder="Empresa" style="width: 100%;" required="">
                    </div><!--margin-->

                    <div class="margin" style="width:100%">
                        <textarea name="info_add" style="width: 100%; height:130px;" placeholder="Informações adicionais" required=""></textarea>
                    </div><!--margin-->

                    <div class="btn">
                        <input type="submit" name="Button" value="Enviar">
                    </div><!--btn-->

                </div><!--inputs-content-->
            </form>
        </div><!--form inputs-->

    </div><!--container-->
</section><!--help_index-->

<?php include('footer.php'); ?>
