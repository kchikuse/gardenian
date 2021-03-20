<?php

class DB {

    public function __construct(){
        R::setup(
            "mysql:host=localhost;dbname=gardenian", 
            "root", 
            "root"
        );
    }

    public function goods() {
        return [
            "Emily Elephant", 
            "Peppa Pig", 
            "Suzzie Sheep", 
            "Mummy Pig", 
            "Mummy Dog", 
            "Molly Mole", 
            "Rebecca Rabbit", 
            "Miss Rabbit", 
            "Mummy Rabbit"];
    }
}