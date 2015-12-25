var globalvar;
$(document).on('click','.registerUser',function(){
	//var name=$('.name').val();
	var name=$('.name').val();
	var branch=$('.branch').val();
	var phoneno=$('.phoneno').val();
	var admissionno=$('.admissionno').val();
    var  emailid=$('.emailid').val();
    var  password=$('.password').val();
     //var admissionno=$('.admissionno').val();


   

    /*var atpos = emailid.indexOf("@");
    var dotpos = emailid.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
         var emailerror="invalid emailid";*/
      
        
    
    
    
	       
       

	console.log(branch);

	$.ajax({
  	type: "POST",
  	url: "nibeuser/val",
  	data: { username: name,
  		    branch : branch,
  		    phoneno: phoneno,
  		    admissionno:admissionno,
  		    emailid: emailid,
  		    password : password
  		    

  		   
  	 }
	}).done(function( data ) {
      console.log( data);
      if (data=="done") {
      	    
      	   $('#myid2').load('nibeuser/regsuccess');
      	      }
      $('#erreport').empty();
      $('#erreport').append(data);
       
     // $('#blog').html(data).show();
  });
});
$(document).on('click','.loginUser',function(){
	//var name=$('.name').val();
    $('#loginerr').empty();
	var name=$('.emailidl').val();
	var pass=$('.passwordl').val();
	//var branch=$('.branch').val();
	//var phoneno=$('.phoneno').val();
	//var admissionno=$('.admissionno').val();
    //var  emailid=$('.emailid').val();
    //var  password=$('.password').val();
     //var admissionno=$('.admissionno').val();
    // console.log(pass);




	//console.log(branch);

	$.ajax({
  	type: "POST",
  	url: "nibeuser/signin",
  	data: { username: name,
  		    password:pass

  		   
  	 }
	}).done(function( data ) {
      console.log( data);
       /*if(data)
       	 {
            // $('#loginn').hide();

       	 }*/
       	// console.log(data);

       	var obj=$.parseJSON(data); 
       	//var user_session =  <?php return "aman";?>;
       	
       	 if(obj.username!="")
       	 	 {
       	 	 //\	globalvar=$('#blog').html();
       	 	 	$('#myid').load("nibeuser/displayofflineevents");
       	 	 	$('#myid2').load("nibeuser/displayonlineevents");
       	 	 	$('#myid3').empty();
       	      $('#myid3').append('OUR EVENTS');
       	      $('#headlist').append('<li><a id="logoutbtn"  class="logoout"href="javascript:">logout</a></li>');
       	     //var logt="<a href="javascript:" style="color:red" class="logout">logout</a>"
       	     // console.log(globalvar);
       	     $('.blog-grids').html("<h1 style='text-align:center;'>Events will be uploaded shortly</h1>");	


       	 	 }
       	 else
       	     { //console.log('shit..');
       	      $('#loginerr').empty();
       	      $('#loginerr').append('username or password is incorrect');
       	     }  


     //$('#blog').html(data).show();
  });
});
$(document).on('click','.csend',function(event){
	event.preventDefault();
	
	//var name=$('.name').val();
	var name=$('.cname').val();
	var  email=$('.cemail').val();
	var sub=$('.csubject').val();
	var msg=$('.cmsg').val();



	
   
        
        
     

  //console.log('hii');


	//console.log(name);

	/*$.ajax({
  	type: "POST",
  	url: "nibeuser/send_message",
  	data: { name: name,
  		    emailid: email,
  		    subject:sub,
  		    message:msg

  		   
  	 }
	}).done(function( data ) {
	  if (data==="done")
	  {
	  	alert('done')
	  }
	  else
	  {	
      $('#emailmsg').empty();
      $('#emailmsg').append(data);
      }
       
     // $('#blog').html(data).show();

  }); */
});
$(document).on('click','.forgetpass',function(){
	

   

	

	$.ajax({
  	type: "POST",
  	url: "nibeuser/yo",
  	data: { 

  		   
  	 }
	}).done(function( data ) {
      
       globalvar=$('#blog').html();
      $('#blog').html(data).show();
  });
});
$(document).on('click','.forgetbtn',function(event){
	

  event.preventDefault();
  var  email=$('.emailidf').val();


 
  $.ajax({
  	type: "POST",
  	url: "nibeuser/forgetpass",
  	data: { emailid:email

  		   
  	 }
	}).done(function( data ) {
      
       
       	
       if(data=='done')
       {$('#blog').load("nibeuser/loadActivationKeyPage");	
      alert('an email has been sent to the email id .');

      }
  });
	

	
});
/*$(document).on('click','.logout',function(){
	

  
      $('#blog').html(globalvar).show();
      $.ajax({
  	type: "POST",
  	url: "nibeuser/logout",
  	data: { 

  		   
  	 }
	});*/
  
	$(document).on('click','.logoout',function(){
	
   
window.location = "" ;
 $('#blog').html(globalvar).show();
 $('#logoutbtn').hide();
 $.ajax({type: "POST",url:"nibeuser/logout"}).done(function()
 	{
 		console.log('yooooo');
 		
 	});
	

	
});

$(document).on('click','.submitactivate',function(event){
	
event.preventDefault();
var actkey=$('.activationkey').val();

	

	$.ajax({
  	type: "POST",
  	url: "nibeuser/get_pass",
  	data: {  actkey:actkey

  		   
  	 }
	}).done(function( data ) {
      
       
      $('#blog').html(data).show();
  });
});
$(document).on('click','.repassubmit',function(event){
	
event.preventDefault();
var password=$('.password').val();
var conpass=$('.conpass').val();
$('#passerr').empty();

	

	$.ajax({
  	type: "POST",
  	url: "nibeuser/taken_pass",
  	data: {  password:password,
  	         conpass:conpass

  		   
  	 }
	}).done(function( data ) {
      
    console.log(data);
    if(data==false)
    {
    	
    	$('#passerr').append('enter your password again')
    }  
    else
    {alert(data);
    $('#blog').html(globalvar).show();
    }

     

  });
});

  
	

	
