        <!--Contact Info Wrap Start-->
        <div class="iq_contact_info">
            <div class="container">
                <ul>
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <div class="iq_info_wrap">
                            <h5>Endereço: Angola, Uige</h5>
                            <p>Dunda, Próximo a Praça, Junto as Caritas</p>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <div class="iq_info_wrap">
                            <h5>Contacto</h5>
                            <span>+ (244) 947 986 411</span>
                            <span>+ (244) 925 685 555 120</span>
                        </div>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <div class="iq_info_wrap">
                            <h5>Email;</h5>
                            <a href="mailto:Info@info.com">gpaciencia68@gmail.com</a>
                            <a href="mailto:Support@support.com">Support@support.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--Contact Info Wrap End-->

        <footer class="iq_footer_bg">
            <div class="container">
                <div class="row">
                    <!-- Informações Sobre o Centro -->
                    <div class="col-md-3 col-sm-6">
                        <div class="iq_uni_title">
                            <!-- Título do Widget -->
                            <h4>Centro de Formação Profissional - <span>Santa Cruz</span></h4>
                            <!-- Fim do Título -->
                            <p>Estamos abertos de Segunda a Sábado</p>
                            <ul>
                                <li><span>Segunda - Sexta:</span> 06:00 - 17:00</li>
                                <li><span>Sábado:</span> 06:00 - 12:00</li>
                                <li><span>Domingo:</span> Fechado</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Fim das Informações -->

                    <!-- Serviços do Centro -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_archive">
                            <!-- Título do Widget -->
                            <h5 class="widget-title"><span>Nossos</span> Serviços</h5>
                            <!-- Fim do Título -->
                            <ul>
                                <li><a href="#">Cursos Profissionais</a></li>
                                <li><a href="#">Apoio ao Estudante</a></li>
                                <li><a href="#">Consultoria de Carreira</a></li>
                                <li><a href="#">Workshops</a></li>
                                <li><a href="#">Certificações</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Fim dos Serviços -->

                    <!-- Galeria de Imagens -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget-flickr">
                            <!-- Título do Widget -->
                            <h5 class="widget-title"><span>Nossa</span> Galeria</h5>
                            <!-- Fim do Título -->
                            <div class="flickr-wrap">
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr1.jpg') }}" alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr2.jpg') }}" alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr3.jpg') }}" alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr4.jpg') }}" alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr5.jpg') }}" alt=""></a>
                                <a class="flickrbadges" href="#"><img
                                        src="{{ asset('Template User/extra-images/flickr6.jpg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Fim da Galeria -->

                    <!-- Newsletter e Redes Sociais -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget iq_footer_newsletter">
                            <!-- Título do Widget -->
                            <h5 class="widget-title"><span>Inscreva-se na</span> Newsletter</h5>
                            <!-- Fim do Título -->
                            <p>Receba as últimas novidades e eventos diretamente no seu email.</p>
                            <form class="iq-input">
                                <input placeholder="Seu email" type="email">
                                <label class="iq-input-icon"><input type="submit" value="Enviar"></label>
                            </form>
                            <!-- Redes Sociais -->
                            <h5 class="widget-title border-none"><span>Conecte-se</span> Conosco</h5>
                            <ul class="iq_footer_social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Fim da Newsletter e Redes Sociais -->
                </div>
            </div>
        </footer>

        <!--Copy Right Start-->
        <div class="footer_strip">
            <h5>&copy; Copyright <span id="currentYear"></span> Todos os direitos reservados. By Geraldo Paciência.
            </h5>
        </div>

        <script>
            // Obtém a data atual
            const anoAtual = new Date().getFullYear();
            document.getElementById('currentYear').textContent = anoAtual;
        </script>
        <!--Copy Right End-->
