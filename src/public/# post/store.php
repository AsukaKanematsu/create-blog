<?php
$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
    'mysql:host=mysql; dbname=blog; charset=utf8',
    $dbUserName,
    $dbPassword
);

$contents = filter_input(INPUT_POST, 'contents');
$title = filter_input(INPUT_POST, 'title');

// [解説！]ガード節になっている
if (!empty($title) && !empty($contents)) {
    $sql = 'INSERT INTO `blogs`(`title`, `contents`) VALUES(:title, :contents)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $title, PDO::PARAM_STR);
    $statement->bindValue(':contents', $contents, PDO::PARAM_STR);
    $statement->execute();

    // [解説！]リダイレクト処理
    header('Location: ./create.php');
    // [解説！]リダイレクトしても処理が一番下まで続いてしまうので「exit」しておこう！！！
    exit();
}
$error = 'タイトルまたは本文が入力されていません';
?>

<body>
  <div>
    <p><?php echo $error . "\n"; ?></p>
    <a href="./index.php">
        <p>トップページへ</p>
    </a>
  </div>
</body>