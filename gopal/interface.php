<?php
interface gopal {
    public function surname();
}
class krishna implements gopal {
    public function surname() {
        echo "rudru";
    }
}
$animal=new krishna();
$animal->surname();
?>