<?php
get_header();
?>
    <header>
        <section class="banner">
            <div class="container">
                <h1 class="banner-titulo">Precisando de um site para marcar presença no mundo digital?</h1>

                <p class="banner-texto">Cada vez mais pessoas utilizam a internet em busca de produtos e serviços, aumente
                    sua
                    visibilidade na internet, exponha seus produtos e serviços 24 horas por dia e seja encontrado por novos
                    clientes.</p>

                <a class="banner-icone" href="#">
                    <i class="fa-solid fa-angles-down"></i>
                </a>
            </div>
        </section>
    </header>

    <section class="sobre secao" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <h2 class="secao-titulo">
                        Desenvolvedor Web
                    </h2>
                    <p class="secao-subtitulo">O que posso fazer por você?</p>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <p>
                        Ofereço soluções personalizadas conforme as suas necessidades. O meu trabalho é focado em
                        desenvolver sites
                        que ajudem profissionais liberais, pequenas e médias empresas a aumentarem sua presença no mundo
                        digital. Se
                        você deseja:
                    </p>
                    <ul class="sobre-lista">
                        <li><i class="fas fa-caret-square-right"></i> Passar mais credibilidade</li>
                        <li><i class="fas fa-caret-square-right"></i> Ter mais visibilidade</li>
                        <li><i class="fas fa-caret-square-right"></i> Atingir novos clientes</li>
                        <li><i class="fas fa-caret-square-right"></i> Melhorar a comunicação com seus clientes</li>
                    </ul>
                    <p>Entre em contato e solicite um orçamento sem compromisso.</p>

                    <div class="row">
                        <div class="col-6">
                            <a class="sobre-btn-contato btn btn-primary">Contato</a>
                        </div>
                        <div class="col-6">
                            <a class="sobre-btn-wpp btn btn-primary">Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="servicos secao" id="servicos">
        <h2 class="secao-titulo">
            Serviços
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4 offset-lg-2">
                    <div class="card servico-item">
                        <div class="card-body">
                            <i class="servico-icone fas fa-laptop-code"></i>
                            <h3 class="servico-titulo">Sites</h3>
                            <p class="servico-texto">Ainda não está marcando presença na internet? Tenha um site com
                                layout
                                personalizado e divulgue o seu trabalho.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card servico-item">
                        <div class="card-body">
                            <i class="servico-icone fa-solid fa-mobile-screen-button"></i>
                            <h3 class="servico-titulo">Design Responsivo</h3>
                            <p class="servico-texto">Seu site estará pronto para diversos tamanhos de tela, seja
                                computador, tablet ou
                                smartphone.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 col-lg-4 offset-lg-2">
                    <div class="card servico-item">
                        <div class="card-body">
                            <i class="servico-icone fas fa-search"></i>
                            <h3 class="servico-titulo">SEO</h3>
                            <p class="servico-texto">Quer ser encontrado no Google? Seu site será otimizado para ser
                                encontrado pelos
                                sites de busca.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4">
                    <div class="card servico-item">
                        <div class="card-body">
                            <i class="servico-icone fas fa-cog"></i>
                            <h3 class="servico-titulo">Suporte e manutenção</h3>
                            <p class="servico-texto">Precisando de ajustes, correções, atualização de recursos, trocar
                                ou adicionar
                                textos e imagens?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="secao portfolio" id="portfolio">
        <h2 class="secao-titulo">
            Portfolio
        </h2>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>

                <div class="col-sm-12 col-lg-4">
                    <img class="img-fluid img-thumbnail" src="<?= get_template_directory_uri() . '/assets/img/background-header.jpg' ?>"
                         alt="imagem portfolio">
                </div>
            </div>
        </div>
    </section>

    <section class="posts secao">
        <h2 class="secao-titulo mb-5">
            Últimos Posts
        </h2>
        <div class="container">
            <div class="row">
            <?php
            query_posts('posts_per_page=3');
            if (have_posts()): ?>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <img class="img-fluid mb-3"
                                     src="<?= get_the_post_thumbnail_url(); ?>"
                                     alt="">

                                <div class="d-flex justify-content-between align-items-center">
                                    <p><?= get_the_date(); ?></p>
                                    <?php the_category(); ?>
                                </div>
                                <h2 class="text-center py-3"><?php the_title() ?></h2>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
    </section>

    <section class="contato secao" id="contato">
        <h2 class="secao-titulo">Contato</h2>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="contatos">
                        <div class="contato-item">
                            <i class="contato-icone far fa-envelope"></i>
                            <h3 class="contato-titulo">Email</h3>
                            <a class="contato-link" href="#">contato@douglasleal.com.br</a>
                        </div>

                        <div class="contato-item">
                            <i class="contato-icone fab fa-whatsapp"></i>
                            <h3 class="contato-titulo">Whatsapp</h3>
                            <a class="contato-link" href="#">(21) 98765-4321</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <form class="formulario" action="#">
                        <input class="form-control" type="text" placeholder="Nome*">

                        <input class="form-control" type="text" placeholder="Email*">

                        <input class="form-control" type="text" placeholder="DDD+Whatsapp">

                        <textarea class="form-control" rows="10" placeholder="Mensagem*"></textarea>

                        <input class="btn btn-outline-primary" type="submit">
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>