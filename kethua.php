
<?php
	class car{
		public $color = "Màu vàng";
		public function material(){
			return "Chiếc xe được làm bằng vàng";
		}
		public function speed(){
			return "Vận tốc tối đa đạt được là 399km/h";
		}
	}
 
	class moto extends car{
		public function colormoto(){
			return $this->color;
		}		
	}
 
	$moto = new moto;
	//in ra màu sắc của xe máy kế thừa từ lớp cha:
	echo $moto->colormoto();
	//in ra vận tốc xe máy kế thừa từ lớp cha:
	echo "<br>".$moto->speed();


	echo "<br>"."vd2";

// vd2 :

	class student{
		var $name;
		var $mssv;
		function __construct($name ="",$mssv = 0) {
			$this->name= $name;
			$this->mssv= $mssv;
		}

		function getInfo(){
			echo "<br> Tên tôi là $this->name - mã số sinh viên là $this->mssv";
		}
	}
    class Me extends student{

    }

    $name = new Me('Nguyễn Trung Dũng',7326);
    $name->getInfo(); 
?>