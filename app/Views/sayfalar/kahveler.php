<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
    <div class="container">
        <?php foreach ($coffees as $coffee): ?>
        <div class="row justify-content-start align-items-center mb-4">
            <div class="col-lg-6 video-right justify-content-center align-items-center d-flex">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM">
                    <img class="img-fluid" src="img/play-icon.png" alt="">
                </a>
            </div>						
            <div class="col-lg-6 video-left">
                <h1><?= $coffee['name'] ?></h1>
                <p><span><?= $coffee['content'] ?></span></p>
                <h3><?= $coffee['price'] ?> $</h3>
                <img class="img-fluid" src="img/signature.png" alt="">
            </div>
        </div>
        <?php endforeach; ?>
    </div>	
</section>
<!-- End video-sec Area -->
