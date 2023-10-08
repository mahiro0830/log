<?php declare( strict_types=1 ); ?>
<body>
<?php
    require_once dirname( __FILE__ ) . '/Task.php';
    require_once dirname( __FILE__ ) . '/TaskSheet.php';

    // taskSheetインスタンスの生成
    $taskSheet = new TaskSheet();

    // TODOタスク「パスポートの更新」を作る
    $task1 = new Task();
    $task1->name = 'パスポートを更新する';
    $task1->progress = 100;
    $taskSheet->addTask( $task1 );

    // TODOタスク「買い出しに行く」を作る
    $task2 = new Task();
    $task2->name = '買い出しに行く';
    $task2->progress = 50;
    $taskSheet->addTask( $task2 );
?>

<h2>タスク一覧</h2>
<?php $taskSheet->show(); ?>
</body>
