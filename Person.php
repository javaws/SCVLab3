<?php
	class Man{
		var $nm,$dt,$ys,$s;
		function Man($nm,$dt,$ys,$s){
			$this->nm=$nm;$this->dt=$dt;
			$this->ys=$ys;$this->s=$s;
		}
		function getName(){return $this->nm;}
		function getDateOfBirth(){return $this->dt;}
		function getYear(){return $this->ys;}
		function getSex(){return $this->s;}
	}
?>