<?php require_once("./user-check.php");?>
<?php
	if(!check_user())
	{
      echo "<a href=\"./login.php\">Please login first.</a>";
      exit();
	}
?>

<?php

	$id       =   $_SESSION['user_id'];
	$sql      =   mysql_query("select * from user where id=$id ");
	$u_row    =   mysql_fetch_array($sql);
?>
<div class="container-fluid" >
	      <div class="col-md-12" style="padding-top:10%">
					<p><img src="<?php echo $u_row['image'];?>" class="img-circle" width="160px"></p>
				</div>
				<div class="col-md-12">
					<p><strong>管理员基本信息：</strong></p>
					<p><strong>所在部门：</strong><?php echo  $u_row['bumen'];?></p>
					<p><strong>姓名：   </strong> <?php echo  $u_row['realname'];?></p>
					<p><strong>手机号码：</strong><?php echo  $u_row['tel'];?></p>
					<p><strong>注册时间：</strong><?php echo  $u_row['regist_time'];?></p>
					<p><strong>上次登录：</strong><?php echo  $u_row['lastlogintime'];?></p>
				</div>

				<div class="col-md-12">
					<p><code>用户名:</code><br/><?php echo htmlspecialchars($u_row['username']);?></p>
				</div>
				<div class="col-md-12">
					<p><code>Email:</code><br/><?php echo str_replace("@","@",$u_row['email']);?></p>
				</div>
				<div class="col-md-12">
					<p><code>人生格言：</code><br/><?php echo htmlspecialchars($u_row['motto']);?></p>
				</div>
</div>
