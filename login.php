<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-image: url(login\ img.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .form-container{
            max-width: 400px;
            margin: 130px 0 0;
            
        }
        .form-container img{
            max-width: 100%;
            height: auto;
        }
        .btn-shop-now{
            background-color:rgb(255, 81, 0) ;
            color: white;
            border-color: rgb(255, 81, 0);
            margin-top: 20px;
        }
        .first {
            display: none;
        }
		.dp{
			display: inline;
		}
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <img src="logo.jpg" alt="Logo" style="margin-top: -30px;">
                    <form class="login" action="loginsys.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button type="submit" class="btn btn-shop-now">Login</button>
                        <button type="button" class="tog btn btn-shop-now" style="margin-left: 20px;">Sign up</button>
                    </form>
                    <form class="first" action="details.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingemail" placeholder="example@gmail.com" name="email">
                            <label for="floatingemail">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingphoneno" placeholder="+91 9************3" name="mobileno">
                            <label for="floatingPassword">Mobile Number</label>
                        </div>
                        <button type="submit" class="btn btn-shop-now" value="sign up">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    
document.addEventListener("DOMContentLoaded", function() {
    const loginForm = document.querySelector(".login");
    const tog = document.querySelector(".tog");
	const signup = document.querySelector(".first");
    tog.addEventListener('click', () => {
        loginForm.classList.add("first");
		signup.classList.remove("first");
    });
});

</script>
</html>
