<?php
session_start();
if(!isset($_SESSION['s1'])){
header('location:login.php');
}
include_once('script.php');
createAuthHeader('Register a new website.');
?>
    <center>
   <form style="background-color: white; width: 100%;" id="form69" name="form69" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="addsite.php">
         <center>
<header id="header" class="info">
<h2><font color="black"> Registration</font></h2>
<div><b>Website Registration</b></div>
</header>

<ul>


<li id="foli2" class="complex notranslate      ">
<label class="desc" id="title2" for="Field2">
Information abount your website
<span id="req_2" class="req">*</span>
</label>
<div>
<span class="full addr1">
<label for="Field2">Website Address</label> 
<input id="Field2" name="webadd" type="text" class="field text addr" value="http://" tabindex="3" required />
</span>
<span class="full addr2">
<label for="Field3">Description</label> 
<textarea class="field text addr" style="width: 99%; height: 50px;" name="webdesc"></textarea>
</span>
<span class="full addr1">
<label for="Field2">Website Catagory</label> 
<input id="Field2" name="webcat" type="text" class="field text addr" value="" tabindex="3" required />
</span>
<span class="full addr1">
<label for="Field2">Website Sub-Catagory</label> 
<input id="Field2" name="websubcat" type="text" class="field text addr" value="" tabindex="3" required />
</span>
<span class="full addr1">
<label for="Field2">Website Keywords</label> 
<textarea class="field text addr" style="width: 99%; height: 50px;" name="webkey"></textarea>  
</span>
</div>
</li>

<li id="foli10" class="notranslate       ">

</li>
<li class="buttons ">
<div>

<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Register My WebSite" />
</div>
</li>

</ul>
</center>
</form>  
   </center>   
   
   <?php
    createFooter();
?>
    
    
 