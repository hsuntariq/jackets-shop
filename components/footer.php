<footer class="p-3">
			<div class="row">
				<div class="col-md-8 p-3">
					<h2>SIGN UP TO OUR NEWSLETTER</h2>
					<p>Product launches, expedition updates, event news.</p>
					<form action="">
						<div class="input-group">
							<input type="text" class="form-control" name="signup" placeholder="Your Email...">
							<span class="my-btn">
								<button class="btn btn-default" type="submit" value="send" name="submit">submit</button>
							</span>
						</div>
					</form>
					<div class="row">
						<div class="col-4">
							<!-- <img width="100%" src="../assets/images/logo-removebg-preview.png" alt=""> -->
						</div>
						<div class="col-8">
							<p>
								This company registered in 1993 and start operational working in 1995. It�s family
								based
								company as tradition here in Pakistan. From First day, we concentrate on motorbike
								industry as we understand that there�s still potential in this industry and we can
								get
								our part.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 p-3 text-capitalize">
					<h3>Follow us</h3>
					<p>You can select any social link</p>
					<div class="row icons d-flex justify-content-around">
						<?php
							include '../Admin/config/connect.php';
							$select = "SELECT * FROM contact_social";
							$result = mysqli_query($connection,$select);
							while ($row = mysqli_fetch_assoc($result)) {
								?>
						<a class="text-light" href="<?php echo $row['facebook']?>" class="col-2"><i
								class="bi bi-facebook"></i></a>
						<a class="text-light" href="<?php echo $row['twitter']?>" class="col-2"><i
								class="bi bi-twitter"></i></a>
						<a class="text-light" href="<?php echo $row['google']?>" class="col-2"><i
								class="bi bi-google"></i></a>
						<a class="text-light" href="<?php echo $row['instagram']?>" class="col-2"><i
								class="bi bi-instagram"></i></a>
						<a class="text-light" href="<?php echo $row['pintrest']?>" class="col-2"><i
								class="bi bi-pinterest"></i></a>
						<a class="text-light" href="<?php echo $row['linkedin']?>" class="col-2"><i
								class="bi bi-linkedin"></i></a>
						<?php
							}
							?>
					</div>
					<h3>contact us</h3>
					<h6>address</h6>
					<?php
							include '../Admin/config/connect.php';
							$select = "SELECT * FROM contact";
							$result = mysqli_query($connection,$select);
							while ($row = mysqli_fetch_assoc($result)) {
								?>
					<h6 class="text-secondary">
						<?php echo $row['address']?>
					</h6>
					</h6>
					<h6>
						Email
					</h6>
					<h6 class="text-secondary">
						<?php echo $row['email']?>
					</h6>
					<h6>
						Phone
					</h6>
					<h6 class="text-secondary">
						<?php echo $row['phone']?>
					</h6>

					<?php
							}
							?>
				</div>
			</div>
		</footer>