<!DOCTYPE html>
<html lang="pt-br">
<head>
    
     <?php include('meta_tags.php'); ?>
        
</head>
<body>

<?php include('header.php'); ?>

<section class="title_internas produtos_servicos">    
    <div class="container">
        <h1>O QUE OFERECEMOS</h1>
    </div><!--container-->
</section><!-- title_internas -->

<section class="content_prod">

    <section class="content_1">
        <div class="container">

            <div class="display">
                <h2>Modelo em <br>Tecnologia</h2>

                <span></span>

                <p>Todos os serviços prestados pela Tecnomoldes Ferramentaria são<br>
                    realizados por profissionais qualificados e rigorosamente supervisionados para<br>
                    que os melhores resultados sejam atingidos.</p>
            </div>
    
        </div><!--container-->
    </section><!--content_1-->

    <section class="content_2">
        <h2>Conheça nossas atividades</h2>    

        <div class="container">

            <div class="item">
                <div class="ico">
                    <img src="assets/img/produtos_servicos/ico1.png" alt="">
                </div><!--ico-->
                
                Projetos em CAD e CAM para moldes, estampos e dispositivos;
            </div><!--item-->

            <div class="item">
                <div class="ico">
                    <img src="assets/img/produtos_servicos/ico2.png" alt="">
                </div><!--ico-->
                
                Moldes para sopro pet e convencional;
            </div><!--item-->

            <div class="item">
                <div class="ico">
                    <img src="assets/img/produtos_servicos/ico3.png" alt="">  
                </div><!--ico-->
                
                Execução de peças: machos, cavidades e outros pelo sistema CAD/CAM;
            </div><!--item-->

            <div class="item">
                <div class="ico">
                    <img src="assets/img/produtos_servicos/ico4.png" alt="">  
                </div><!--ico-->
                
                Moldes de termoformagem para embalagens frigoríficas.
            </div><!--item-->

        </div><!--display-->
    </section><!--content_2-->

    <section class="content_3">
        <div class="container">

            <h3>Somos referência no desenvolvimento <br>
            e fabricação de moldes e componentes para indústrias</h3>

            <div class="display">
                <div>PROFISSIONAIS<br> QUALIFICADOS /<br> EXPERIENTES</div>
                <div>PRAZOS <br>CONFIÁVEIS</div>
                <div>ALTA<br> QUALIDADE</div>
                <div>TECNOLOGIA<br> DE PONTA</div>
                <div>CUSTO-<br>BENEFÍCIO</div>
                <div>ASSISTÊNCIA<br> TÉCNICA</div>
            </div><!--display-->

        </div><!--container-->
    </section><!--content_3-->

    <section class="content_4">
        <h1>VEJA AS OPÇÕES<br> PARA O SEU NEGÓCIO</h1>
    </section><!--content_4-->
    
    <section class="content_5">
        <div class="container accordion">

                <div class="block accordion__item">                    
                    <div class="accordion__title">
                        <h3>Produtos</h3>
                        <p>Clique para expandir</p>
                    </div>

                    <div class="accordion__content">
                        <div class="lista">
                        
                            <div class="item">
                                <img src="assets/img/thumb_produto.jpg" alt="Thumb Produto">

                                <h4>Título Produto</h4>
                                <h5>Descrição breve></h5>
                            </div><!--item-->

                            <div class="item">
                            <img src="assets/img/thumb_produto.jpg" alt="Thumb Produto">

                                <h4>Título Produto</h4>
                                <h5>Descrição breve></h5>
                            </div><!--item-->

                            <div class="item">
                            <img src="assets/img/thumb_produto.jpg" alt="Thumb Produto">

                                <h4>Título Produto</h4>
                                <h5>Descrição breve></h5>
                            </div><!--item-->

                        </div><!--lista-->
                    </div><!--accordion__content-->

                    <div class="seta">
                        <span></span>
                    </div>
                </div><!--block-->

        </div><!--container-->
    </section><!--content_5-->

    <section class="orcamento">
        <div class="container">
                
            <div class="display">
                <div class="img">
                    <div>
                        ENTRE EM <BR>
                        CONTATO PARA <BR>
                        <span>SOLICITAR SEU ORÇAMENTO</span>
                    </div>
                </div><!--img-->

                <div class="form inputs">
                    
                    <form id="orcamento" name="orcamento" action="" method="POST" data-reset="true">

                        <input type="hidden" id="g-recaptcha-response-orcamento" name="g-recaptcha-response"/><br>
                   
                        <div class="inputs-content">
                            <div class="margin" style="width:48%;">
                                <input type="text" name="nome" placeholder="Nome" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:48%;">
                                <input type="text" name="empresa" placeholder="Empresa" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:48%;">
                                <input type="text" name="cnpj" class="mask-cnpj" placeholder="CNPJ" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:48%;">
                                <input type="text" name="telefone" class="mask-tel" placeholder="Telefone" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:48%;">
                                <input type="text" name="email" placeholder="E-mail" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:48%;">
                                <input type="text" name="ramo" placeholder="Ramo de atividade" style="width: 100%;" required="">
                            </div><!--margin-->

                            <div class="margin" style="width:100%">
                                <textarea name="info_add" style="width: 100%; height:130px;" placeholder="Como podemos lhe ajudar?" required=""></textarea>
                            </div><!--margin-->

                            <div class="btn">
                                <input type="submit" name="Button" value="Enviar">
                            </div><!--btn-->
                            
                        </div><!--inputs-content-->
                    </form>
                </div><!--form inputs-->

            </div><!--display-->

        </div><!--container-->
    </section><!--orcamento-->

    <section class="assistencia">

        <div class="title">
            <div class="container">
                
                <h3>PRECISANDO DE<br> ASSISTÊNCIA TÉCNICA?</h3>
                <h4>Entre em contato que iremos lhe atender </h4>

            </div><!--container-->
        </div><!--title-->
        
        <div id="form-hidden" class="out_form container" style="display:none;">
     
            <div class="form inputs">

                <form id="assistencia" name="assistencia" action="" method="POST" data-reset="true">

                    <input type="hidden" id="g-recaptcha-response-assistencia" name="g-recaptcha-response"/><br>
                    
                    <div class="inputs-content">
                        <div class="margin" style="width:48%;">
                            <input type="text" name="nome" placeholder="Nome" style="width: 100%;" required="">
                        </div><!--margin-->
                        
                        <div class="margin" style="width:48%;">
                            <input type="text" name="email" placeholder="E-mail" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="maquina" placeholder="Máquina" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="numero_de_cavidades" placeholder="Número de Cavidades" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="volume_do_produto" placeholder="Volume do produto" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:48%;">
                            <input type="text" name="tipo_do_molde" placeholder="Tipo do molde" style="width: 100%;" required="">
                        </div><!--margin-->

                        <div class="margin" style="width:100%;">
                            <div class="relative button-anexar inputs-content">
                                <div class="out-file">
                                    Anexar, extensões permitidas: .jpg, .png, .gif, .pdf, .doc, .docx.

                                    <input 
                                        class="input-form file" 
                                        type="file" 
                                        placeholder="" 
                                        name="file" 
                                        accept=".jpg, .png, .gif, .pdf, .doc, .docx, image/jpeg, image/png, application/pdf, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                </div><!--out-file-->

                                <div class="file-input inputs-content">
                                    <span></span>
                                </div><!--file-input-->
                            </div>
                        </div><!--margin-->

                        <div class="margin" style="width:100%">
                            <textarea name="info_add" style="width: 100%; height:130px;" placeholder="Fale mais do problema enfrentado" required=""></textarea>
                        </div><!--margin-->

                        <div class="btn">
                            <input type="submit" name="Button" value="Enviar">
                        </div><!--btn-->
                    </div><!--inputs-content-->
                </form>
            </div><!--form inputs-->

        </div><!--out_form-->
        
        <a id="open-form" class="opened">
            <div>
                <span>clique aqui para abrir o formulario</span>
            </div>
        </a>
        
    </section><!--assistencia-->
