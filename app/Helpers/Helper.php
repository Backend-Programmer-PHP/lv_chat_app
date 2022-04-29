<?php
namespace App\Helpers;

class Helper {
    public static function makeImageFromName($name) {
        $userImage = "";
        $shortName = "";

        $names = explode(" ", $name);

        foreach ($names as $w) {
            $shortName .= $w[0];
        }

        $userImage = '<div class="profile-image"><h4>'.$shortName.'</h4></div>';
        return $userImage;
    }
}
