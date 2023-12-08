<?php namespace SajjadValidation;


class Validation{


    public function require(array $data , string $fild) : bool
    {
       return isset($data[$fild]);
    }

}