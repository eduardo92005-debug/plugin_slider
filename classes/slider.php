
<link rel="stylesheet" href="<?php echo SLIDER_URL . 'classes/css/style-slider-final.css' ?>" />

<div class="containerCreciSergipe">
    <!-- INICIO SLIDER -->
    <div class="container__slider">
        <div class="slider_news">
            <div class="grid-container">
                <div class="wrapper-slider slider">
                    <a href="#" class="slider carousel">
                        <div class="carousel-item h-100 w-100 active">
                            <img class="slider__img" src="<?php echo SLIDER_URL . 'classes/imagens/placeholder.png'?>" onerror="this.src='<?php echo SLIDER_URL . 'classes/imagens/placeholder.png'?>';this.onerror='';" width="100%" height="100%">
                            <div class="slider__description h-25  h-responsive-40 w-100 d-flex flex-column justify-content-center">
                                <h3 class="text-warning font-weight-bolder slider__description__title"> Titulo 1 </h3>
                                <p class="text-white slider__description__resume h6">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptatem,
                                </p>
                            </div>
                        </div>

                    </a>
                </div>

                <div class="next-slides h-100">
                    <div class="next-slides__above">
                        <a href="#" class="text-decoration-none animate__animated next-slides__description-1 next-slides__description-item bg-brand-1 py-2">
                            <div class="font-weight-bolder text-white next-slides__description__title">
                                <span class="text-warning title__text"><i class="fa-solid fa-newspaper"></i> Titulo 2</span>
                            </div>
                            <div class="next-slides__description__date text-white">
                                <i class="text-white fa-regular fa-calendar-days"></i>
                                <span>
                                    22/09/1998
                                </span>
                            </div>
                        </a>

                        <a href="#" class="text-decoration-none next-slides__description-2 next-slides__description-item bg-brand-2 py-2">
                            <div class="font-weight-bolder text-white next-slides__description__title">
                                <span class="text-warning title__text"><i class="fa-solid fa-newspaper"></i> Titulo 3</span>
                            </div>
                            <div class="next-slides__description__date text-white">
                                <i class="text-white fa-regular fa-calendar-days"></i>
                                <span>
                                    22/09/1998
                                </span>
                            </div>
                        </a>

                        <a href="#" class="text-decoration-none next-slides__description-3 next-slides__description-item bg-brand-3 py-2">
                            <div class="font-weight-bolder text-white next-slides__description__title">
                                <span class="text-warning title__text"><i class="fa-solid fa-newspaper"></i> Titulo 4</span>
                            </div>
                            <div class="next-slides__description__date text-white">
                                <i class="text-white fa-regular fa-calendar-days"></i>
                                <span>
                                    22/09/1998
                                </span>
                            </div>
                        </a>

                    </div>

                    <a href="#" class="text-decoration-none next-slides__last next-slides__description-4 next-slides__description-item bg-brand-4 py-2">
                        <div class="font-weight-bolder next-slides__description__title">
                            <span class="text-warning title__text"><i class="fa-solid fa-newspaper text-white"></i> Titulo 5</span>
                        </div>

                        <div class="next-slides__description__date text-white">
                            <i class="text-white fa-regular fa-calendar-days"></i>
                            <span>
                                22/09/1998
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="news_all_mobile justify-content-center py-2">
            <!-- Botão LER TODAS NOTICIAS -->
            <div class="d-flex w-100 justify-content-center grid-MaisNotSlider">
                <form class="d-flex w-100 justify-content-center" action="#">
                    <button class="w-100 position-relative botton-0 btn btn-primary btn-lg" style="--bs-btn-font-size: 1rem;"> Clique aqui para ler todas notícias do CRECI</button>
                </form>
            </div>
        </div>
        <div class="button_area">
            <div class="servicos_tex ms-2">
                <center><b>Botões de Acesso Rápido</b></center>
            </div>
            <?php
            $loop = new WP_Query(array('post_type' => 'botoes-acesso-news', 'posts_per_page' => 999));
            $contaPostNews = 1;
            while ($loop->have_posts()) : $loop->the_post();
                $icone_id_news = get_post_meta($post->ID, 'icone_do_botao_de_acesso_rapido_news', true);
                $nova_pag_news = get_post_meta($post->ID, 'abrir_em_nova_pagina_news', true);
                if ($nova_pag_news == 'sim') {
                    $tag_blank_news = 'target="_blank" rel="noreferrer noopener"';
                } else {
                    $tag_blank_news = '';
                }
                if ($contaPostNews === 1) {
            ?>
                    <div class="botaoN_1">
                        <center>
                            <a href="<?php the_field('link_de_acesso_rapido_news'); ?>" <?= $tag_blank_news ?> class="text-decoration-none">
                                <button type="button" class="btn ms-2 btn-outline-secondary botao-item">
                                    <i class="<?php the_field('icone_do_botao_de_acesso_rapido_news') ?>"> <?php echo $nova_pag_news ?></i>
                                    <span> <?php the_field('titulo_de_acesso_rapido_news'); ?></span>
                                </button>
                            </a>
                        </center>
                    </div>
                <?php
                }
                if ($contaPostNews === 2) {
                ?>
                    <div class="botaoN_2">
                        <center>
                            <a href="<?php the_field('link_de_acesso_rapido_news'); ?>" <?= $tag_blank_news ?>>
                                <button type="button" class="btn ms-2 btn-outline-secondary botao-item">
                                    <i class="<?php the_field('icone_do_botao_de_acesso_rapido_news') ?>"></i>
                                    <span> <?php the_field('titulo_de_acesso_rapido_news'); ?></span>
                                </button>
                            </a>
                        </center>
                    </div>
                <?php
                }
                if ($contaPostNews === 3) {
                ?>
                    <div class="botaoN_3">
                        <center>
                            <a href="<?php the_field('link_de_acesso_rapido_news'); ?>" <?= $tag_blank_news ?>>
                                <button type="button" class="btn ms-2 btn-outline-secondary botao-item">
                                    <i class="<?php the_field('icone_do_botao_de_acesso_rapido_news') ?>"></i>
                                    <span> <?php the_field('titulo_de_acesso_rapido_news'); ?></span>
                                </button>
                            </a>
                        </center>
                    </div>
                <?php
                }
                if ($contaPostNews === 4) {
                ?>
                    <div class="botaoN_4">
                        <center>
                            <a href="<?php the_field('link_de_acesso_rapido_news'); ?>" <?= $tag_blank_news ?>>
                                <button type="button" class="btn ms-2 btn-outline-secondary botao-item">
                                    <i class="<?php the_field('icone_do_botao_de_acesso_rapido_news') ?>"></i>
                                    <span> <?php the_field('titulo_de_acesso_rapido_news'); ?></span>
                                </button>
                            </a>
                        </center>
                    </div>
                <?php
                }
                if ($contaPostNews === 5) {
                ?>
                    <div class="botaoN_5">
                        <center>
                            <a href="<?php the_field('link_de_acesso_rapido_news'); ?>" <?= $tag_blank_news ?>>
                                <button type="button" class="btn ms-2 btn-outline-secondary botao-item">
                                    <i class="<?php the_field('icone_do_botao_de_acesso_rapido_news') ?>"></i>
                                    <span> <?php the_field('titulo_de_acesso_rapido_news'); ?></span>
                                </button>
                            </a>
                        </center>
                    </div>
            <?php
                }
                $contaPostNews++;
            endwhile;
            wp_reset_query();
            ?>
            <div class="news_all_desktop">
                <!-- Botão LER TODAS NOTICIAS -->
                <div class="d-flex justify-content-center grid-MaisNotSlider">
                    <form class="d-flex justify-content-center ms-2" action="<?= get_site_url() ?>/category/noticias">
                        <button class="position-relative botton-0 btn btn-primary btn-lg" style="--bs-btn-font-size: 1rem;"> Clique aqui para ler todas notícias do CRECI</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Scripts e Styles do slider show noticias !-->
