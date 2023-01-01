<?php
//function 1
 function greeting()
{
   echo "Welcome to code IT";
}

//uopload image
function uploadImage($request,$object,$fileName){
    if($request->hasFile($fileName)){
        $file = $request->$fileName;
        $newName = time() . "." . $file->getClientOriginalExtension();
        $file->move("images",$newName);
        $object->$fileName = "images/$newName";
    }
}

//function 3

//function 4
