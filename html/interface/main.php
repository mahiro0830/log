<?php
interface Drawable
{
    public function draw();
}

class Circle implements Drawable
{
    public function draw()
    {
        echo '円を描写します。<br />';
    }
}

class Rectangle implements Drawable
{
    public function draw()
    {
        echo '四角形を描写します。<br />';
    }
}

class Drawer
{
    public function shapeDraw( Drawable $drawable )
    {
        $drawable->draw();
    }
}

$drawer = new Drawer();
$circle    = new Circle();
$rectangle = new Rectangle();

$drawer->shapeDraw( $circle );
$drawer->shapeDraw( $rectangle );
