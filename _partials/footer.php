
        <div class="site-footer">
            <div class="container">
                <div class="row" style="background-color: #4c5564;">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="images/logo.png" alt="">
                            </a>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="copyright">
                            <span>
                            	
                                Copyright &copy; 2019 <a href="http://aranyavilas.com">aranyavilas</a>
                            
                            
                            <!--
                            | Design: <a rel="nofollow" href="http://hpie.in" target="_parent">H.P.I.E</a>
                            -->
                            
                            </span>
                        </div>
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-4 col-sm-4">
                        <ul class="social-icons">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-flickr"></a></li>
                            <li><a href="#" class="fa fa-rss"></a></li>
                        </ul>
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.site-footer -->

        <script src="js/vendor/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/min/plugins.min.js"></script>
		<script src="js/jquery.fancybox.min.js"></script>
        <script src="js/min/main.min.js"></script>
		<script>
			$(function(){
			// this will get the full URL at the address bar
			var url = window.location.href; 

				// passes on every "a" tag 
				$("#main-menu a").each(function() {
						// checks if its the same on the address bar
					if(url == (this.href)) { 
						$(this).closest("li").addClass("active");
					}
				});
			});
			
			$(function(){
			// this will get the full URL at the address bar
			var url = window.location.href; 

				// passes on every "a" tag 
				$("#menu-responsive a").each(function() {
						// checks if its the same on the address bar
					if(url == (this.href)) { 
						$(this).closest("li").addClass("active");
					}
				});
			});

		</script>
                <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "919857008200", // WhatsApp number
            call_to_action: "Inquiry Now!", // Call to action
            position: "right" // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
 
