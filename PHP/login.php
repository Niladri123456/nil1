<?php
include_once('script.php');
$sc=<<<HERE
<script src="scripts/wufoo.js"></script> 
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">
<script type="text/javascript">
         function checkuser(node){ 
              // alert('Into ...');
               document.getElementById('usrimg').src='images/load2.gif';
               
          var xhr;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xhr=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xhr=new ActiveXObject("Microsoft.XMLHTTP");
  }
xhr.onreadystatechange=function()
  {
  if (xhr.readyState==4 && xhr.status==200)
    {

     var c=(xhr.responseText);
   
    //alert(xhr.responseText);
    // alert(l);
     

          // alert('Database updated!');

          if (c=='true'){
               document.getElementById('usrimg').src='images/tick.png';
          }
          else
          {
               document.getElementById('usrimg').src='images/cross.png';
          }
         
            
              
    }
  }
xhr.open("GET","uid.php?u="+node.value,true);
xhr.send();



  
             
             
         }
</script>

HERE;
createHeader($sc,'Login to your account.')
?>
     <center>
   <form style=" -moz-border-radius: 15px; border-radius: 15px; background-color: white; width: 700px;" id="form69" name="form69" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="lgn.php">
         <center>

 <br />
<div><h2><font color="black"> Login to your account</font></h2></div>


<ul>

<li id="foli0" class="notranslate      ">
<label class="desc" id="title0" for="Field0">
Login Credentials
</label>
<span>
<input id="Field0" name="uname" type="text" class="field text fn" value="" size="30" tabindex="1" />
<label for="Field0">Username</label>
</span>
<span>
<input id="Field1" name="pass" type="password" class="field text ln" value="" size="35" tabindex="2" />
<label for="Field1">Password</label>
</span>
</li>

<li class="buttons ">
<div>
 <a href="forgetpassword.php">Forget Password </a>
<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Login" />
</div>
</li>

</ul>
</center>
</form>  
  </center>  
    
<?php
    createFooter();
?>