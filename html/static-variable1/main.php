<?php
class Test
{
    public $num1 = 0;
    public static $num2 = 0;

    public function __construct()
    {
        $this->num1++;
        self::$num2++;
    }
}

echo 'インスタンス $instance1 を生成<br>';
$instance1 = new Test();
echo '$num1の値は' . $instance1->num1 . '<br>';
echo '$num2の値は' . Test::$num2 . '<br>';

echo 'インスタンス $instance2 を生成<br>';
$instance2 = new Test();
echo '$num1の値は' . $instance2->num1 . '<br>';
echo '$num2の値は' . Test::$num2 . '<br>';

$html = <<< HTML
<br>
<br>
考察：<br>
＄num1 は通常の変数<br>
＄num2 は静的変数とする<br>
インスタンスが生成される度に変数 ＄num1 ＄num2 に対して 1 を加算される。<br>
public static 変数名<br>
とすることで、変数内の値はプログラム開始時から終了時まで保持されるため、<br>
＄num2 の方は前回のインスタンス生成時の数値を記憶ているため、1, 2, 3, ... と加算されていく。

HTML;

echo $html;
