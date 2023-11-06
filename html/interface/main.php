<?php
/**
 * Sendable インターフェイスの定義
 */
interface Sendable
{
    public function sendMessage();
}

/**
 * Slackメール送信Botのクラスを定義
 */
class SlackBot implements Sendable
{
    /**
     * メッセージを送信するメソッド
     */
    public function sendMessage()
    {
        echo 'Slackにメッセージを送信しました。<br />';
    }
}

/**
 * ChatWorksメール送信Botクラスを定義
 */
class ChatworksBot implements Sendable
{
    /**
     * メッセージを送信するメソッド
     */
    public function sendMessage()
    {
        echo 'ChatWorksにメッセージを送信しました。<br />';
    }
}

/**
 * メッセージ送信クラスを定義
 */
class MessageSender
{
    public function sender( Sendable $sendable )
    {
        $sendable->sendMessage();
    }
}

$messageSender = new MessageSender();
$slackBot      = new SlackBot();
$chatworksBot  = new ChatworksBot();

$messageSender->sender( $slackBot );
$messageSender->sender( $chatworksBot );
