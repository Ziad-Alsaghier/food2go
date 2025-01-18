<?php

namespace App\trait;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait image
{
    // This Trait Aboute Image

    public function upload(Request $request,$fileName = 'image',$directory){
        if($request->has($fileName)){// if Request has a Image
            $uploadImage = new request();
            $imagePath = $request->file($fileName)->store($directory,'public'); // Take Image from Request And Save inStorage;
            return $imagePath;
        }
        return Null;
    }

    // This to upload file
    public function uploadFile($file, $directory) {
        if ($file) {
            $filePath = $file->store($directory, 'public');
            return $filePath;
        }
        return null;
    }

    // This Trait Aboute file

    public function upload_array_of_file(Request $request,$fileName = 'image',$directory){
        // Check if the request has an array of files
        if ($request->has($fileName)) {
            $uploadedPaths = []; // Array to store the paths of uploaded files
    
            // Loop through each file in the array
            foreach ($request->file($fileName) as $file) {
                // Store each file in the specified directory
                $imagePath = $file->store($directory, 'public');
                $uploadedPaths[] = $imagePath;
            }
    
            return $uploadedPaths; // Return an array of uploaded file paths
        }
    
        return null;
    }
    
    public function deleteImage($imagePath){
        // Check if the file exists
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }
    
}
