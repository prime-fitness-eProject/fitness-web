<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- ENQUIRY FORM PAGE -->
<section class="section-banner">
    <div class="bg-cover" style="background-image: url('./img/banner.jpg')" data-scroll="background"></div>

    <div class="carousel-caption">
        <h2 class="image-caption">
            Enquiry
        </h2>
    </div>

</section>

<section class="section-enquiry container-fluid text-center">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>Send Us A Message</h2>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="alert-success"><?php if (isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
                                                echo $_SESSION['msg'];
                                                unset($_SESSION['msg']);
                                            } ?></div>
            </div>
        </div>
        <div class="form-enquiry custom-form">
            <form action="./action/CreateEnquiry.php" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Message" rows="5"></textarea>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>