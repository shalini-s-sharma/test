<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Contact extends Model
{
    protected $table = "tblcontact";

    public static function insertNewContact($data){
        if(!empty($data) && is_array($data)){
            $insert = DB::insert("
                INSERT INTO tblcontact
                (id, name, email, subject, message) 
            VALUES (
                    NULL, '".$data['name']."', 
                    '".$data['email']."', '".$data['subject']."', 
                    '".$data['message']."'
                )");
            if($insert){
                return 1;
            }
        }else{
            return 0;
        }
    }
    
}

?>
