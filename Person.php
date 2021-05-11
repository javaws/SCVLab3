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
	class Person extends Man{
		var $hb,$fs,$tm,$tv,$im;
		function __construct($nm,$dt,$ys,$s,$hb,$fs,$tm,$tv,$im){
			Man::Man($nm,$dt,$ys,$s);
			$this->hb=$hb;$this->fs=$fs;
			$this->tm=$tm;$this->tv=$tv;
			$this->im=$im;
		}
		function getHobby(){return $this->hb;}
		function getFriends(){return $this->fs;}
		function getMusic(){return $this->tm;}
		function getVideo(){return $this->tv;}
		function getIcons(){return $this->im;}
		function setCokies($cnm){
			if(isset($_COOKIE[$cnm])){
				$ms=split($_COOKIE[$cnm],'|');
				$this->nm=$ms[0];$this->dt=$ms[1];
				settype($ms[2],"int");$this->ys=$ms[2];
				settype($ms[3],"bool");$this->s=$ms[3];
				$this->hb=$ms[4];$this->fs=split($ms[5],'^');
				$this->tm=$ms[6];$this->tv=$ms[7];
				$this->im=$ms[8];
			}
		}
		function getCokies($cnm){
			$rs=$this->nm.'|'.$this->dt.'|'.$this->ys;
			$rs.='|'.(($this->s)?1:0).'|';
			$rs.=$this->hb.'|';$t="";
			$ln=count($this->fs)-1;
			for($i=0;$i<$ln;$i++){
				$t.=$this->fs[$i].'^';
			}$t.=$this->fs[$ln];
			$rs.=$t.'|'.$this->tm.'|';
			$rs.=$this->tv.'|'.$this->im;
			setcookie($cnm,$rs,time()+3600,'/');
		}
	}
	function getPersonOfDiv($pr){
		static $w=0;$w++;
		return'<div id="dv'.$w.'" class="dv">
				<img class="img" src="img/'.$pr->getIcons().'">
				<h2 class="hnm">'.$pr->getName().'</h2>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Дата народження: '.$pr->getDateOfBirth().'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Ваш вік: '.$pr->getYear().'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Стать: '.(($pr->getSex())?'Чоловіча':'Жіноча').'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Любиме заняття: '.$pr->getHobby().'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Любима музика: '.$pr->getMusic().'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Любиме відео: '.$pr->getVideo().'</div>
				<div class="tx" style="position:relative;left:7px;margin-top:3px;">Дружі: '.implode(", ",$pr->getFriends()).'</div>
				<button id="bt'.$w.'" class="io btm btr1" style="position:relative;text-align:center;margin-top:10px;margin-bottom:10px;">Дізнатися більше</button>
			</div>';
	}
	function split($str,$ch){
		$rs=array("");$ln=strlen($str);
		$j=0;$st="";
		for($i=0;$i<$ln;$i++){
			if($str[$i]==$ch){$j++;$rs[$j]="";}
			else $rs[$j].=$str[$i];
		}
		return $rs;
	}
?>