</section><!--content_prod-->



<?php include('footer.php'); ?>


    <script>
        $('#open-form').on('click', function() {
            $(this).toggleClass('opened');

            if ($(this).hasClass("opened")) {
                $('#form-hidden').slideUp(400);
                $(this).find("span").text("clique aqui para abrir o formulario");
            } else {
                $('#form-hidden').slideDown(400);
                $(this).find("span").text("clique aqui para fechar o formulario");
            }
        });
    </script>

    <script>
        $(document).ready(function () {
            var form_input = $("form input:file");

            $(form_input).change(function () { /*quando value troca valor*/
                var input = $(this);
                var caminho = $(input).val(); /*recupera valor do value*/
                if (caminho == 0) {
                    $(input).parents('form').find('.file-input>span').html("Anexo");/*troca valor do span para default*/
                } else {
                    var arquivo = caminho.replace('C:', '').replace('fake', '').replace('path', '').replace('\\\\', '');/*filtro */
                    $(input).parents('form').find('.file-input>span').html(arquivo);/*troca valor do span*/
                }

            });

        });
    </script>

    <!--ACCORDION-->
    <script>
        $(function() {
            $('.accordion').find('.accordion__title').click(function(){
                $(this).toggleClass('active');
                $(this.parentNode).toggleClass('teste');
                $(this).next().slideToggle('fast');
                $('.accordion__content').not($(this).next()).slideUp('fast');
                $('.accordion__title').not($(this)).removeClass('active');      
            });
        });
    </script>



    