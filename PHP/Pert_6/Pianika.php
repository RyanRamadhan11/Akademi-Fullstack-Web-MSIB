<?php
require_once 'MusikTekan.php';
require_once 'MusikTiup.php';

class Pianika implements MusikTekan, MusikTiup{
    public function tiup()
    {
        echo '</br>Pianika ditiup saja suaranya pfuff...pfuff...pfuff';
    }
    public function tekan()
    {
        echo '</br>Pianika ditiup, lalu ditekan suaranya net...not...net...not';
    }
}