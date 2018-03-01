// JavaScript Document

function std_info()
{
	$("#solutions").slideToggle("slow");
	
}

function basic()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("basicinfo.php");
}
function add_record()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("basic_info_form.php");
}
function update_std_basic(){
    document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
    $("#content3").load("viewbasic.php");
}

function send_basic_info()
{
	var stdid=document.getElementById('std_id').value;
	var stdname=document.getElementById('std_name').value;
	var fname=document.getElementById('fname').value;
	var mname=document.getElementById('mname').value;
	var cadd=document.getElementById('cadd').value;
	var cnum=document.getElementById('cnum').value;
	var email=document.getElementById('email').value;
	var db=document.getElementById('db').value;
	var reg=document.getElementById('reg').value;
	var nation=document.getElementById('nation').value;
	if(NotEmpty(stdid,stdname,fname,mname,cadd,cnum,email,db,reg,nation,"Please fill the required field"))
	{
		
		if(isID(stdid,"Invalid ID"))
		{
			if(isAlpha(stdname,fname,mname,reg,nation,"Please enter only letters for these field"))
			{
				if(PhoneValidator(cnum,"Invalid Number"))
				{
					if(emailValidator(email,"Invalid Email"))
					{
		
	$.post("insert_basic_info.php",{id:stdid,name:stdname,fname:fname,mname:mname,cadd:cadd,cnum:cnum,email:email,db:db,reg:reg,nation:nation},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + stdid + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	}
				}
				}
			}
		}
	
	
}
function PhoneValidator(elem,helperMsg){
    var phoneExp = /^[0]+[1]+[5-9]+[0-9]{8,8}$/;
    if(elem.match(phoneExp)){
    document.getElementById('cnum_validate').innerHTML=" ";
	
    return true;
    }
    else{
       document.getElementById('cnum_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	   }
}
function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.match(emailExp)){
    document.getElementById('email_validate').innerHTML=" ";
	
    return true;
	}
	else{
		document.getElementById('email_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	}
}



function NotEmpty(elem1,elem2,elem3,elem4,elem5,elem6,elem7,elem8,elem9,elem10,helperMsg)
{
	if(elem1.length==0)
	{
	document.getElementById('stdid_validate').innerHTML=helperMsg;
	elem1.focus();
	return false;
	}
	else if(elem2.length==0)
	{
	document.getElementById('stdid_validate').innerHTML="";
	document.getElementById('stdname_validate').innerHTML=helperMsg;
	elem2.focus();
	
	return false;
	}
	else if(elem3.length==0)
	{
	document.getElementById('stdname_validate').innerHTML="";
	document.getElementById('fname_validate').innerHTML=helperMsg;
	elem3.focus();
	
	return false;
	}
	else if(elem4.length==0)
	{
	document.getElementById('fname_validate').innerHTML="";
	document.getElementById('mname_validate').innerHTML=helperMsg;
	elem4.focus();
	
	return false;
	}
	else if(elem5.length==0)
	{
	document.getElementById('mname_validate').innerHTML="";
	document.getElementById('cadd_validate').innerHTML=helperMsg;
	elem5.focus();
	
	return false;
	}
	else if(elem6.length==0)
	{
	document.getElementById('cadd_validate').innerHTML="";
	document.getElementById('cnum_validate').innerHTML=helperMsg;
	elem6.focus();
	
	return false;
	}
	else if(elem7.length==0)
	{
	document.getElementById('cnum_validate').innerHTML="";
	document.getElementById('email_validate').innerHTML=helperMsg;
	elem7.focus();
	
	return false;
	}
	else if(elem8.length==0)
	{
	document.getElementById('email_validate').innerHTML="";
	document.getElementById('db_validate').innerHTML=helperMsg;
	elem8.focus();
	
	return false;
	}
	else if(elem9.length==0)
	{
	document.getElementById('db_validate').innerHTML="";
	document.getElementById('reg_validate').innerHTML=helperMsg;
	elem9.focus();
	
	return false;
	}
	else if(elem10.length==0)
	{
	document.getElementById('reg_validate').innerHTML="";
	document.getElementById('nation_validate').innerHTML=helperMsg;
	elem10.focus();
	
	return false;
	}
	else
	return true;
	
}
function isID(elem, helperMsg)
{
	var idExp = /^[0-9]+[0-9]+[0-9]+\-[0-9]+[0-9]+\-[0-9]{2,2}$/;
	if(elem.match(idExp)){
    document.getElementById('stdid_validate').innerHTML=" ";
    return true;
	}else{
		document.getElementById('stdid_validate').innerHTML=helperMsg;
       elem.focus();
       return false;
	}
}
function isAlpha(elem1,elem2,elem3,elem4,elem5,helperMsg)
{ 
	var alphaExp=/^[a-zA-Z\ \.]+$/;
	if(elem1.match(alphaExp) && elem2.match(alphaExp) && elem3.match(alphaExp) && elem4.match(alphaExp) && elem5.match(alphaExp)){
		return true;
	}
	else
	{
		alert(helperMsg);
		return false;
	}
	
}
function load_std_info(object)
{
	 var objstdid=object.value;
    document.getElementById('show').innerHTML='';
    $("#show").load("show_basic_info.php",{id:objstdid});
}
function load_update_basic_info(a)
{
	var objst_no=a;
	document.getElementById('show').innerHTML='';
   $("#show").load("update_basic_info_form.php",{no:objst_no});
	
}
function send_update_basic_info()
{
	var stdid=document.getElementById('std_id').value;
	var stdname=document.getElementById('std_name').value;
	var fname=document.getElementById('fname').value;
	var mname=document.getElementById('mname').value;
	var cadd=document.getElementById('cadd').value;
	var cnum=document.getElementById('cnum').value;
	var email=document.getElementById('email').value;
	var db=document.getElementById('db').value;
	var reg=document.getElementById('reg').value;
	var nation=document.getElementById('nation').value;
	if(NotEmpty(stdid,stdname,fname,mname,cadd,cnum,email,db,reg,nation,"Please fill the required field"))
	{
		
		if(isID(stdid,"Invalid ID"))
		{
			if(isAlpha(stdname,fname,mname,reg,nation,"Please enter only letters for these field"))
			{
				if(PhoneValidator(cnum,"Invalid Number"))
				{
					if(emailValidator(email,"Invalid Email"))
					{
		
	$("#show").load("update_basic_info.php",{id:stdid,name:stdname,fname:fname,mname:mname,cadd:cadd,cnum:cnum,email:email,db:db,reg:reg,nation:nation});
	
		 
               
    
	}
				}
				}
			}
		}
	
	
}
function load_delete_basic_info(a)
{
	var objst_no=a;
	document.getElementById('show').innerHTML='';
    $("#show").load("delete_basic_info.php",{no:objst_no});
	
}
function academic()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("academicinfo.php");
}
function add_record_academic()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("academic_info_form.php");
}
function send_academic_info()
{
	var stdid=document.getElementById('std_id').value;
	var uni_name=document.getElementById('uni_name').value;
	var dept=document.getElementById('dept').value;
	var sem=document.getElementById('semister').value;
	$.post("insert_academic_info.php",{id:stdid,name:uni_name,dept:dept,sem:sem},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + stdid + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	
}
function teachers()
{
	document.getElementById('display').innerHTML="";
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#display").load("teacherinfo.php");
}
function add_record_teacher()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("teacher_info_form.php");
}
function send_teacher_info()
{
	var id=document.getElementById('tea_id').value;
	var name=document.getElementById('tea_name').value;
	var no=document.getElementById('tea_no').value;
	var email=document.getElementById('tea_mail').value;
	var dept=document.getElementById('dept').value;

	$.post("insert_teacher_info.php",{id:id,name:name,no:no,email:email,dept:dept},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + id + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );
	
}
function course()
{
document.getElementById('display').innerHTML="";
document.getElementById('content3').innerHTML='';
document.getElementById('show').innerHTML='';
$("#display").load("courseinfo.php");	
}
function add_course_teacher()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("course_info_form.php");
}
function send_course_info()
{
var id=document.getElementById('course_id').value;
	var name=document.getElementById('course_name').value;
	var dur=document.getElementById('course_dur').value;
	var fee=document.getElementById('course_fee').value;
	var dept=document.getElementById('dept').value;

	$.post("insert_course_info.php",{id:id,name:name,dur:dur,fee:fee,dept:dept},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + id + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );	
}
function batch()
{
document.getElementById('display').innerHTML="";
document.getElementById('content3').innerHTML='';
document.getElementById('show').innerHTML='';
$("#display").load("batch.php");	
}
function add_batch()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("batch_info_form.php");
}
function send_batch_info()
{
var bid=document.getElementById('batch_id').value;
var cid=document.getElementById('course_id').value;


	$.post("insert_batch_info.php",{bid:bid,cid:cid},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + id + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );	
}
function result()
{
document.getElementById('display').innerHTML="";
document.getElementById('content3').innerHTML='';
document.getElementById('show').innerHTML='';
$("#display").load("result.php");
}
function add_result()
{
	document.getElementById('content3').innerHTML='';
	document.getElementById('show').innerHTML='';
	$("#content3").load("result_info_form.php");
}
function send_result_info()
{
var sid=document.getElementById('student_id').value;
var bid=document.getElementById('batch_id').value;
var c=document.getElementById('result_c').value;
var oop=document.getElementById('result_oop').value;
var java=document.getElementById('result_java').value;


	$.post("insert_result_info.php",{sid:sid,bid:bid,c:c,oop:oop,java:java},
	function (data) {
        
        if($.trim(data)=="false")
        
		alert("Already " + id + " exists");
		 else
		 
               document.getElementById('content3').innerHTML='Record Added successfully.';
               
	}
		   
		   );	
}
