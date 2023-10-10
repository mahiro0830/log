<?php
require_once dirname( __FILE__ ) . '/ShoppingPoint.php';

// 曜日ポイントクラス
class WeekDayPoint
{
    // 今日が金曜日なら、1ポイント加算するメソッド
    public function addWeekDayPoint( string $youbi )
    {
        if ( $youbi === 'Fri' ) {
            ShoppingPoint::countUpPoint();
        }
    }
}

// 1,000円以上の購入金額の時に、1ポイント加算する関数
function addPricePoint( int $price )
{
    if ( $price >= 1000 ) {
        ShoppingPoint::countUpPoint();
    }
}

// 初期ポイントは0とする
ShoppingPoint::$point = 0;

// 購入した時点で無条件に1ポイント加算する（結果：1）
ShoppingPoint::countUpPoint();
echo ShoppingPoint::$point . '<br />';

// 曜日によって1ポイント加算する（結果：2）
$weekDayPoint = new WeekDayPoint();
$weekDayPoint->addWeekDayPoint( 'Fri' );
echo ShoppingPoint::$point . '<br />';

// 購入金額によって1ポイント加算する（結果：3）
addPricePoint( 5000 );
echo ShoppingPoint::$point . '<br />';
