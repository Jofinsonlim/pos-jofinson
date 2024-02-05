<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= base_url('../css/bootstrap.min.css') ?>" ) <img src="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>
</head>

<style type="text/css">
    .bg {
        background-image: linear-gradient(to bottom right, #A18CD1, #FBC2EB);
        width: 100%;
        height: 500px;
        object-fit: cover;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        position: relative;
    }


    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #080710;
    }

    .background {

        background-image: linear-gradient(to bottom right, #9796F0, #FBC7D4);
        width: 100%;
        height: 770px;
        object-fit: cover;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        position: relative;
    }


    form {
        height: 520px;
        width: 400px;
        background-color: rgba(255, 255, 255, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
    }

    ::placeholder {
        color: #e5e5e5;
    }

    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -25px;
        position: relative;
        z-index: 2;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .social {
        margin-top: 30px;
        display: flex;
    }
</style>

<body>
    <div class="container">
        <form action="<?= base_url('/home/proses_login') ?>" method="post">
            <h3>Login Here</h3>
            <div class="md-3 mt-3">
                <label for="username" class="form-label">Username</label>
                <input placeholder="Username" id="username" type="text" class="form-control" name="username"></input>
            </div>
            <div>
                <label for="password" class="form-label">password</label>
                <!-- <input placeholder="Password" id="myInput" type="password" class="form-control" name="password">
                <i class="far fa-eye" id="togglePassword" cursor: pointer;"></i></input> -->
                <input type="password" id="fakePassword" placeholder="Enter Password" class="form_control"
                    name="password" />
                <span><i id="toggler" class="far fa-eye"></i></span>
                <div>
                    <button type="submit" class="button" style="margin-top: 25px;">Login</button>
                </div>
        </form>
    </div>

</body>

</html>
<script>
    var password = document.getElementById('fakePassword');
    var toggler = document.getElementById('toggler');
    showHidePassword = () => {
        if (password.type == 'password') {
            password.setAttribute('type', 'text');
            toggler.classList.add('fa-eye-slash');
        } else {
            toggler.classList.remove('fa-eye-slash');
            password.setAttribute('type', 'password');
        }
    };
    toggler.addEventListener('click', showHidePassword);
</script>