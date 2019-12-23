
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

        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
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
 
