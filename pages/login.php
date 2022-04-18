<div class="container-fluid">
    <div class="container">
        <div class="span5">
            <h2>Sing In</h2>
            <form action="" method="post">
                <table class="table">
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="text" name="password" id="" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td><input type="text" name="password2" id="" required class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="btnLogin" value="Login" class="btn btn-warning"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php // jika submit button diklik
  if(isset($_POST['btnLogin'])){
	require_once('./class/class.Account.php'); 		
	$objAccount = new Account(); 
	
    $objAccount->email = $_POST['email'];
	$objAccount->password = $_POST['password'];

	$cekEmail = $objAccount->ValidateEmail($_POST['email']);
    if($cekEmail){
		if($objAccount->email == $_POST['email'] && $objAccount->password == $_POST['password']){
			if (!isset($_SESSION)) {
				session_start();
			}		  
		
			$_SESSION["idaccount"]= $objAccount->id;
			$_SESSION["idpembeli"]= $objAccount->idpembeli;
			$_SESSION["role"]= $objAccount->role;
			$_SESSION["nama"]= $objAccount->nama;
			
			echo "<script> alert('Login sukses'); </script>";		
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
		}
		else{
			echo "<script> alert('Email dan password tidak match'); </script>";		
		}		
	}
	else{
		echo "<script> alert('Email tidak terdaftar'); </script>";		  
	}
	
  }
?>