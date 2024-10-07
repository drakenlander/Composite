<?php

include_once 'Component.php';

class Folder extends FileSystemComponent {
    private $name;
    private $children = array();

    public function __construct($name) {
        $this->name = $name;
    }

    public function add(FileSystemComponent $component) {
        $this->children[] = $component;
    }

    public function addParent($folder) {

    }

    public function display() {
        echo "Directory: " . $this->name . "\n";
        
        foreach ($this->children as $child) {
            $child->display();
            $child->addParent($this->name);
        }
    }
}

?>