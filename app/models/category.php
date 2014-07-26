<?php

class Category extends Eloquent {

    protected $table = 'category';

    public function micro() {
        return $this->hasMany('micro');
    }

}