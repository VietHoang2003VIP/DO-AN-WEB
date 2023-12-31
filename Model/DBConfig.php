<?php  
    class Database{
        private $user="root";
        private $host="localhost";
        private $pass="";
        private $name="Database";
        private $conn=null;
        private $result=null;

        function connect() {
            $this->conn=new mysqli($this->host,$this->user,$this->pass,$this->name);
        
            if($this->conn){
                mysqli_query($this->conn,"SET NAMES 'utf8'");
            }   
            else{
                echo "kết nối thất bại".mysqli_connect_error();
                exit();
            }
            return $this->conn;
        }
        public function disconnect(){
            $this->conn->close();
        }
        
        //thực thi câu truy vấn
        public function execute($sql){
            $this->result =$this->conn->query($sql);
            return $this->result;
        }

        //phương thức lấy dữ liệu
        public function getData(){
            if($this->result){//kiểm tra xem đã chạy câu lệnh truy vấn hay chưa(câu lệnh truy vấn có tồn tại hay không)
                $data=mysqli_fetch_array($this->result);//mysqli_fetch_array là 1 mảng lưu trữ các dữ liệu của 1 bản ghi khi chạy câu truy vấn
            }
            else{
                $data=0;
            }
            return $data;
        }

        //phương thức lấy toàn bộ dữ liệu cua
        public function getAllData($table){
            $sql="select*from $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data=0;
            }
            else{//kiểm tra xem đã chạy câu truy vấn hay chưa 
                while($datas=$this->getData()){//trong khi $this->getData() còn dữ liệu
                    $data[]=$datas;
                }
            }
            return $data;
        }
        public function getDataBySQL($sql){
            $this->execute($sql);
            if($this->num_rows()==0){
                $data=0;
            }
            else{
                while($datas=$this->getData()){
                    $data[]=$datas;
                }
            }
            return $data;
        }

        //phương thức đếm số bản ghi
        public function num_rows(){
            if($this->result){
                $num=mysqli_num_rows($this->result);
            }
            else{
                $num=0;
            }
            return $num;
        }

        //phương thức thêm dữ liệu
        public function InsertData($Object,$values) {//$object là đối tượng cần chèn, $values là các dữ liệu của đối tượng đó
            if($Object=="Product"){
                $pname=$values->getPname();
                $pimage=$values->getPimage();
                $pdesc=$values->getPdesc();
                $pprice=$values->getPprice();
                $pquantity=$values->getPquantity();
                $pstatus=$values->getPstatus();
                $cid=$values->getCid();
                $sid=$values->getSid();
                $colorid=$values->getColorid();
                $sql="INSERT INTO Product(pid,pname,pimage,pdesc,pprice,pquantity,pstatus,cid,sid,colorid)
                VALUES(null,'$pname','$pimage','$pdesc',$pprice,$pquantity,$pstatus,$cid,$sid,$colorid)";
                return $this->execute($sql);
            }
            else if($Object=="Categories"){
                $sql="INSERT INTO Categories()";
            }
            else if($Object=="Color"){

            }
            else if($Object=="Supplier"){
                
            }
            else if($Object=="User"){

            }
            else if($Object=="Cart"){

            }
        }
        public function DeleteData($Object,$Id){
            if($Object=="Product"){

            }
            else if($Object=="Categories"){

            }
            else if($Object=="Color"){

            }
            else if($Object=="Supplier"){
                
            }
            else if($Object=="User"){

            }
            else if($Object=="Cart"){
                
            }
        }
        public function UpdateData($Object,$values){
            if($Object=="Product"){

            }
            else if($Object=="Categories"){

            }
            else if($Object=="Color"){

            }
            else if($Object=="Supplier"){
                
            }
            else if($Object=="User"){

            }
            else if($Object=="Cart"){
                
            }
        }
        public function SearchProduct($key){
            $sql="SELECT*FROM product WHERE pname like '%$key%' or pdesc like N'%$key%'";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data=0;
            }
            else{//kiểm tra xem đã chạy câu truy vấn hay chưa 
                while($datas=$this->getData()){//trong khi $this->getData() còn dữ liệu
                    $data[]=$datas;
                }
            }
            return $data;
        }
    }

?>