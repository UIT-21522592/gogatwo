<?php
include('./functions/userFunctions.php');
include('./includes/header.php');
?>

<style>
    .bg-image {
        background: url(./assets/img/aboutUs.png);
        background-size: cover;
        height: 550px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .bg-masterchef {
        background: url(./assets/img/about1.jpg);
        background-size: cover;
        color: white;
        text-align: center;
    }

    .bg-standard {
        background: url(./assets/img/standard.jpg);
        background-size: cover;
        color: white;
        text-align: center;
    }

    .section {
        padding: 60px 0;
    }

    .section-title {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .section-content {
        margin-bottom: 30px;
    }

    .btn-custom {
        background-color: #8B4513;
        color: white;
    }

    .underline {
        width: 15%;
        margin: auto;
        background-color: #8B4513;
    }
</style>

<div class="p-5 bg-image">
    <h1 class="display-1 fw-bold">About Our Game</h1>
</div>

<div class="section bg-f2f2f2 mb-2">
    <div class="container">
        <div class="section-title">Our Story</div>
        <div class="section-content">
            <p>Explore the fascinating story of our game, where adventure meets excitement. Join us on a journey through the gaming world.</p>
        </div>
        <div class="section-content">
            <p>Our mission is to provide an immersive and unforgettable gaming experience. We believe that games are more than just entertainment—they are a way to bring people together and create lasting memories.</p>
        </div>
        <div class="underline mb-3"></div>
    </div>
</div>

<div class="p-5 bg-masterchef">
    <div class="container">
        <div class="section-title">Meet the Creators</div>
        <div class="section-content">
            <p>Our talented team of game developers is passionate about creating unique and engaging experiences. Meet the minds behind the game and discover the creativity that fuels our projects.</p>
        </div>
        <div class="section-content fw-bold">Ready to embark on an epic gaming adventure?</div>
        <div class="section-content">
            <a href="category.php" class="btn btn-custom btn-hover-bg-shade-amount" role="button">Explore Our Game</a>
        </div>
    </div>
</div>

<div class="section bg-f2f2f2 pb-4">
    <div class="underline mt-3 m-auto"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
                <div class="section-title">Testimonials</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <div class="section-content">
                    <p>Players love our game! Read what they have to say about their experiences and why our game stands out from the rest.</p>
                </div>
            </div>
            <div class="col-md-3">
                <img src="./assets/img/about2.jpg" alt="testimalnial">
            </div>
        </div>
    </div>
    <div class="underline mt-5 m-auto"></div>
</div>

<div class="p-4 bg-standard">
    <div class="container">
        <div class="section-title">Our Game Standard</div>
        <div class="section-content">
            <div class="row">
                <div class="col-md-4">
                    <p>Immersive Gameplay</p>
                </div>
                <div class="col-md-4">
                    <p>Stunning Graphics</p>
                </div>
                <div class="col-md-4">
                    <p>Multiplayer Options</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>Regular Updates</p>
                </div>
                <div class="col-md-4">
                    <p>Exciting Storylines</p>
                </div>
                <div class="col-md-4">
                    <p>Community Engagement</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section bg-f2f2f2">
    <div class="underline mt-0 mb-5 m-auto"></div>
    <div class="container">
        <div class="col-md-5">
            <div class="section-title">Our Mission</div>
            <div class="section-content">
                <p>We are committed to providing gamers with an unforgettable experience. Our mission is to create games that captivate, inspire, and bring joy to players around the world.</p>
            </div>
        </div>
        <div class="col-md-7">
            <div class="section-content">
                <img src="./assets/img/mission.jpg" alt="mission">
            </div>
        </div>
    </div>
</div>

<?php include('./includes/footer.php') ?>
