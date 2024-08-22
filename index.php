<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front End Test 2024</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap" rel="stylesheet">

    <link href="/assets/custom.css" rel="stylesheet">
    <?php
    include_once("assets/utilities.php") ?>
</head>
<body>

<div class="container">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-6 tab-content" style="background: #F2F4FF; border-radius: 6px">
            <div id="step1" class="tab-pane active">
                <div class="card" style="padding: 2rem">
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <div class="date__from">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="date__num">12</h3>
                                        </div>
                                        <div class="col-6">
                                            <p class="date__day">FRI</p>
                                            <p class="date__day">DAY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2" style="align-content: center;text-align: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 50%">
                                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" style="fill: #0062E0"/>
                            </svg>
                        </div>
                        <div class="col-5">
                            <div class="row">
                                <div class="date__to">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="date__num" style="color: black">22</h3>
                                        </div>
                                        <div class="col-6">
                                            <p class="date__day" style="color: black">SUN</p>
                                            <p class="date__day" style="color: black">DAY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="step2" class="tab-pane">
                <div class="row">
                    <?php
                    foreach ($cars as $car) {
                        ?>
                        <div class="col-6 col-md-4">
                            <div class="box">
                                <p class="box__name"><?php
                                    echo $car["name"]; ?></p>
                                <img src="<?php
                                echo $car["img"]; ?>" class="img-fluid box__img">
                                <p class="box__price"><?php
                                    echo $car["price"]; ?></p>
                                <button type="button" class="box__btn">Book Now</button>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="box__circle">
                        <h1 class="box__circle_title">+53</h1>
                        <h3 class="box__circle_subtitle">Vehicles</h3>
                    </div>
                </div>
            </div>
            <div id="step3" class="tab-pane">
                <div class="row">
                    <?php
                    $counter = 0;
                    foreach ($extras as $extra) {
                        $counter++;
                        ?>
                        <div class="col-12 col-md-10 <?php if($counter % 2 == 0){ echo 'offset-2' ;} ?>">
                            <div class="box">
                               <div class="row">
                                    <div class="col-6">
                                        <img src="<?php
                                        echo $extra["img"]; ?>" class="img-fluid box__img">
                                    </div>
                                    <div class="col-6">
                                        <h3 class="box__name"><?php echo $extra["name"] ?></h3>
                                        <button type="button" class="box__btn">Add</button>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="box__circle">
                        <h1 class="box__circle_title">Free</h1>
                        <h3 class="box__circle_subtitle">Insurance</h3>
                    </div>
                </div>
            </div>
            <div id="step4" class="tab-pane">
                <div class="row mb-4">
                    <div class="col-3">
                        <div class="step__active" style="z-index: inherit;">
                            <div class="step__circle ms-auto me-auto">1</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="step__active" style="z-index: inherit;">
                            <div class="step__circle ms-auto me-auto">2</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="step__active" style="z-index: inherit;">
                            <div class="step__circle ms-auto me-auto">3</div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="step__active" style="z-index: inherit;">
                            <div class="step__circle ms-auto me-auto">4</div>
                        </div>
                    </div>
                </div>
                <hr>
                <div style="align-content: center;text-align: center;" class="mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 120px;">
                        <path style="fill: #25B700" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-5 offset-1 left-column">
            <h3 class="header-text__subtitle">Easy Online Booking Process</h3>
            <h1 class="header-text__title">You’re seconds away from securing your Iceland box rental.</h1>

            <div class="stepper">
                <div class="step step__active" data-target="#step1">
                    <div class="step__circle">1</div>
                    <div class="step__content">
                        <h3 class="step__title">Select your travel days</h3>
                        <p class="step__text">Want to relax in the Blue Lagoon during the summer or hunt the Northern
                            Lights during the winter? Pick your travek days and hit 'Search'.</p>
                    </div>
                </div>
                <div class="step" data-target="#step2">
                    <div class="step__circle">2</div>
                    <div class="step__content">
                        <h3 class="step__title">Choose your favorite ride</h3>
                        <p class="step__text">Take a good look at our new vehicle fleet. From 4x4s & SUVs to electric
                            and luxury vehicles, the choice is yours!</p>
                    </div>
                </div>
                <div class="step" data-target="#step3">
                    <div class="step__circle">3</div>
                    <div class="step__content">
                        <h3 class="step__title">Add your extras & insurances</h3>
                        <p class="step__text">Feel at home on the road and don't worry about a thing thanks to our
                            comprehensive insurances and top extras.</p>
                    </div>
                </div>
                <div class="step" data-target="#step4">
                    <div class="step__circle">4</div>
                    <div class="step__content">
                        <h3 class="step__title">Complete your booking and fly to Iceland!</h3>
                        <p class="step__text">All you need to do now is fill your personal details and complete the
                            online payment process. See you in Iceland!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/assets/script.js"></script>

</body>
</html>
