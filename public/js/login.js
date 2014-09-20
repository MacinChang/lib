window.onload=function(){
    // 页面初始化时对所有input做初始化
//  PlaceHolder.init();
//  var aInput=document.getElementsByTagName('input');
//  for (var i = 0; i <= aInput.length; i++) {
//      aInput[i].onfocus=function(){
//          if(this.className=='input')this.className='onFocus';
//      }
//      aInput[i].onblur=function(){
//          if(this.className=='onFocus')this.className='input';
//      }
//  }
// }



// var PlaceHolder = {
//     _support: (function() {
//         return 'placeholder' in document.createElement('input');
//     })(),
 
//     // 提示文字的样式，需要在页面中其他位置定义
//     className: 'abc',
//     init: function() {
//         if (!PlaceHolder._support) {
//             // 未对textarea处理，需要的自己加上
//             var inputs = document.getElementsByTagName('input');
//             PlaceHolder.create(inputs);
//         }
//     },
 
//     create: function(inputs) {
//         var input;
//         if (!inputs.length) {
//             inputs = [inputs];
//         }
 
//         for (var i = 0, length = inputs.length; i < length; i++) {
//             input = inputs[i];
//             if (!PlaceHolder._support && input.attributes && input.attributes.placeholder) {
//                 PlaceHolder._setValue(input);
//                 input.addEventListener('focus', function(e) {
//                     if (this.value === this.attributes.placeholder.nodeValue) {
//                         this.value = '';
//                         this.className = '';
//                     }
//                 }, false);
 
//                 input.addEventListener('blur', function(e) {
//                     if (this.value === '') {
//                         PlaceHolder._setValue(this);
//                     }
//                 }, false);
//             }
//         }
//     },
 
//     _setValue: function(input) {
//         input.value = input.attributes.placeholder.nodeValue;
//         input.className = PlaceHolder.className;
//     }
//****************************************************************
//登陆注册切换
    var oSwitchBtn=document.getElementById('switch');
    var oSwitchWords=oSwitchBtn.getElementsByTagName('span')[0];

    oSwitchBtn.onmouseover=function()
    {
        this.style.borderColor='#eee';
    }
     oSwitchBtn.onmouseout=function()
    {
        this.style.borderColor='#888';
    }

    oSwitchBtn.onclick=function()
    {
       
        if(oSwitchWords.innerHTML=='注册')
        {
            // alert('是注册');
             switchFromTo('login','register');
             oSwitchWords.innerHTML="登录"
        }
        else
        {
            switchFromTo('register','login');
             oSwitchWords.innerHTML="注册"
            // alert(this.innerHTML);
        }
    }
    //切换函数switchFromTo();
    function switchFromTo(objOne,objTwo)
    {
        // alert('I\'m going to '+objTwo+' from '+objOne);
        this.objOne=document.getElementById(objOne);
        this.objTwo=document.getElementById(objTwo);
        // alert(this.objOne.innerHTML);
        this.objOne.style.display='none';
        this.objTwo.style.display='block';
    }

//****************************************************
    //文本框获取焦点变化，失焦判断内容是否合格
    var aInputs=document.getElementsByTagName('input');
    // alert(aInputs[0].placeholder);
    for(i=0;i<aInputs.length;i++)
    {
        aInputs[i].onfocus=function()
        {
            //获取相邻span节点
            var oTip=this.nextSibling;
            clearTips(this,oTip);
            this.style.background='#fff';
            if(this.id='pw2')
            {
                var pw1=document.getElementById('pw').value;
                if(pw1=='')
                {
                    oTip.innerHTML='请先填写密码';
                }
            }
        }
        aInputs[i].onblur=function()
        {
            //获取相邻span节点
            var oTip=this.nextSibling;
            this.style.background='#dff';
            checkCnt(this,oTip);
        }
    }
    //清除提示
    function clearTips(obj,oTip)
    {   
        oTip.innerHTML='';
    }
    //检查内容
    function checkCnt(obj,oTip)
    {
        var type=obj.type;
        // alert(type);
        var val=obj.value;
        // alert(val);
        // alert(obj.nodeName+' + '+oTip.nodeName);
        if(!obj.value)
        {
            oTip.innerHTML='此处不能为空';
            return false;
        }
        if(obj.id=='pw2')
        {
            // alert(obj.id);
            var pw1=document.getElementById('pw').value;
            // alert(pw1);
            // alert(obj.value)
            if(obj.value!=pw1&&pw)
            {
                 oTip.innerHTML='两次输入密码不一致';
            }
        }
    }

//****************************************************
    //登陆注册按钮验证
    var oLoginBtn=document.getElementById('login_button');
    var oRegisterBtn=document.getElementById('register_button');
    var oCancelBtn=document.getElementById('cancel');
    var oNoAccount=document.getElementById('no_account');
    var oForgetBtn=document.getElementById('forget');

    oLoginBtn.onclick=function()
    {
        // alert('login')
        //登陆接口
    }

    oRegisterBtn.onclick=function()
    {
        // alert('register')
        //注册接口
    }

    //取消注册
    oCancelBtn.onclick=function()
    {
        // alert('cancel')
        alert(document.getElementById('pw2').onblur);
        var aRegisterWords=document.getElementById('register').getElementsByTagName('input');
        var aRegisterTips=document.getElementById('register').getElementsByTagName('span');
        for( i=0; i<aRegisterWords.length;i++)
            {
                aRegisterWords[i].value='';
                aRegisterTips[i].innerHTML='';
            }
        switchFromTo('register','login');
        oSwitchWords.innerHTML="注册"
    } 
    //没有账号？  
    oNoAccount.onclick=function()
    {
        switchFromTo('login','register');
        oSwitchWords.innerHTML="登陆"
    }
    //忘记密码？
    oForgetBtn.onclick=function()
    {
         alert('找回密码系统尚未完善，请直接找管理员处理');
    }
};
 