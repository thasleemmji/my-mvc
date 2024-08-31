<!DOCTYPE html>
<html lang="en">
<head>
    <title>Core PHP application</title>
    <style>
        body {
            margin: 0;
        }

        h1 {
            font-size: 40px;
            margin: 0;
        }

        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container h1 span {
            color: #e34aaa;
        }

        .register-component {
            margin-top: 100px;
            position: absolute;
            text-align: center;
        }

        .register-component form input {
            padding: 5px;
        }

        #signup-form {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>
        Welcome
        <span>
            <?php echo $name ?? '{{ Guest user}}'; ?>
        </span>
    </h1>

    <div class="register-component">
        <?php if (!is_null($name)): ?>
            <a id="logout-link" href="../auth.php?logout=true">Logout</a>
        <?php else: ?>
            <a id="signup-link" href="javascript: void()">Register</a>
            <form action="/register" method="POST" id="signup-form">
                <label>
                    <input name="name" placeholder="Name" autocomplete="off" required>
                </label>
                <input type="submit" value="Register">
            </form>
        <?php endif; ?>
    </div>
</div>
</body>

<script>
    const signupLink = document.getElementById('signup-link');

    signupLink.addEventListener('click', function (event) {
        event.preventDefault();
        signupLink.style.display = 'none';
        document.getElementById('signup-form').style.display = 'block';
    });
</script>
</html>
