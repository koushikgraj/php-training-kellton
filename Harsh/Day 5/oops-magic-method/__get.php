<?php
class abc{
    private $name="harsh";
    //if the property is private or non existing then __get()method automatcally called
    public function __get($property){
        echo "dfskhkgdfjd($property)";
    }
}
$bj= new abc;
// $bj->fds();
$bj->aaa;
?>
<!-- in array  using get method -->
<?php
class xyz{
    private $data = ["name"=>"harsh","course"=>"php","fee"=>"2000"];
    public function __get($key){
        //using array_key_exist to fine whether the array exist or not by if else condition
        if(array_key_exists($key,$this->data)){
            return $this->data[$key];
        }
        else{
            return "this key($key) is not defined";
        }
    }
}
$obj=new xyz();
echo $obj->course;
//this will return that this key is not defined
echo $obj->age;

?>