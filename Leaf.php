<?php

include_once 'Component.php';

class File extends FileSystemComponent {
    public $name;
    public $parent;

    public function __construct($name) {
        $this->name = $name;
    }

    public function display() {
        echo "File: " . $this->name . "\n";
    }

    public function addParent($folder) {
        $this->parent = $folder;
    }

    public function showParent() {
        echo "\nFile: " . $this->name . "\n";
        echo "Parent: " . $this->parent . "\n";
    }
}

?>