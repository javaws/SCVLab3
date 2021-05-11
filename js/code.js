function HCenterMenuPanel(lmb){
	var a=document.getElementsByClassName("mnt"),u,br;
	u=document.getElementById("mbd1");
	var s=a[0].clientHeight,f=u.clientHeight;
	var t=(s-f)/2;
	for(i=1;i<=lmb;i++){
		document.getElementById("mbd"+i).style.top=t+"px";
	}
}
function FCenterMenuPanel(lmb){
	var a=document.getElementsByClassName("fmnt"),u,br;
	u=document.getElementById("fmbd1");
	var s=a[0].clientHeight,f=u.clientHeight;
	var t=(s-f)/2;
	for(i=1;i<=lmb;i++){
		document.getElementById("fmbd"+i).style.top=t+"px";
	}
}
function CenterMasObj(cbd,cnm,ipr){
	var b=document.getElementsByClassName(cbd)[0].clientWidth;
	var ob=document.getElementsByClassName(cnm),s=0,l=ob.length;
	for(var i=0;i<l;i++){
		s+=ob[i].clientWidth;
		s+=parseInt(ob[i].style.borderWidth)*2;
	}
	s=s+ipr*(l-1);
	var cb=((b%2==1)?(b-1)/2:b/2),ci=((s%2==1)?(s-1)/2:s/2),o=cb-ci,j=0;
	o=o+parseInt(ob[0].style.borderWidth);
	for(var i=0;i<l;i++){
		ob[i].style.left=(o+j)+"px";
		j=j+(parseInt(ob[i].style.borderWidth)*2)+ob[i].clientWidth+ipr;
	}
}
function centerWidth(cls,clo,nm){
	var a=document.getElementsByClassName(cls),u,br;
	u=document.getElementsByClassName(clo);
	br=parseInt(u[nm].style.borderWidth);
	var s=a[0].clientWidth,f=u[nm].clientWidth;
	var t=(s-(br*2+f))/2;u[nm].style.left=t+"px";
}
function centerHeight(cls,clo,nm){
	var a=document.getElementsByClassName(cls),u,br;
	u=document.getElementsByClassName(clo);
	br=parseInt(u[nm].style.borderWidth);
	var s=a[0].clientHeight,f=u[nm].clientHeight;
	var t=(s-(br*2+f))/2;u[nm].style.top=t+"px";
}
$(document).ready(function(){
	document.getElementsByClassName("btc")[0].style.borderWidth="0px";
	document.getElementsByClassName("btc")[1].style.borderWidth="0px";
	document.getElementsByClassName("btc")[2].style.borderWidth="0px";
	document.getElementsByClassName("btc")[3].style.borderWidth="0px";
	document.getElementsByClassName("fbtc")[0].style.borderWidth="0px";
	document.getElementsByClassName("fbtc")[1].style.borderWidth="0px";
	document.getElementById('dv1').style.borderWidth="3px";
	document.getElementById('bt1').style.borderWidth="2px";
	document.getElementById('dv1').style.top="95px";
	document.getElementById('dv2').style.borderWidth="3px";
	document.getElementById('bt2').style.borderWidth="2px";
	document.getElementById('dv2').style.top="95px";
	document.getElementById('dv3').style.borderWidth="3px";
	document.getElementById('bt3').style.borderWidth="2px";
	document.getElementById('dv3').style.top="95px";
	document.getElementById('dv4').style.borderWidth="3px";
	document.getElementById('bt4').style.borderWidth="2px";
	document.getElementById('dv4').style.top="95px";
	HCenterMenuPanel(4);CenterMasObj("bdc","btc",35);
	CenterMasObj("bdc",'dv',7);centerWidth("dv","io",0);
	centerWidth("dv","io",1);centerWidth("dv","io",2);
	centerWidth("dv","io",3);FCenterMenuPanel(2);
	CenterMasObj("bdc","fbtc",120);
});
	