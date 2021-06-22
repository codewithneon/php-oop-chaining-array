<?php 


class ClassApp {
    
    protected $id, $name, $age;

    public function whereName($name)
    {
        $this->name=$name;
    }
    public function whereAge($age)
    {
        $this->age=$age;
    }

    public function get()
    {
        return $this->name.'-'.$this->age;
    }
}