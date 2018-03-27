<?php 
	
	class  Webtintuc
	{
		
		
		var $db_con=NULL;
		var $result=NULL;
		
		//kết nối database
		function connect($host,$user,$pass,$database){

			$this->db_con=mysqli_connect($host,$user,$pass,$database);
			mysqli_query($this->db_con,"SET NAMES 'utf8'");
		}

		//Ngắt kết nối
		function disconnect(){
			if(is_resource($this->db_con)){
				mysqli_close($this->db_con);
			}
		}

			//Lấy tin mới nhất
		function getTinmoi($vitri,$sotinlay){
			$qr="select * from tin order by idTin DESC limit $vitri,$sotinlay";

			$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;

		}

			// Tin xem nhiều
		function getTinxemnhieu($vitri,$sotinlay){
			$qr ="select * from tin order by SoLanXem desc limit $vitri,$sotinlay";

			$kq= mysqli_query($this->db_con,$qr) or die (mysqli_error());
			return $kq;
		}
			// lấy loại tin
		function getLoaitin($idLT){
			$qr = "select * from loaitin where idLT = $idLT";
			$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;
		}
			//Tin theo loai
		function getTintheoloaitin($vitri,$sotinlay,$idLT){
			$qr="select * from tin 
					where idLT=$idLT 
					order by idTin DESC 
					limit $vitri,$sotinlay";

			$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;

		}

			// Lấy quảng cáo

		function getQuangcao($vitri){
			$qr="select *from quangcao where vitri=$vitri";
			$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;


		}
			// Lấy image doanh nghiêp;
		function getImage($vitri){
			$qr="select *from quangcao where vitri=$vitri";
			$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;


		}
			// Lấy menu dưới footer
		function getTheloai(){
			$qr="select *from theloai";
				$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;
		}

		function getLoaitintheotheloai($idLT){
			$qr="select *from loaitin where idTL =$idLT";
				$kq = mysqli_query($this->db_con,$qr) or die(mysqli_error());
			return $kq;
		}

	}
 
 ?>