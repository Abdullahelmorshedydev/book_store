<?php

namespace App\Traits;

trait UploadFile
{
    public static function upload($input, $path)
    {
        $extension = $input->getClientOriginalExtension();
        $imageName = time() . rand(10000, 20000) . '.' . $extension;
        $input->move(public_path($path), $imageName);
        return $imageName;
    }

    public static function update($input, $path, $lastName, $data)
    {
        if (isset($data)) {
            $data = self::upload($input, $path);
            self::delete($path, $lastName);
            return $data;
        }
        return $lastName;
    }

    public static function delete($path, $name)
    {
        if (file_exists(public_path($path . $name))) {
            unlink(public_path($path . $name));
        }
    }
}
