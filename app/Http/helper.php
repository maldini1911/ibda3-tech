<?php

//== Function Langs
if(!function_exists('lang')){

    function lang(){

        if(session()->has('lang')){

            return session('lang');

        }else{

            return 'en';
        }
    }
}

//== Function Dir
if(!function_exists('direction')){

    function direction(){

        if(session()->has('lang')){

            if(session('lang') == 'ar'){

                return 'ltr';

            }else{

                return 'rtl';
                
            }

        }else{

            return "rtl";
        }
    }
}

//== Fetch Uploade Controller
if(!function_exists('Up')){

    function Up(){
        return new \App\Http\Controllers\BackEnd\Upload;
    }
}

//== Validate Image
if(!function_exists('validate_image')){

    function validate_image($ext = null){
      if($ext === null){

        return "sometimes|nullable|image|mimes:jpg,jpeg,png,gif,bmp,svg";

      }else{

        return 'sometimes|nullable|image|mimes:' . $ext;
      }
    }
}