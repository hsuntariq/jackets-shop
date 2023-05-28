<footer class="p-3">
			<div class="row">
				<div class="col-md-8 p-3">
					<h2>SIGN UP TO OUR NEWSLETTER</h2>
					<p>Product launches, expedition updates, event news.</p>
					<form action="../User/send-mail-footer.php" method="POST">
						<div class="input-group d-flex mb-3">
							<input type="text" class="form-control" name="email" placeholder="Your Email...">
							<span class="my-btn">
								<button style="background-color: #e29338;" class="btn btn-default" type="submit" value="send" name="submit">submit</button>
							</span>
						</div>
					</form>
					<div class="row">
						<div class="col-4">
							<img width="100%" src="../assets/images/logo-removebg-preview.png" alt="">
						</div>
						<div class="col-8">
							<p>
								<?php
									
                            include '../Admin/config/connect.php';
                            $select = 'SELECT footer_text FROM `contact`';
                            
                            $result = mysqli_query($connection, $select);
								if (mysqli_num_rows($result) > 0) {
									while ($row = mysqli_fetch_assoc($result)) {
										echo $row['footer_text'];
									}
								}
								?>
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