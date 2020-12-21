<?php
$header = file_get_contents('./header.php', true);
echo $header;


?>

<!-- HOME PAGE -->
<section class="section-banner carousel-inner">
	<div class="bg-cover" style="background-image: url('./img/banner.jpg')" data-scroll="background"></div>
	<div class="carousel-caption">
		<h2 class="image-caption">Prime Fitness</h2>
		<p class="image-content-caption"> Integrated Health Club
			Management Solutions’ business. Prime Fitness Club ltd focuses on staying fit is most
			important to meet the challenging requirements.</p>
	</div>
</section>

<section class="section-schedule container-fluid text-center">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="heading-section text-center">
					<h2>Class Schedule</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="schedule">
					<li><a href="#" class="active" data-sched="monday">Monday</a></li>
					<li><a href="#" data-sched="tuesday">Tuesday</a></li>
					<li><a href="#" data-sched="wednesday">Wednesday</a></li>
					<li><a href="#" data-sched="thursday">Thursday</a></li>
					<li><a href="#" data-sched="friday">Friday</a></li>
					<li><a href="#" data-sched="saturday">Saturday</a></li>
					<li><a href="#" data-sched="sunday">Sunday</a></li>
				</ul>
			</div>

			<div class="row text-center w-100 m-0">
				<div class="col-md-12 schedule-container">

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center active" data-day="monday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/yoga.png" alt="Yoga">
								<small>06AM-7AM</small>
								<h6>Yoga</h6>
								<span>James Smith</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="tuesday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="wednesday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/yoga.png" alt="Yoga">
								<small>06AM-7AM</small>
								<h6>Yoga</h6>
								<span>James Smith</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="thursday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/yoga.png" alt="Yoga">
								<small>06AM-7AM</small>
								<h6>Yoga</h6>
								<span>James Smith</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="friday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/yoga.png" alt="Yoga">
								<small>06AM-7AM</small>
								<h6>Yoga</h6>
								<span>James Smith</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="saturday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

					<div class="schedule-content row w-100 m-0 display-flex display-flex--justify-center" data-day="sunday">
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/bodybuilding.png" alt="Body Building">
								<small>06AM-7AM</small>
								<h6>Body Building</h6>
								<span>John Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/cycling.png" alt="Cycling">
								<small>06AM-7AM</small>
								<h6>Cycling</h6>
								<span>Rita Doe</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6">
							<div class="program-schedule">
								<img src="./img/swimming.png" alt="Swimming">
								<small>06AM-7AM</small>
								<h6>Swimming</h6>
								<span>John Dose</span>
							</div>
						</div>
					</div>
					<!-- END sched-content -->

				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<section class="section-background">
	<div class="bg-cover" style="background-image: url('./img/img1.jpg')" data-scroll="background"></div>
</section>

<section class="section-our-programs container-fluid text-center">
	<div class="container">

		<div class="row mb-4">
			<div class="col-md-12">
				<div class="heading-section text-center">
					<h2>Our Programs</h2>
					<p>With an emphasis on functional movements, our program is designed to keep you doing what you love for longer. Unlike most people, Prime Women improve their health with time because we're careful to protect, push and make you more powerful. Our workouts are appropriate and adaptable for members of all levels and all members see dramatic results
					</p>
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="program">
					<img src="./img/bodybuilding.png" alt="bodybuilding">
					<h6>Body Building</h6>
					<p> Muscle helps manage blood sugar.</p>

					<button type="button" onclick="document.location.href='bodybuilding.php'" class="btn btn-info">More info</button>

				</div>


			</div>
			<div class="col-md-3 col-sm-6">
				<div class="program">
					<img src="./img/yoga.png" alt="yoga">
					<h6>Yoga</h6>
					<p>Could Promote Sleep Quality</p>

					<button type="button" onclick="document.location.href='yoga.php'" class="btn btn-info">More info</button>

				</div>

			</div>
			<div class="col-md-3 col-sm-6">
				<div class="program">
					<img src="./img/cycling.png" alt="cycling">
					<h6>Cycling</h6>
					<p>Develop your strength and fitness </p>

					<button type="button" onclick="document.location.href='cycling.php'" class="btn btn-info">More info</button>

				</div>


			</div>
			<div class="col-md-3 col-sm-6">
				<div class="program">
					<img src="./img/swimming.png" alt="swimming">
					<h6>Swimming</h6>
					<p>
						Swimming is a healthy activity that you can continue for a lifetime.
					</p>

					<button type="button" onclick="document.location.href='swimming.php'" class="btn btn-info">More info</button>

				</div>


			</div>
		</div>

	</div>
</section>

<section class="section-list-images container-fluid">
	<div class="row">
		<div class="col-md-12 mb-3">
			<div class="heading-section text-center">
				<!-- <h2>Gallery</h2> -->
			</div>
		</div>
	</div>

	<div class="section-list-images-inner container display-flex display-flex--wrap">
		<div class="block__img">
			<div class="block__img-wrap d-flex justify-content-center">
				<div class="block__img-inner bg-cover" style="background-image: url('./img/img7.jpg')"></div>
				<span class="block__img-title">
					<a href="./swimming.php">SWIMMING</a>
				</span>
			</div>
		</div>
		<div class="block__img">
			<div class="block__img-wrap">
				<div class="block__img-inner bg-cover" style="background-image: url('./img/img2.jpg')"></div>
				<span class="block__img-title">
					<a href="./bodybuilding.php">BODY BUILDING</a>
				</span>
			</div>
		</div>
		<div class="block__img">
			<div class="block__img-wrap">
				<div class="block__img-inner bg-cover" style="background-image: url('./img/img3.jpg')"></div>
				<span class="block__img-title">
					<a href="./yoga.php">YOGA</a>
				</span>
			</div>
		</div>
		<div class="block__img">
			<div class="block__img-wrap">
				<div class="block__img-inner bg-cover" style="background-image: url('./img/img8.jpg')"></div>
				<span class="block__img-title">
					<a href="./cycling.php">CYCLING</a>
				</span>
			</div>
		</div>
	</div>
</section>

<?php
$footer = file_get_contents('./footer.php', true);
echo $footer;
?>