<?php
$loop = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 5));
$contaPost = 1;

while ($loop->have_posts()) : $loop->the_post();
    if ($contaPost === 1) {
        $img1 = get_the_post_thumbnail_url();
        $post1 = get_the_permalink();
        $dataPost1 = get_the_date('d/m/Y');
        $dataMobile1 = get_the_date('d/m Y');
        $titulo1 = get_the_title();
        $resumo1 = get_the_excerpt();
    }
    if ($contaPost === 2) {
        $img2 = get_the_post_thumbnail_url();
        $post2 = get_the_permalink();
        $dataPost2 = get_the_date('d/m/Y');
        $dataMobile2 = get_the_date('d/m Y');
        $titulo2 = get_the_title();
        $resumo2 = get_the_excerpt();
    }
    if ($contaPost === 3) {
        $img3 = get_the_post_thumbnail_url();
        $post3 = get_the_permalink();
        $dataPost3 = get_the_date('d/m/Y');
        $dataMobile3 = get_the_date('d/m Y');
        $titulo3 = get_the_title();
        $resumo3 = get_the_excerpt();
    }
    if ($contaPost === 4) {
        $img4 = get_the_post_thumbnail_url();
        $post4 = get_the_permalink();
        $dataPost4 = get_the_date('d/m/Y');
        $dataMobile4 = get_the_date('d/m Y');
        $titulo4 = get_the_title();
        $resumo4 = get_the_excerpt();
    }
    if ($contaPost === 5) {
        $img5 = get_the_post_thumbnail_url();
        $post5 = get_the_permalink();
        $dataPost5 = get_the_date('d/m/Y');
        $dataMobile5 = get_the_date('d/m Y');
        $titulo5 = get_the_title();
        $resumo5 = get_the_excerpt();
    }
    $contaPost++;
