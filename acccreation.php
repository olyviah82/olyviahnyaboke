<!DOCTYPE html>
<html>

<head>
    <title>
        LAB1|CREATEACCOUNT

    </title>
    <link rel="stylesheet" href="create.css">
</head>

<body>
    <form action="index.php" method="post">
        <h2>REGISTER FORM</h2 <fieldset>

        <div class="container">


            <div class="picture-container">
                <div class="picture">
                    <img src="avatar.png" id="" />
                    <input type="file" id="">
                </div>
                <h6>Choose Picture</h6>
            </div>
            <div class="col1">
                <label for="fullname">Fullname</label>
                <input class="names" type="text" name="fullname" id="fullname" placeholder="your fullname" required />
            </div>
            <div class="col1">
                <label for="email">Email <Address></Address></label>
                <input class="names" type="email" name="email" id="email" placeholder="your emailadress name" required />
            </div>
            <div class="col1">
                <label for="city">City of Residence</label>
                <input class="names" type="text" name="city" id="city" placeholder="your city Residence" required />
            </div>
            <div class="col1">
                <label for="Password">Password</label>
                <input class="names" type="password" name="password" id="password" placeholder="your password" required />
            </div>


            <button class="registerbtn" type="submit">Register</button>


            <p class="login"> Already have an account? <a href="loginlab1.html">Log in</a></p>
            </p>
        </div>
        </fieldset>
    </form>

</body>

</html>