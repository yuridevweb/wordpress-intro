<?php get_header(); ?>
<div id="banner">
    <div class="banner-title">
        <h1 class="primary-color">BELGIUM FRIES,</h1>
        <h1 class="secondary-color">YOUR WAY</h1>

    </div>
    <a href="#" class="btn-ordernow">ORDER NOW</a>
</div>
</header>


<main class="container">
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="wave">
            <path fill="#030303" fill-opacity="1"
                d="M0,96L80,128C160,160,320,224,480,256C640,288,800,288,960,266.7C1120,245,1280,203,1360,181.3L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg> -->
    <h2>WHAT'S YOUR</h2>
    <h2 class="ml"><span class="secondary-color">FLAVOUR</span> COMBINATION?</h2>

    <div class="wrapper">
        <div class="button-wrapper"><button class="prev" type="button" onclick="prevSlide(this)">➤</button>
        </div>

        <div class="slider" id="slider">
            <div class="item">
                <div class="item-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/food-1.png" alt="lorem">
                    <div class="title">Lorem</div>
                </div>
            </div>

            <div class="item">
                <div class="item-bg active-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/food-2.png" alt="lorem">
                    <div class="info">
                        <div class="title">
                            <p>Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-bg">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/food-3.png" alt="lorem">
                    <div class="title">Dolor sit amet</div>
                </div>
            </div>

        </div>
        <div class="button-wrapper">
            <button class="next" type="button" onclick="nextSlide(this)">➤</button>
        </div>
    </div>


</main>

<section class="container section-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/section.png" alt="Delicious chips">
    <div class="freshly-prepared">
        <h2>FRESHLY PREPARED,</h2>
        <h2 class="secondary-color">JUST FOR YOU</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus quis omnis fugit optio sunt
            repellendus possimus error adipisci sint molestiae. Lorem ipsum dolor sit amet consectetur adipisicing
            elit. Sunt exercitationem rem quas architecto corrupti numquam, praesentium perspiciatis animi optio ab?
        </p>
        <a href="#" class="btn-learnmore">LEARN MORE</a>

    </div>
</section>


<?php get_footer(); ?>