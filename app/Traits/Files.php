<?php  
namespace App\Traits;

Trait Files{


    public function uploadFile($file,$path){
       
        $file_extension = $file->getClientOriginalExtension();
        $file_name ="img".time() . '.' . $file_extension;
        $file->move($path, $file_name);
        return  $file_name;
    }



     public static function DeleteFile(string $path):bool{

       $oldFilePath=public_path($path);

        if(file_exists($oldFilePath)){
            unlink($oldFilePath);
            return true;
          }
          return false;
    }
}




?>