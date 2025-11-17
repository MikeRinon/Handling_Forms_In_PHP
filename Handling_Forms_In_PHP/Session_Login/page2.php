<?php
session_start();

$lockFile = __DIR__ . '/current_user.json';

function read_locked_user($path) {
    if (!file_exists($path)) return null;
    $json = @file_get_contents($path);
    if (!$json) return null;
    $data = json_decode($json, true);
    return $data['username'] ?? null;
}

if (isset($_POST['logout'])) {
    $locked = read_locked_user($lockFile);
    if (!empty($_SESSION['username']) && $_SESSION['username'] === $locked) {
        @unlink($lockFile);
    }
    session_unset();
    session_destroy();
    header('Location: page1.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $current = read_locked_user($lockFile);

    if ($current && $current !== $username) {
        $_SESSION['login_error'] = "$current is already logged in. Wait for him to logout to first";
        header('Location: page1.php');
        exit();
    }

    $_SESSION['username'] = $username;
    $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);

    $data = ['username' => $username, 'ts' => time()];
    @file_put_contents($lockFile, json_encode($data), LOCK_EX);

    unset($_SESSION['login_error']);

    header('Location: page1.php');
    exit();
}

header('Location: page1.php');
exit();

