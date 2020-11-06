<?php
class reg {
    public $srno;
    public $name;
    public $email;
    public $contact;
    public $password;
    public $type;
    public $requirement;
    public $otherreq;
    public $space;
    public $date;
    public $slot;
    public $timestamp;

    private $conn;

    public function __construct($conn)
    {
        $this->conn=$conn;
        
    }
    public function adddetails($obj){
        $sql="INSERT INTO reg (srno,name,email,contact,password,type,requirement,otherreq,space,date,slot,timestamp) VALUES('$obj->srno','$obj->name','$obj->email','$obj->contact','$obj->password','$obj->type','$obj->requirement','$obj->otherreq','$obj->space','$obj->date','$obj->slot','$obj->timestamp');";
            $result=mysqli_query($this->conn,$sql);
            if($result==TRUE)
            {
                $msg=["Form successfully submitted"];
            }
            else
            {
                $msg=["Error occurred!!!"];
            }
            
            return json_encode($msg);
    }
    public function getData(){
        $sql="SELECT * FROM reg;";
        $result=mysqli_query($this->conn,$sql);
        $arr=array();
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                $arr[]=$row;
            }
        }
        return json_encode($arr);      
    }

}
?>