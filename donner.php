<?php
include("../project/donner_header.php");
include("../project/database/db_conn.php");
?>
<style>

</style>
<!-- Icon Cards-->
<div class="form-group">
	<div class="form-row">
		<div class="col-md-4">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-comments"></i>
					</div>
					<div class="mr-5" align="center">
						<i class="fas fa-chalkboard-teacher" style="font-size:24px"></i>
						Number of Camp :-
						<?php
						$sql = "select * from camp";
						$row = mysqli_query($conn, $sql);
						$count = mysqli_num_rows($row);
						echo $count;
						?>
					</div>
				</div>

			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-comments"></i>
					</div>
					<div class="mr-5" align="center">
						<i class="fa fa-users" aria-hidden="true" style="font-size:24px"></i>&nbsp;&nbsp;
						number of hospital :-
						<?php
						$sql = "select * from hospital";
						$row = mysqli_query($conn, $sql);
						$count = mysqli_num_rows($row);
						echo $count;
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-comments"></i>
					</div>
					<div class="mr-5" align="center">
						<i class="far fa-clipboard" style="font-size:24px"></i>
						Number of Donar :-
						<?php
						$sql = "select * from donner";
						$row = mysqli_query($conn, $sql);
						$count = mysqli_num_rows($row);
						echo $count;
						?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="form-group">
	<div class="form-row">
		<div class="col-md-4">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-comments"></i>
					</div>
					<div class="mr-5" align="center">
						<i class="fas fa-chalkboard-teacher" style="font-size:24px"></i>
						number of camp attend :-
						<?php
						// $sql="select * from camp";
						// $row =mysqli_query($conn,$sql);
						// $count = mysqli_num_rows($row);
						// echo $count;
						?>
					</div>
				</div>

			</div>
		</div>


	</div>
</div>
</div>




<!-- /.content-wrapper -->


<!-- /#wrapper -->

<!-- Scroll to Top Button-->



<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>



</body>

</html>