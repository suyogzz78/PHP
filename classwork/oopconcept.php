<?php
class Student {
    public $name;
    public $roll;
    public $college;

    public function setData($name, $roll, $college) {
        $this->name = $name;
        $this->roll = $roll;
        $this->college = $college;
    }

    public function Display() {
        return "My name is {$this->name} of roll {$this->roll} of college {$this->college}";
    }
}

$stu1 = new Student();
$stu1->setData("suyog", 1, "Vedas");
echo $stu1->Display(); // Output: My name is suyog of roll 1 of college kcc
?>