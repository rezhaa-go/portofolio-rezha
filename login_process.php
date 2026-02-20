$username = $_POST['username'];
$password = $_POST['password'];

if ($username =='admin' && $password =='123456') {
    echo 'Login succeeds.';
} else echo 'Login failed.';