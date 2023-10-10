<?php
// ショッピングポイントクラス
class ShoppingPoint
{
    // 現在のトータルポイント
    public static $point;

    // トータルポイントに1加算するメソッド
    public static function countUpPoint()
    {
        self::$point++;
    }
}
