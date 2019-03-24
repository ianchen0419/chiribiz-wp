var nowPath=location.pathname.split('/').pop();

//menu highlight
function menuHighlight(){
	var menuList=document.querySelectorAll('nav li');
	if(nowPath==='' || nowPath===''){
		menuList[0].classList.add('active');
	}else if(nowPath==='products' || nowPath==='miraitoukei' || nowPath==='asahiru' || nowPath==='dogadehazard' || nowPath==='location-passport' || nowPath==='roadinfo' || nowPath.indexOf('miraishoken')===0 || nowPath==='act-terms' || nowPath==='privacy-policy'){
		menuList[1].classList.add('active');
	}else if(nowPath==='company' || nowPath==='outline' || nowPath==='message' || nowPath==='books'){
		menuList[2].classList.add('active');
	}else if(nowPath==='blog'){
		menuList[3].classList.add('active');
	}else if(nowPath==='contact-us'){
		menuList[4].classList.add('active');
	}
}
menuHighlight();

function goTop(){
	var id=window.setInterval(function(){

		var nowLength;
		if(navigator.userAgent.indexOf('Chrome')!==-1){
			nowLength=document.documentElement.scrollTop;
		}else{
			nowLength=document.body.scrollTop;
		}

		if(nowLength==0){
			clearInterval(id);
		}else if(nowLength<30){
			window.scrollBy(0,-1);
		}else{
			window.scrollBy(0,-30);
		}
		
	},10);
}

var inputs=document.querySelectorAll('#myForm input:not([type=submit]');
var emails=document.querySelectorAll('#myForm input[type=email]');
var textArea=document.querySelector('#myForm textarea');
var stepPath=document.querySelectorAll('.contact-path li');

function resetStepPath(idx){
	document.querySelector('.contact-path li.active').classList.remove('active');
	stepPath[idx].classList.add('active');
}

function setValid(){
	if(emails[0].value !== emails[1].value){
		emails[1].setCustomValidity('メールアドレスを確認してください');
	}else{
		emails[1].setCustomValidity('');
	}
}

function goComfirm(th,e){
	e.preventDefault();
	myForm.reportValidity();
	
	if(myForm.checkValidity()==true){


		th.parentNode.hidden=true;
		comfirmButtons.hidden=false;
		myForm.classList.add('in-comfirm');
		for(i=0;i<inputs.length;i++){
			inputs[i].readOnly=true;
			inputs[i].disabled=true;
		}
		textArea.readOnly=true;
		textArea.disabled=true;
	}

	resetStepPath(1);

}

function goBack(th,e){
	e.preventDefault();
	th.parentNode.hidden=true;
	nextButton.hidden=false;
	myForm.classList.remove('in-comfirm');
	for(i=0;i<inputs.length;i++){
		inputs[i].readOnly=false;
		inputs[i].disabled=false;
	}
	textArea.readOnly=false;
	textArea.disabled=false;

	resetStepPath(0);
}

function goSend(th,e){
	e.preventDefault;
	for(i=0;i<inputs.length;i++){
		inputs[i].readOnly=false;
		inputs[i].disabled=false;
	}
	textArea.readOnly=false;
	textArea.disabled=false;
	myForm.submit();
}