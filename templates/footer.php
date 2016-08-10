<footer class="content-info">
	<div class="container-fluid bg-blue">
	  <div class="container bottom-marg-50">
	    <div class="col-md-5">
	    	<div class="top-marg-50"> 
		    	<h3>O nama</h3>
		    	<hr align="left">
		    	<p >Burza ideja djeluje od 2008. godine kao specijalizirana tvrtka za izradu i održavanje responzivnih web stranica i web trgovina, izradu SEO analiza i SEO optimizacije web stranica.</p>
		    	<hr class="footer-separator">
		    	<p>Copyright 2016 - <span>Burza Ideja</span></p>
	    	</div>
	    </div>
	    <div class="col-md-7 col-separator-footer">
	    	<div class="top-marg-50 bottom-marg-50"> 
		    	<h3>Kontakt podaci</h3>
		    	<hr align="left">
		    	<p><i class="fa fa-home" aria-hidden="true"></i> Burza ideja d.o.o., Krapinska 9, 42000 Varaždin OIB: 60382139644<br>
	 <i class="fa fa-phone" aria-hidden="true"></i> +385 95 910 9102 – Mladen  <i class="fa fa-phone" aria-hidden="true"></i> +385 91 186 5265 – Josip  
	 <br><i class="fa fa-envelope-o" aria-hidden="true"></i> info@burza-ideja.hr</p>
	 			<h3>Prijava na Newsletter</h3>
		    	<hr align="left">
		    	 <div class="input-group">
			      <input type="text" class="form-control" placeholder="Upišite vasu-email@adresu.com">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Pretplati me</button>
			      </span>
			    </div><!-- /input-group -->
		    </div>
	    </div>
	  </div>
	</div>
</footer>

<?php if(is_front_page()){ ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hr_HR/sdk.js#xfbml=1&version=v2.7&appId=1543406099223777";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php } ?>