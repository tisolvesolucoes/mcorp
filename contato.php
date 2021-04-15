<?php
include 'estrutura/header.php';
?>
<style>

 a{color: #fff;}


#link {color: #000;}
#link a:hover, #link a:visited{color: #000;}

</style>
	<section id="content">

	<div class="container">
		<div class="row">

            <div class="col-md-12">
                <!--1 linha -->
                <!--box principal -->
                <div class="col-md-12" class="box_principal">
                    <div class="contact-info-wrapper clearfix">
                    <h2 style="color:#1b365d; font-size:30px; font-weight: bold;">Contatos <small>deixe sua mensagem</small></h2>
                    <hr>
                        <div class="col-md-4">
                            <div class="contact-item-wrapper">
                                <div class="icon">
                                    <i class="ico-call"></i>
                                </div>
                                <h4>Fone/Fax:</h4>
                                <p> +55-11-3849-8992</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item-wrapper bl">
                                <div class="icon">
                                    <i class="ico-location_on"></i>
                                </div>
                                <h4>Endereço:</h4>
                                <p>ESCRITÓRIO:<br>Rua Arminda, 93 - 3º andar - CEP: 04545 100 - Vila Olímpia - São Paulo/SP - Brasil</p>
                                <p>MATRIZ/CENTRO DE DISTRIBUIÇÃO:<br> Av. Fagundes de Oliveira, 538 - Galpão A5 - CEP 09950-300 - Piraporinha Diadema/SP</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-item-wrapper">
                                <div class="icon">
                                    <i class="ico-email"></i>
                                </div>
                                <h4>EMAIL</h4>
                                <p><a id="link" href="mailto:imedcorpnet@medcorpnet.com.br">medcorpnet@medcorpnet.com.br</a></p>
                            </div>
                        </div>
                    </div><!-- Contact Info End -->
                    <form class="shake" data-toggle="validator" id="contactForm344" name="contactForm" method="post" role="form" action="enviando.php">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" data-error="Por favor Informe seu nome" id="name" placeholder="Seu nome" type="text" name="nome">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" data-error="Por favor Informe seu email" id="email" placeholder="Email" required="" type="email"  name="email">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" data-error="Por favor Informe o assunto da mensagem" id="msg_subject" placeholder="Assunto" required="" type="text"  name="assunto">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" data-error="Escreva sua mensagem" id="message" placeholder=
                                "Escreva sua mensagem" required="" rows="5"  name="msg">
                            </textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-enviar" id="submit" value="Enviar">
                        <div class="h3 text-center hidden" id="msgSubmit">
                        </div>
                        <div class="clearfix"></div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3055471573784!2d-46.67601538493667!3d-23.59337248466695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5756e5f84973%3A0x969056dbbfbd15e8!2sR.+Arminda%2C+93+-+Vila+Nova+Concei%C3%A7%C3%A3o%2C+S%C3%A3o+Paulo+-+SP%2C+04545-100!5e0!3m2!1spt-BR!2sbr!4v1509122689993" style="border:0; width:100%; height:500px;margin-top:50px;"  allowfullscreen></iframe>


                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>






		</div>
	</div>
	</section>

<?php include 'estrutura/footer.php' ?>