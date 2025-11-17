<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Session Login</title>
    <style>
    
        html,body{height:100%;}
        body{
            font-family: "Times New Roman", Times, serif;
            margin:40px 60px;
            background:#ffffff;
            color:#111;
        }
        .container{
            max-width:1100px;
        }
        label{
            display:block;
            font-size:48px;
            line-height:1.1;
            margin:18px 0 8px 0;
        }
        input[type="text"], input[type="password"]{
            width:78%; 
            min-width:360px;
            height:56px;
            padding:10px 14px;
            font-size:20px;
            border:2px solid #6d6d6d;
            border-radius:8px;
            box-sizing:border-box;
            outline:none;
        }
        .controls{margin-top:28px;}
        .btn{
            display:inline-block;
            font-size:28px;
            padding:12px 22px;
            margin:18px 0;
            border-radius:8px;
            border:3px solid #6d6d6d;
            background:#f6f6f6;
            cursor:pointer;
            text-decoration:none;
            color:#111;
            box-shadow:0 0 0 0 rgba(0,0,0,0);
        }
       
        .vertical-buttons{display:flex;flex-direction:column;gap:18px;margin-top:10px}
        .btn.login{width:120px}
        .btn.logout{width:120px}
        .form-row{margin-bottom:6px}
        @media (max-width:700px){
            input[type="text"], input[type="password"]{width:92%}
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="page2.php" method="POST">
            <div class="form-row">
                <label for="username">Username</label>
                <input id="username" name="username" type="text" required autocomplete="username">
            </div>

            <div class="form-row">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required autocomplete="current-password">
            </div>

            <div class="controls">
                <div class="vertical-buttons">
                    <button class="btn login" type="submit">Login</button>
                </div>
            </div>
        </form>

        <form action="page2.php" method="POST" style="margin-top:14px;">
            <button class="btn logout" type="submit" name="logout" value="1">Logout</button>
        </form>

        <?php
        $lockFile = __DIR__ . '/current_user.json';
        $lockedUser = null;
        if (file_exists($lockFile)) {
            $j = @file_get_contents($lockFile);
            $info = $j ? @json_decode($j, true) : null;
            $lockedUser = $info['username'] ?? null;
        }

        if (!empty($_SESSION['login_error'])) {
            echo '<p style="font-size:28px;margin-top:30px;">' . htmlspecialchars($_SESSION['login_error']) . '</p>';
            unset($_SESSION['login_error']);
        }

        if (!empty($_SESSION['username'])): ?>
            <div style="margin-top:40px;">
                <h1 style="font-size:36px;">User logged in: <?php echo htmlspecialchars($_SESSION['username']); ?></h1>

                <h1 style="font-size:36px;margin-top:28px;">Password:</h1>
                <pre style="font-size:20px;white-space:pre-wrap;word-break:break-all;">
<?php echo htmlspecialchars($_SESSION['password'] ?? ''); ?>
</pre>
            </div>
        <?php elseif ($lockedUser): ?>
            <p style="font-size:28px;margin-top:30px;">
                <?php echo htmlspecialchars("$lockedUser is already logged in. Wait for him to logout to first"); ?>
            </p>
        <?php endif; ?>
    </div>
</body>
</html>