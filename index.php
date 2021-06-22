<?php 

class ClassApp {
    
    protected $id, $name, $age, $data=[];

    public function whereName($name)
    {
        array_push($this->data, $name);

        return $this;
    }
    public function whereAge($age)
    {
        array_push($this->data, $age);
        return $this;
    }

    public function get()
    {
        return $this->data;
    }
}

$app=new ClassApp();


echo json_encode(
    $app
    ->whereAge('1')
    ->whereAge('2')
    ->whereAge('3')
    ->whereAge('4')
    ->whereAge('5')
    ->whereName('one')
    ->whereName('two')
    ->whereName('three')
    ->whereName('four')
    ->whereName('five')
    ->whereName('six')
    ->get());
