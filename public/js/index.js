window.onload=function(){
	//***************************************************************
	//导航栏按钮
	var oBtn1=document.getElementById('category');
	var oBtn2=document.getElementById('search');
	var oBtn3=document.getElementById('record');
	oBtn1.onclick=function(){
		navOnClick('books');
		setNav('category');
	}
	oBtn2.onclick=function(){
		navOnClick('search_result');
		setNav('search');
	}
	oBtn3.onclick=function(){
		navOnClick('borrow_record');
		setNav('record');
	}
	//*****************************************************************
	//推荐书目定位
	window.onscroll=function(){
		var top;
		var oRecomendation=document.getElementById('rec_cont');
		top=document.documentElement.scrollTop+document.body.scrollTop;
		if(top<=250) {oRecomendation.style.top=280-top;}
		else{oRecomendation.style.top=30;}
	}		
	//*****************************************************************
	//推荐书目滚动
	bookScroll();

	//*******************************************************************
	var oSearchBtn=document.getElementById('s_btn');
	var oSearchInput=document.getElementById('search_bl').getElementsByTagName('input')[0];
	//回车搜索
	oSearchInput.onkeypress=function()
	{
		if(event.keyCode==13||event.which==13)
		search_book();
		// alert('我要开始查找了！')
	}

	//搜索按钮	
	oSearchBtn.onclick=function()
	{	
		search_book();
	};
	function search_book()
	{
		var xmlhttp;
    	if (window.XMLHttpRequest)
    	{
     		 	// code for IE7+, Firefox, Chrome, Opera, Safari
     		xmlhttp=new XMLHttpRequest();
     	}
     	else
     	{// code for IE6, IE5
      		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    	}
		//alert(xmlhttp);
		var id = oSearchInput.value;
		//alert(id);
		var url = 'http://localhost:8000/s?wd=' + id;
		 xmlhttp.open('get', url, true);
		xmlhttp.onreadystatechange = function()
		{
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				document.getElementById('search_result').innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.send();
	}

}

//导航栏按钮
	function navOnClick(nav){
		var aContain=document.getElementById('main_cont').getElementsByTagName('div');
		for (var i = aContain.length - 1; i >= 0; i--) {
			if(aContain[i].className=='a_cont')
			{aContain[i].style.display='none';}
		};
		for (var i = aContain.length - 1; i >= 0; i--) {
			if(aContain[i].id==nav)
			{
				aContain[i].style.display='block';
			}
		};
	}

	function setNav(nav){
		var aBtn=document.getElementById('nav').getElementsByTagName('a');
		for (var i = aBtn.length - 1; i >= 0; i--) {
			if(aBtn[i].id==nav)
			{
				aBtn[i].className='setNav';
			}
			else
			{
				aBtn[i].className='';
			}
		};
	}

//推荐书目滚动
	function bookScroll()
	{
		var oRec=document.getElementById('rec_cont');
		var oRecContainer=document.getElementById('rec_container');
		var aDiv=oRecContainer.getElementsByTagName('div');
		var aRec=[];
		
		function getARec()
		{
			for (var i = 0; i < aDiv.length; i++) 
			{
				if(aDiv[i].className=='a_rec')
					aRec.push(aDiv[i]);
			};
			return aRec;
		}
		getARec();
		var length=aRec.length
		if(length>3)
		{
			oRecContainer.innerHTML+=oRecContainer.innerHTML;
		}
		aRec=[];
		getARec();
		// alert(aRec.length);
		var timer=null;
		var myTimer=null;
		clearInterval(timer);
		timer=setInterval(function()
		 	{
		 		if(aRec[0].offsetTop<=(-170*aRec.length/2))
		 		{
		 			clearInterval(myTimer);
		 			aRec[0].style.marginTop=0;	
		 		}
		 		moveUP(aRec);
		 		
		 	},1000);
		 function moveUP(obj)
		 {	
		 	var topNow=obj[0].offsetTop;
		 	clearInterval(myTimer);
		 	
		 	myTimer=setInterval(function()
		 	{
		 			if(obj[0].offsetTop<=topNow-170)
		 			{
		 				clearInterval(timer);	
		 			}
		 			else
		 			{
		 				obj[0].style.marginTop=obj[0].offsetTop-17;
		 			}
		 	},20);
		 	// obj[0].style.marginTop=obj[0].offsetTop-170;
		 }
	}
