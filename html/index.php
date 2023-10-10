<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    <?php

    $links = array(
        array(
            'title' => 'インスタンスを別クラスに渡す',
            'link'  => '3-2-5/main.php',
        ),
        array(
            'title' => '静的変数の動作確認',
            'link'  => 'static-variable/main.php',
        ),
        array(
            'title' => 'シングルトンの動作確認',
            'link'  => 'singleton/main.php',
        ),
    );

    echo '<ul>';

    foreach ( $links as $link )
    {
        echo '<li><a href="/' . $link[ 'link' ] . '">' . $link[ 'title' ] . '</a></li>';
    }
    
    echo '</ul>';

    ?>
</body>
</html>
