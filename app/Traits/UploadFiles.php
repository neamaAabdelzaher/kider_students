<?php  
namespace App\Traits;

Trait UploadFiles{


    public function uploadFile($file,$path){
       
        $file_extension = $file->getClientOriginalExtension();
        $file_name ="img".time() . '.' . $file_extension;
        $file->move($path, $file_name);
        return  $file_name;
    }
}




?>