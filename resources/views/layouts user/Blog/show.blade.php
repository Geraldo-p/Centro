@extends('layouts user.admin')
@section('titulo', 'Blog - Detalhes')
@section('conteudo')

<div class="iner_banner">
    <div class="container">
        <h5>Blog - Detalhes</h5>
        <div class="banner_iner_capstion">
            <ul>
                <li><a href="#">ínicio</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Blog - Detalhes</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="iq_content_wrap">
    <section>
        <div class="blog1_detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog_detail_page">
                            <figure>
                                <img src="{{ asset('Template user/extra-images/blog-detail.jpg') }}" alt="">
                            </figure>
                            <div class="iq_heading_1 text-left">
                                <h4>ASP.NET with <span>C #</span></h4>
                            </div>
                            <ul class="blog_detail_navi">
                                <li>
                                    <a href="#">September 21, 2015</a>
                                </li>
                                <li>
                                    <a href="#">In Destination, Education</a>
                                </li>
                                <li>
                                    <a href="#">By Admin</a>
                                </li>
                            </ul>
                            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.  </p>
                            <p class="blog_margin">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc.</p>
                            <div class="blog_quotes">
                                <ul>
                                    <li><span>January 09, 2015</span><small>In Quotes</small></li>
                                </ul>
                                <p>“ Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.” </p>
                                <span>-Jonathan Doe</span>
                            </div>
                            <div class="blog_quotes_prgh">
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae er auctor eu in elit. Class aptent taci ti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae eraodio. Sed non mauris vitae eraodio. Sed non mauris vitae erat .</p>
                            </div>
                            <p>Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat .</p>
                        </div>
                        <div class="tags_wrap">
                            <ul class="iq-tags">
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Champions</a></li>
                            </ul>
                            <ul class="iq_footer_social">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>
                        <div class="blog_commenting">
                            <div class="detail_searh_heading commenting">
                                <div class="iq_heading_1 text-left">
                                    <h4>Comment : <span>4</span></h4>
                                </div>
                            </div>
                            <ul class="blog_commenting_area">
                                <li>
                                    <div class="comment-thumb">
                                        <figure>
                                             <img src="{{ asset('Template user/extra-images/comment-thumb.jpg') }}" alt="">
                                        </figure>
                                        <div class="comment_caption">
                                            <div class="comment_caption-2">
                                                <span>
                                                    <strong>
                                                        Albrta Doe Wrote :
                                                    </strong>
                                                    <small>September 11, 2015</small>
                                                </span>
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                            <div class="comment-reply-2">
                                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-thumb">
                                        <figure>
                                             <img src="{{ asset('Template user/extra-images/comment-thumb.jpg') }}" alt="">
                                        </figure>
                                        <div class="comment_caption">
                                            <div class="comment_caption-2">
                                                <span>
                                                    <strong>
                                                        Albrta Doe Wrote :
                                                    </strong>
                                                    <small>September 11, 2015</small>
                                                </span>
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                            <div class="comment-reply-2">
                                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="comment-thumb">
                                                <figure>
                                                     <img src="{{ asset('Template user/extra-images/comment-thumb.jpg') }}" alt="">
                                                </figure>
                                                <div class="comment_caption">
                                                    <div class="comment_caption-2">
                                                        <span>
                                                            <strong>
                                                                Albrta Doe Wrote :
                                                            </strong>
                                                            <small>September 11, 2015</small>
                                                        </span>
                                                        <a class="comment-reply" href="#">Reply</a>
                                                    </div>
                                                    <div class="comment-reply-2">
                                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-thumb">
                                        <figure>
                                             <img src="{{ asset('Template user/extra-images/comment-thumb.jpg') }}" alt="">
                                        </figure>
                                        <div class="comment_caption">
                                            <div class="comment_caption-2">
                                                <span>
                                                    <strong>
                                                        Albrta Doe Wrote :
                                                    </strong>
                                                    <small>September 11, 2015</small>
                                                </span>
                                                <a class="comment-reply" href="#">Reply</a>
                                            </div>
                                            <div class="comment-reply-2">
                                                <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!--comment-thumb end-->
                            </ul>
                        </div>
                        <div class="blog_detail_searh">
                            <div class="detail_searh_heading">
                                <div class="iq_heading_1 text-left">
                                    <h4>Leave A <span>Comment</span></h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="iq-input">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="iq-input">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <input class="iq_link_1" type="submit" value="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="aside-bar">
                            <div class="widget widget-pesquisar">
                                <form class="iq-input">
                                    <input placeholder="Pesquisar ..." type="text">
                                    <label class="iq-input-icon"><input type="submit"></label>
                                </form>
                            </div>
                            <!--course_inrp_side_search end-->
                            <!--coures_archives start-->
                            <div class="widget widget_archive">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Nossos</span> Cursos</h5>
                                <!--Widget Title End-->
                                <ul>
                                    <li>
                                        <a href="#">Politics & History</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Journalism</a><span>01</span>
                                    </li>
                                    <li>
                                        <a href="#">Medical Sciences</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Health</a><span>01</span>
                                    </li>
                                    <li>
                                        <a href="#">Sports</a><span>03</span>
                                    </li>
                                    <li>
                                        <a href="#">Atrs</a><span>02</span>
                                    </li>
                                    <li>
                                        <a href="#">Tourism & Culture</a><span>06</span>
                                    </li>
                                </ul>
                            </div>
                            <!--coures_archives end-->
                            <!--POPULAR START-->
                            <div class="widget widget-popular">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>cursos</span> populares</h5>
                                <!--Widget Title End-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb1.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem  dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb2.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem  dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb3.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Neque porro quisquam est qui dolorem  dolor</a></h6>
                                        <p>19 Dec, 2015</p>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                            </div>
                            <!--POPULAR END-->
                            <!--COURES CATEGORIES START-->
                            <div class="widget widget_time">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>Horas de</span> Trabalho</h5>
                                <!--Widget Title End-->
                                <ul>
                                    <li>
                                        <span>Segunda-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Terça-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Quarta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Quinta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Sexta-feira</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Sábado</span>08:00 - 16:00
                                    </li>
                                    <li>
                                        <span>Domingo</span>Closed
                                    </li>
                                </ul>
                            </div>
                            <!--COURES CATEGORIES END-->
                            <!--POPULAR START-->
                            <div class="widget widget-popular">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>cursos</span> populares</h5>
                                <!--Widget Title End-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb5.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                        <!--COURES RATING AREA END-->
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb2.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                        <!--COURES RATING AREA END-->
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                                <!--POPULAR THUMB START-->
                                <div class="popular_thumb">
                                    <figure>
                                        <img src="{{ asset('Template user/extra-images/popular-thumb3.jpg') }}" alt=""/>
                                    </figure>
                                    <!--COURES POPULAR CAPSTION START-->
                                    <div class="overflow-text">
                                        <h6><a href="#">Professional Teching Course</a></h6>
                                        <!--RATING AREA START-->
                                        <div class="rating-wrap">
                                            <div class="rating_down">
                                                <div class="rating_up" style="width:100%;"></div>
                                            </div>
                                        </div>
                                        <!--RATING AREA End-->
                                        <p>Anna Doe</p>
                                        <span>$99.99</span>
                                    </div>
                                    <!--COURES POPULAR CAPSTION END-->
                                </div>
                                <!--POPULAR THUMB END-->
                            </div>
                            <!--POPULAR END-->
                            <!--POPULAR START-->
                            <div class="widget widget-tag">
                                <!--Widget Title Start-->
                                <h5 class="widget-title"><span>tags</span></h5>
                                <!--Widget Title End-->
                                <div class="tag">
                                    <a class="tag-link" href="#">Science</a>
                                    <a class="tag-link" href="#">knowledge</a>
                                    <a class="tag-link" href="#">Courage</a>
                                    <a class="tag-link" href="#">Sports</a>
                                    <a class="tag-link" href="#">Impression</a>
                                    <a class="tag-link" href="#">History & Politics</a>
                                    <a class="tag-link" href="#">Admission</a>
                                    <a class="tag-link" href="#">Arts</a>
                                    <a class="tag-link" href="#">Research</a>
                                    <a class="tag-link" href="#">Career</a>
                                    <a class="tag-link" href="#">PHD</a>
                                </div>
                            </div>
                            <!--POPULAR END-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BLOG1 PAGE END-->
    </section>
</div>

@endsection
