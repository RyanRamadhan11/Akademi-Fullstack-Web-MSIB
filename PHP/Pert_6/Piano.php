<?php
require_once 'MusikTekan.php';

class Piano implements MusikTekan{
    public function tekan()
    {
        echo '</br>Piano ditekan suaranya ting...ting...ting';
    }
}