<?php

class Micro extends Eloquent {

    protected $table = 'micro';

    public function category() {
        return $this->belongsTo('category');
    }

    public function product() {
        return $this->belongsToMany('product');
    }

}