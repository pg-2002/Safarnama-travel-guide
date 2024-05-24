<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safarnama</title>
    <style>
    :root{
    --orange:#fd8e17f0;
    --bg-color:#000;
    --white:#fff;
}
*::selection{
    background: var(--orange);
    color:var(--white);
}

html{
    overflow-x: hidden;
    scroll-padding-top: 6rem;
    scroll-behavior: smooth;
}

*{
    font-family:  'Open Sans', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    outline: none; border: none;
    text-decoration: none;
    scroll-behavior: smooth;
    transition: all .2s linear;
}

body{
    color: var(--white);
    background: var(--bg-color);
    background: url('images_videos/travel2.jpg') no-repeat;
    display: flex;
    justify-content: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    padding-top: 40px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
}

.wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid  rgba(255, 255, 255, .5);
    border-radius: 20px;
    backdrop-filter: blur(35px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    
}

.wrapper .form-box{
    padding: 40px;
    width: 100%;
}

.wrapper .form-box.login{
    transition: transform .18s ease;
    transform: translateX(0);
}

.form-box h2{
    font-size: 2em;
    text-align: center;
    color: var(--bg-color);
}

.inputbox{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom: 2px solid var(--bg-color);
    margin: 30px 0;
}

.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    font-size: 1em;
    font-weight: 550;
    pointer-events: none;
    color: var(--bg-color);
    transform: translateY(-50%);
    transition: .5s;
}

.inputbox input:focus~label,
.inputbox input:valid~label{
    top: -5px;
}

.inputbox input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-weight: 600;
    color: var(--bg-color);
    padding: 0 35px 0 5px;
}

.inputbox .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: var(--bg-color);
    line-height: 60px;
}

.btn{
    display:inline-block;
    padding:13px 40px;
    background: var(--orange);
    color: var(--bg-color);
    font-size: 15px;
    font-weight:600;
    border:2px solid transparent;
    border-radius:15px;
    transition:all .50s ease;
    cursor:pointer;
    width: 100%;
    height: 45px;
    margin-top: 30px;
}

.btn:hover{
    transform:translateX(10px);
    border: 2px solid var(--white);
    background:transparent;
    color:var(--white);
}

.login_register{
    font-size: .9em;
    text-align: center;
    font-weight: 700;
    color: var(--bg-color);
    margin: 25px 0 10px;
    padding-bottom: 10px;
}

.login_register p a{
    color: var(--bg-color);
    text-decoration: none;
    font-weight: 700;
}

.login_register p a:hover{
    text-decoration: underline;
}

    </style>

</head>
<body>
    <div class="wrapper">

        <div class="form-box login">

            <h2>Login</h2>

            <form action="#" method="post">

                <div class="inputbox">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="email" required name="email">
                    <label for="email">email</label>
                </div>

                <div class="inputbox">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="password" required name="password">
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn" name="submit">Login</button>

                <div class="login_register">
                    <p>Don't have an Account? <a href="usersignup.php" 
                    class="signup_link">SignUp</a></p>
                </div>

            </form>
        </div>        
    </div>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>