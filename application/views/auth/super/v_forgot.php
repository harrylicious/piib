   <div class="container">
   	<!-- Outer Row -->
   	<div class="row justify-content-center">
   		<div class="col-lg-4">

   			<div class="card o-hidden border-0 shadow-lg my-5">
   				<div class="card-body p-0">
   					<!-- Nested Row within Card Body -->
   					<div class="row">
   						<div class="col-lg">
   							<div class="p-5">
   								<div class="text-center">
   									<h1 class="h4 text-gray-900 mb-2"><?= $label ?></h1>
   									<p class="mb-4"><?= $notif ?></p>
   								</div>
   								<form class="user" action="<?= base_url();?>auth/forgot_user">
   									<div class="form-group">
   										<input type="text" class="form-control form-control-user"
   										id="email" name="email"
   										placeholder="Enter Email Address...">
   									</div>
   									<button type="submit" class="btn btn-success btn-user btn-block">
   										Reset Password
   									</button>
   								</form>
   								<hr>
   								<div class="text-center">
   									<a class="small" href="<?= base_url();?>auth/register_user">Create an Account!</a>
   								</div>
   								<div class="text-center">
   									<a class="small" href="<?= base_url();?>auth/login_user">Already have an account? Login!</a>
   								</div>
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>

   		</div>

   	</div>

   </div>