endwhile;
wp_reset_query();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo SLIDER_URL . 'classes/js/animateSlide.js' ?>"></script>
<script src="<?php echo SLIDER_URL . 'classes/js/handleSlide.js' ?>"></script>

<script>
    let arrayModel = [{
            'img': '<?= $img1; ?>',
            'post': '<?= $post1; ?>',
            'data-desktop': '<?= $dataPost1; ?>',
            'titulo-desktop': '<?= $titulo1; ?>',
            'resumo-desktop': '<?= $resumo1; ?>',
            'data-mobile': '<?= $dataPost1; ?>',
            'titulo-mobile': '<?= $titulo1; ?>',
            'resumo-mobile': '<?= $resumo1; ?>',
        },
        {
            'img': '<?= $img2; ?>',
            'post': '<?= $post2; ?>',
            'data-desktop': '<?= $dataPost2; ?>',
            'titulo-desktop': '<?= $titulo2; ?>',
            'resumo-desktop': '<?= $resumo2; ?>',
            'data-mobile': '<?= $dataPost2; ?>',
            'titulo-mobile': '<?= $titulo2; ?>',
            'resumo-mobile': '<?= $resumo2; ?>',
        },
        {
            'img': '<?= $img3; ?>',
            'post': '<?= $post3; ?>',
            'data-desktop': '<?= $dataPost3; ?>',
            'titulo-desktop': '<?= $titulo3; ?>',
            'resumo-desktop': '<?= $resumo3; ?>',
            'data-mobile': '<?= $dataPost3; ?>',
            'titulo-mobile': '<?= $titulo3; ?>',
            'resumo-mobile': '<?= $resumo3; ?>',
        },
        {
            'img': '<?= $img4; ?>',
            'post': '<?= $post4; ?>',
            'data-desktop': '<?= $dataPost4; ?>',
            'titulo-desktop': '<?= $titulo4; ?>',
            'resumo-desktop': '<?= $resumo4; ?>',
            'data-mobile': '<?= $dataPost4; ?>',
            'titulo-mobile': '<?= $titulo4; ?>',
            'resumo-mobile': '<?= $resumo4; ?>',
        },
        {
            'img': '<?= $img5; ?>',
            'post': '<?= $post5; ?>',
            'data-desktop': '<?= $dataPost5; ?>',
            'titulo-desktop': '<?= $titulo5; ?>',
            'resumo-desktop': '<?= $resumo5; ?>',
            'data-mobile': '<?= $dataPost5; ?>',
            'titulo-mobile': '<?= $titulo5; ?>',
            'resumo-mobile': '<?= $resumo5; ?>',
        },

    ]
    $(document).ready(function() {
        const sliderHandler = new HandleSlide({
            slideDescriptionClass: '.slider__description',
            slideItemClass: '.carousel-item',
            nextSlideClass: '.next-slides__description-item',
            onReadyUpdateElements: true
        });
        sliderHandler.arrayData = arrayModel;
        sliderHandler.immediateUpdateAllElementsSlide();
        const animateHandler = new AnimateSlide({
            duration: 6000,
            fadeDuration: 550,
            action: () => {
                sliderHandler.circularDynamic();
            }
        });
        animateHandler.init()
    })
</script>
