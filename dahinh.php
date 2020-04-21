<?php
class Student {
	function address(){
		echo "Hà Nội";
	}
}
class Me extends Student{
	function address(){
		echo "Phú Thọ";
	}
}
class You extends Student{

}
// address được định nghĩa lại nên giá trị được ghi đè thay đổi.
$dung = new Me();
$dung->address();
//  address không được định nghĩa lại nên giá trị lấy từ lớp cha.
$hieu = new You();
$hieu->address();
?>