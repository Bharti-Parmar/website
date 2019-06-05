<div class="container-fluid" id="footer" style="margin-top:40px;background-color:#0d0d0d;">
		<div class="row">
			<div class="col-md-3 col-xs-12"><br>
				<img src="image\image\bjhnj.png" height="50px" width="100px" style="margin-left:70px"><br><br>
				<br>
			</div>
			<div class="col-md-3 col-xs-12">
				<h2 style="color:white;margin-top:40px;margin-left:40px;"><b>Contact Us</b></h2>
			</div>
			<div class="col-md-3 col-xs-12">
			</div>
			<div class="col-md-3 col-xs-12">
			</div>
		</div>


		<div class="row">
			
			<div class="col-md-3 col-xs-12">
				<p style="color:white; margin-left:60px; font-size:15px;margin-top:40px;">North American</p>
				<p style="color:skyblue;margin-left:60px; font-size:15px;">Devid Krejci</p>
				<p style="color:white;margin-left:60px; font-size:15px;">Executive Vice President, Digital</p>
				<p style="color:white;margin-left:60px; font-size:15px;">T: 952-346-6158</p>

			</div>
			
			<div class="col-md-3 col-xs-12">
				
				<p style="color:white;margin-left:40px; font-size:15px;margin-top: 40px;">EMEA</p>
				<p style="color:skyblue;margin-left:40px; font-size:15px;">Nadia Saint</p>
				<p style="color:white;margin-left:40px; font-size:15px;">Head Of Digital - EMEA Technology Practice</p>
				<p style="color:white;margin-left:40px; font-size:15px;">T: +44 207 067 0620</p>

			</div>
			
			<div class="col-md-3 col-xs-12">
				<p style="color:white;margin-left:40px; font-size:15px;margin-top:40px;">Latin America</p>
				<p style="color:skyblue;margin-left:40px; font-size:15px;">Everton Schultz</p>
				<p style="color:white;margin-left:40px; font-size:15px;">Digital Director, Latin America</p>
				<p style="color:white;margin-left:40px; font-size:15px;">T: +55 11 3027 0203</p>

			</div>

			<div class="col-md-3 col-xs-12">
				<p style="color:white;margin-left:40px; font-size:15px;margin-top:4
				0px;">Asia Pacific</p>
				<p style="color:skyblue;margin-left:40px; font-size:15px;">Tyler Kim</p>
				<p style="color:white;margin-left:40px; font-size:15px;">Head Of Crises Communications and Issues Management</p>
				<p style="color:white;margin-left:40px; font-size:15px;">T: +82-2-6250-7007</p>

			</div>
		
		</div>
		<br><br>
</div>

			<center>
				<div class="container-fluid" style="background-color: black;">
					<p class="h5">Firebell Sandwick - All right reserved 2019, Develope by bharti parmar</p>
				</div>
			</center>
			


	

<script>
$(document).ready(function(){
 
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {


    event.preventDefault();

    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("uper");
        }
    });
  });
})
</script>

<script type="text/javascript">
	$(document).ready(function()
		{
			$('#one').click(function(){
				$('#two').slidetoggle();
			});
		});
</script>
	</body>
</html>