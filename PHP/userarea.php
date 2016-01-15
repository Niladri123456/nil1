<?php
session_start();
if(!isset($_SESSION['s1'])){
header('location:login.php');
}
include_once('script.php');
createAuthHeader('Userarea | IndianWebAnalyst | Online website stat analysis.');
?>
               <center>    <h1>Welcome</h1>
                <br /><h2>Indian Web Analyst</h2>
                        </center>
    <div id="templatemo_main">
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/visitor.png" alt="Image 01" /> <a href="#">Visitor Tracking</a></h2>
            <p>Nullam consectetur varius risus, a lobortis ipsum auctor at. Aenean bibendum vulputate libero ac sagittis.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/counter.png" alt="Image 02" /><a href="#">Web Counter</a></h2>
            <p>Duis egestas, magna at iaculis pulvinar, leo est elementum sapien leo elit sit, id vestibulum eros elit at purus.</p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="images/notebook-32px.png" alt="Image 03" /><a href="#">SEO Tips</a></h2>
            <p>Ut rhoncus rhoncus mauris, varius venenatis nibh consequat ac. Duis nec velit eros, eu scelerisque lacus.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="images/ip.png" alt="Image 04" /><a href="#">IP Tracking</a></h2>
            <p>Etiam sodales feugiat turpis et dapibus. Vestibulum adipiscing convallis tortor sit amet dignissim. Duis nec velit accumsan.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/support.png" alt="Image 05" /><a href="#">Support</a></h2>
            <p>Pellentesque suscipit velit at dui egestas porta. Maecenas quis metus ac nulla pretium eleifend dolor mi.</p>
        </div>
        <div class="col one_fourth fp_services">
            
            <h2 class="s1"><img src="images/chat1.png" alt="Image 06" /><a href="#">Live Chat</a></h2>
            <p>Aenean ante nunc, bibendum non lobortis id, viverra eu diam. Cras sed commodo lectus in ultrices eget vitae dui. </p>
        </div>
        
        <div class="col one_fourth fp_services">
            
            <h2 class="s2"><img src="images/query.png" alt="Image 07" /><a href="#">MIS Query</a></h2>
            <p>Ut metus urna, rhoncus vitae venenatis consequat, pulvinar vitae ante. Mauris eu sapien in nulla rhoncus nec ut leo.</p>
        </div>
        <div class="col one_fourth no_margin_right fp_services">
            
            <h2 class="s3"><img src="images/performance.png" alt="Image 08" /><a href="#">High Performence</a></h2>
            <p>Mauris lobortis lorem at mi tincidunt id magna neque dapibus. Duis in condimentum odio auctor. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        </div>
        
        <div class="cleaner"></div>
    
    </div> <!-- END of main -->
<?php
    createFooter();
?>