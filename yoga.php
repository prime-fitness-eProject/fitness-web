<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- Yoga -->
<section class="section-banner banner-custom">
    <div class="bg-cover" style="background-image: url('./img/img3.jpg')" data-scroll="background"></div>
    <!-- <h1>Yoga</h1> -->
</section>

<section class="section-yoga container-fluid text-center">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="heading-section program text-center">
                    <!-- <img src="./img/yoga.png" alt="yoga"> -->
                    <h1>Yoga</h1>
                    <p>Yoga is a group of physical, mental, and spiritual practices or disciplines which originated in ancient India.</p>
                    <p>Can Decrease Stress</p>
                    <p>Relieves Anxiety</p>
                    <p>May Reduce Inflammation</p>
                    <p>Could Improve Heart Health</p>
                    <p>Improves Quality of Life</p>
                    <p>May Fight Depression</p>
                    <p>Could Promote Sleep Quality</p>
                    <p>Promotes Healthy Eating Habits</p>
                    <p>Can Increase Strength</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>