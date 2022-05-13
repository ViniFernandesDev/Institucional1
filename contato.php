<!DOCTYPE html>
<html lang="pt-br">
<head>
    
     <?php include('meta_tags.php'); ?>
        
</head>
<body>

<?php include('header.php'); ?>

<section class="title_internas contato">    
    <div class="container">
        <h1>FALE CONOSCO</h1>
    </div><!--container-->
</section><!-- title_internas -->

<section class="content_contato">
    <div class="container">
        
        <div class="formulario">
            <h2>Entre em contato conosco <br>através dos formulários abaixo</h2>

            <h4>Para dúvidas, sugestões</h4>

            <div class="form inputs">

                <form id="" name="" action="" method="POST" data-reset="true">
                    <br>
                    <div class="inputs-content">
                        <div class="margin" style="width:78%;">
                            <input type="text" name="nome" placeholder="Nome" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:18%;">
                            <select 
                                class="ajax-uf" 
                                name="uf" 
                                style="width: 100%;"
                            >
                                <option value="">UF</option>
						        
					        </select>
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="cidade" placeholder="Cidade" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="telefone" class="mask-tel" placeholder="Telefone" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="email" placeholder="E-mail" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="assunto" placeholder="Assunto" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:100%">
                            <textarea name="info_add" style="width: 100%; height:130px;" placeholder="Deixe sua mensagem para nós" required=""></textarea>
                        </div><!--margin-->

                        <div class="btn">
                            <input type="submit" name="Button" value="Enviar">
                        </div><!--btn-->

                    </div><!--inputs-content-->
                </form>
            </div><!--form inputs-->
        </div><!--formulario-->

        <div class="info">
            <h4>Ou diretamente<br> pelos nossos canais</h4>

            <div>
                <h5>Endereço</h5>

                <p>Rua João 214, Bairro Voando<br>
                Joaçaba – SC | 89600-000<br>
                CNPJ: 00.000.111/1111-12<br>
                <a href="mailto:empresa@empresa.com">empresa@empresa.com</a></p>
            </div>

            <div>
                <h5>Telefone ou fax</h5>

                <h6>49 3522.2222</h6>
                <h6>49 3521.1111</h6>
            </div>

            <div>
                <h5>Ou pelas redes sociais</h5>

                <span>
                    <a href="https://api.whatsapp.com/send?phone=554999999999999" target="_blank" class="ico ico_whats">49 99999 9999</a>
                </span>
                <span>
                    <a href="https://www.instagram.com/" target="_blank" class="ico ico_insta">@facebook</a>
                </span>
                <span>
                    <a href="https://www.facebook.com" target="_blank" class="ico ico_face">@instagram</a>
                </span>
            </div>
        </div><!--info-->

    </div><!--container-->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28395.27694172504!2d-51.5325462288665!3d-27.17485978450121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e3faab3e246e29%3A0x76930ccaad948e2a!2zSm9hw6dhYmEsIFND!5e0!3m2!1spt-BR!2sbr!4v1652459650251!5m2!1spt-BR!2sbr" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section><!--content_contato-->

<?php include('footer.php'); ?>
