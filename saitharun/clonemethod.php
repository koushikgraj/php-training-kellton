<?php
class CloneableUser
{
    public $name;
    public $lastname;

    public function __clone()
    {
        echo " we are executing __clone method<br>";
        $this->name = "saitharun" . $this->name;
        $this->lastname = "suthapalli" . $this->lastname;
        
    }
}

$user1 = new Cloneableuser();
$user1->name = "";
$user1->lastname = "";

$user2 = clone $user1;

echo $user2->name;
echo $user2->lastname;
?>