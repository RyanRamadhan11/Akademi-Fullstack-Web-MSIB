<?php
require_once 'MusikPetik.php';

class Gitar implements MusikPetik{
    public function petik()
    {
        echo '</br>Gitar dipetik suaranya jreng...jren...jret';
    }
}