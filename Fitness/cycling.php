<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- Cycling -->
<section class="section-banner banner-custom">
    <div class="bg-cover" style="background-image: url('./img/img5.jpg')" data-scroll="background"></div>
</section>

<section class="section-cycling container-fluid text-center">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="heading-section program text-center">
                    <!-- <img src="./img/cycling.png" alt="cycling"> -->
                    <h1>Cycling</h1>
                    <p>Develop your strength and fitness
                    </p>
                    <p>Increased cardiovascular fitness</p>
                    <p>Increased muscle strength and flexibility</p>
                    <p>Improved posture and coordination</p>
                    <p>Decreased body fat levels.</p>
                    <p>Prevention or management of disease.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>