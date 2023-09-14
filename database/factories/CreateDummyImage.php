<?php

namespace Database\Factories;

use Illuminate\Support\Facades\File;

class CreateDummyImage
{

    public static function create($folderName, $fileName):string
    {

        $destinationFolder = storage_path("app/public/images/$folderName/");

        if (!File::exists($destinationFolder)) {
            File::makeDirectory($destinationFolder, 0755, true);
        }

        $main_image_name = time() . '-' . rand(100000, 999999) . '.png';

        File::copy(public_path("style/images/$fileName"), storage_path("app/public/images/$folderName/" . $main_image_name));

        return "images/$folderName/$main_image_name";
    }

}

