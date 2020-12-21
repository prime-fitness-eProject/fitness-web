<?php
$header = file_get_contents('./header.php', true);
echo $header;
?>

<!-- FAQ FORM PAGE -->
<section class="section-banner">
    <div class="bg-cover" style="background-image: url('./img/img2.jpg')" data-scroll="background"></div>
    <div class="carousel-caption">

        <h2 class="question">
            Q: Strength training, such as lifting weights, will result in a bulky appearance. True or False?
        </h2>
        <p>
            A:False. It is not true that lifting weights will result in a bulky appearance. According to Cedric Bryant, chief exercise physiologist for the American Council on Exercise, "This is a myth that deters a lot of women from strength training, when in fact, what determines the amount of muscle bulk a person has is largely dependent on genetic factors."
        </p>
    </div>
</section>

<section class="section-faq container-fluid text-center" id="contact">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>FAQ's</h2>
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
        <div class="form-faq custom-form">
            <form method="POST" action="./action/CreateFaq.php" class="needs-validation" novalidate>
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
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address (ex: 1234 Main St)">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address 2 (ex: Apartment, studio, or floor)">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                            <option selected>State:</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <input type="text" class="form-control" id="inputZip" placeholder="Zip">
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Message" rows="5"></textarea>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" required> I agree with Terms & Conditions.
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