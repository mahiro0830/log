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
            'title' => '静的変数の動作確認（1）',
            'link'  => 'static-variable1/main.php',
        ),
        array(
            'title' => '静的変数の動作確認（2）',
            'link'  => 'static-variable2/main.php',
        ),
        array(
            'title' => 'シングルトンの動作確認',
            'link'  => 'singleton/main.php',
        ),
        array(
            'title' => 'クラスの継承（抽象クラス）',
            'link'  => 'abstract/main.php',
        ),
        array(
            'title' => 'インターフェイス',
            'link'  => 'interface/main.php',
        ),
        array(
            'title' => 'インターフェイス2',
            'link'  => 'interface2/main.php',
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
