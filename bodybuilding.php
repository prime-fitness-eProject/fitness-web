<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- Body Building -->
<section class="section-banner banner-custom">
    <div class="bg-cover" style="background-image: url('./img/img4.jpg')" data-scroll="background"></div>
</section>

<section class="section-bodybuilding container-fluid text-center">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="heading-section program text-center">
                    <!-- <img src="./img/bodybuilding.png" alt="bodybuilding"> -->
                    <h1>Body Building</h1>
                    <p>Bodybuilding is the use of progressive resistance exercise to control and develop one's musculature by muscle hypertrophy for aesthetic purposes. An individual who engages in this activity is referred to as a bodybuilder</p>

                    <p> Muscle helps manage blood sugar.</p>
                    <p>
                        Muscle builds strength and stamina.
                    </p>
                    <p>
                        Muscle supports your joints.
                    </p>
                    <p>
                        Building muscle builds bone, too.
                    </p>
                    Muscle helps you control body fat.
                    <p>
                        Muscle may change your emotional state.
                    </p>
                    <p>
                        Muscle makes you more self-confident.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>