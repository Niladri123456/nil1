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

createHeader($sc,'Register a new account');
?> 
   <form style="background-color: white; width: 700px;" id="form69" name="form69" class="wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
action="reg.php">
         <center>
<header id="header" class="info">
<h2>Account Registration</h2>
<div><b>Account Registration</b></div>
</header>

<ul>

<li id="foli0" class="notranslate      ">
<label class="desc" id="title0" for="Field0">
Name
</label>
<span>
<input id="Field0" name="fname" type="text" class="field text fn" value="" size="30" tabindex="1" />
<label for="Field0">First</label>
</span>
<span>
<input id="Field1" name="lname" type="text" class="field text ln" value="" size="35" tabindex="2" />
<label for="Field1">Last</label>
</span>
</li>
<li id="foli2" class="complex notranslate      ">
<label class="desc" id="title2" for="Field2">
Address
<span id="req_2" class="req">*</span>
</label>
<div>
<span class="full addr1">
<input id="Field2" name="add1" type="text" class="field text addr" value="" tabindex="3" required />
<label for="Field2">Street Address</label>
</span>
<span class="full addr2">
<input id="Field3" name="add2" type="text" class="field text addr" value="" tabindex="4" />
<label for="Field3">Address Line 2</label>
</span>
<span class="left city">
<input id="Field4" name="city" type="text" class="field text addr" value="" tabindex="5" required />
<label for="Field4">City</label>
</span>
<span class="right state">
<input id="Field5" name="state" type="text" class="field text addr" value="" tabindex="6" required />
<label for="Field5">State / Province / Region</label>
</span>
<span class="left zip">
<input id="Field6" name="zip" type="text" class="field text addr" value="" maxlength="15" tabindex="7" required />
<label for="Field6">Postal / Zip Code</label>
</span>
<span class="right country">
<select id="Field7" name="country" class="field select addr" tabindex="8" >
<option value="" selected="selected"></option>
<option value="United States" >United States</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="Australia" >Australia</option>
<option value="Canada" >Canada</option>
<option value="France" >France</option>
<option value="New Zealand" >New Zealand</option>
<option value="India" >India</option>
<option value="Brazil" >Brazil</option>
<option value="----" >----</option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Åland Islands" >Åland Islands</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="American Samoa" >American Samoa</option>
<option value="Andorra" >Andorra</option>
<option value="Angola" >Angola</option>
<option value="Anguilla" >Anguilla</option>
<option value="Antarctica" >Antarctica</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Aruba" >Aruba</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bermuda" >Bermuda</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="British Indian Ocean Territory" >British Indian Ocean Territory</option>
<option value="Brunei Darussalam" >Brunei Darussalam</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Cayman Islands" >Cayman Islands</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Democratic Republic of the Congo" >Democratic Republic of the Congo</option>
<option value="Republic of the Congo" >Republic of the Congo</option>
<option value="Cook Islands" >Cook Islands</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="C&ocirc;te d'Ivoire" >C&ocirc;te d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Faroe Islands" >Faroe Islands</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="Netherlands Antilles" >Netherlands Antilles</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Palestine" >Palestine</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United States Minor Outlying Islands" >United States Minor Outlying Islands</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Virgin Islands, British" >Virgin Islands, British</option>
<option value="Virgin Islands, U.S." >Virgin Islands, U.S.</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
</select>
<label for="Field7">Country</label>
</span>
</div>
</li>
 <li id="foli9" class="notranslate lefttHalf     ">
<label class="desc" id="title9" for="Field9">
Phone
<span id="req_9" class="req">*</span>
</label>
<div>
<input id="Field9" name="contact" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="12" required /> 
</div>
</li>
<li id="foli9" class="notranslate lefttHalf     ">
<label class="desc" id="title9" for="Field9">
Email
<span id="req_9" class="req">*</span>
</label>
<div>
<input id="Field9" name="email" type="email" spellcheck="false" class="field text medium" value="" maxlength="255" tabindex="12" required /> 
</div>
</li>
<li id="foli8" class="notranslate lefttHalf    ">
<label class="desc" id="title8" for="Field8">
Account Info
</label>
<span>
<input id="Field8" name="uname" type="tel" class="field text" value="" size="40" maxlength="13" tabindex="9" onchange="return checkuser(this);" />
<img id="usrimg" src="" alt="Loading...">
<label for="Field8">Pick a username.</label>
</span>
<span>
<input type="password" id="pass" name="pass" type="tel" class="field text" value="" size="50" maxlength="13" tabindex="9" />
<label for="Field8">Pick a password.</label>
</span>
<span>
<input type="password" id="pass1" name="pass1" type="tel" class="field text" value="" size="50" maxlength="13" tabindex="9" />
<label for="Field8">Retype password.</label>
</span>
</li>
<li id="foli10" class="notranslate       ">

</li>
<li class="buttons ">
<div>

<input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" />
</div>
</li>

</ul>
</center>
</form>  
    
<?php
    createFooter();
?>