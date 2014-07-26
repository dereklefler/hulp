<?php

class Product extends Eloquent {

    protected $table = 'product';

    public function micro() {
        return $this->belongsToMany('micro');
    }

    public function company() {
        return $this->belongsTo('company', 'company_id');
    }
    

}