<!--<form action="pay.php" method="post"> ////use this commented code in your cart.php and order.php to redirect to this page and in the payment button redirect using the below button to bid farewell to the site
							<center>
							<button type="submit">Order Now</button>
							</center>
							</form>-->

<?php
error_reporting(0);
						session_start();
						$username = $_SESSION['username'];
						$id = $_SESSION['id'];
						$_SESSION['id'] = $id;
						if(isset($_SESSION['username']))
?>
<center>	<h1>						<?php echo '<span>Welcome  '.$username.' </span>';	?>
</center>	</h1>

<html>
<head><title>QR CODE</title></head>
<body>

<center><img src="qrcode.jpg" width=300 height=300></center>
<br>
					<center><h2> or Pay to +91-8888-888-888</h2></center><br>
<center><img src="paytmlogo.png" width=300 height=100></center>
</body>
</html>
<?php
include'connection.php';?>
							
								
								<h3>
								<center>
								<?php
									$sql="SELECT * FROM users WHERE username = '$username'";
									$result=mysqli_query($conn,$sql);
									$row=mysqli_fetch_assoc($result);
									
									printf ("Name:");
									printf ("%s",$row["username"]);
									echo '<br>';
									?>
									</center>
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("Mobile:");
									printf ("%s",$row["mobile"]);
									echo '<br>';
										?>
									</center>								
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("E-mail:");
									printf ("%s",$row["email"]);
									echo '<br>';
									?>
									</center>
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("Adress:");
									printf ("%s",$row["addr"]);
									echo '<br>';
									?>
									</center>
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("Pin:");
									printf ("%s",$row["pin"]);
									echo '<br>';
									?>
									</center>
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("City:");
									printf ("%s",$row["city"]);
									echo '<br>';
									?>
									</center>
									<center>
									<?php
								//	$row=mysqli_fetch_assoc($result);
									printf("State:");
									printf ("%s",$row["state"]);
									echo '<br>';
									?>
									</center>
									<center>
								
									
									<?php $sql1 = " SELECT sum(c_price) total FROM cart WHERE c_u_id = $id";
									$result1 = mysqli_query($conn, $sql1);
									if (mysqli_num_rows($result1) > 0) {
										while($rows = mysqli_fetch_assoc($result1)) {
										$item_total = $rows['total'];
										}
									} 
																		?>
									<td class="txt-heading" colspan="5" align="right"><strong>Total = </strong>Rs. <?php if($item_total==0) echo '0'; else echo $item_total; ?></td>

							</center>
							<form action="order_confirm.php" method="post">
							<center>
							<button type="submit">Order Now</button>
							</center>
							</form>		
					