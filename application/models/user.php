<?php
class User extends Eloquent{
    /* public static $table = 'non-default table name'; */
    public function user(){
        return $this->belongs_to('Users');
    }
}
    


