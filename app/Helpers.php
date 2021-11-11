<?php



function nama_user(){
   return App\Models\login :: where('id_login',session()->get('id'))->first();
}
  
     
        