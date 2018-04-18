<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/navbar.php';
?>
<!-- Change some head values-->
<script>
	/* modify this to change the title */
	document.title = "Home | Plan My Party!";
	
	/* modify the href to link to whatever css you want */
	var head = document.getElementsByTagName('head')[0];
	var pageCss = document.createElement('link');
	pageCss.id = 'pagecss';
	pageCss.rel = 'stylesheet';
	pageCss.type = 'text/css';
	pageCss.href = '/index_style.css';
	pageCss.media = 'all';
	head.appendChild(pageCss);
	
</script>
	<h1>Let's Start Customising !</h1>
	
	<hr>
	
	<form name="booking" method="post" action="mailto:100088828@students.swinburne.edu.my" enctype="text/plain">
	<p>First off, what's the occasion?</p>
	<br>
	<p>
		<label for="event">Event Title:</label>
		<input type="text" name="event" id="event" size="30" required="required">	
	</p>
	<br>
	<p>Now, what theme would fit the party?</p>
	<div>
		<p><img src="theme/cartoon.jpg" alt="This is the CARTOON THEME"></p>
		<p><img src="theme/nautical.jpg" alt="This is the NAUTICAL THEME"></p>
		<p><img src="theme/adult.jpg" alt="This is the ADULT THEME"></p>
		<p><img src="theme/baby.jpg" alt="This is the BABY THEME"></p>
		<p><img src="theme/carnival.jpg" alt="This is the CARNIVAL THEME"></p>
		<p><img src="theme/decade.jpg" alt="This is the DECADE THEME"></p>
		<p><img src="theme/destination.jpg" alt="This is the DESTINATION THEME"></p>
		<p><img src="theme/homecoming.jpg" alt="This is the HOMECOMING THEME"></p>
	</div>
	<hr>
	<p>Hmmm, let's see how many paople you are partying with ...</p>
	<br>
	<p>
		<label for="guest">Number of guests:</label>
		<input type="text" name="guest" id="guest" size="4" required="required">	
	</p>
	<div id="center">
	<div id="location">
		<ul class="images">
				<li><a href="https://www.google.com/maps/place/Zinc+Restaurant+%26+Bar/@1.5534758,110.3486531,15z/data=!4m2!3m1!1s0x0:0x81e82937c6e8c96d?sa=X&ved=2ahUKEwjO2-SnxMHaAhXKMY8KHRBxCWEQ_BIwDnoFCAAQtwE"><img src="location/1.jpg" target="_blank" alt="This is the Zinc Restaurant &amp; Bar"></a></li>
				<li><img src="location/2.jpg" alt="This is the De Jackie Inspirations"></li>
				<li><img src="location/3.jpg" alt="This is the See Good Food Centre Sdn Bhd"></li>
				<li><img src="location/4.jpg" alt="This is the THE JUNK"></li>
			</ul>
		</div>
	</div>
<br/>
		<table align="center">
			<tr>
				<td><input type="radio" name="gender" value="m"/>Use recomemended venues</td>
				<td><input type="radio" name="gender" value="f"/>Use custom venue</td>
			</tr>
			<tr>
				<td>
				<select>
						<option>Select</option>
					<option value="1">Shirt</option>
					<option value="2">Pant</option>
					<option value="3">dhoti</option>
						</select>
				</td>
				<td></td>
			</tr>
		</table>
	<hr/>
	<p>Do not like our recommendations?</p>
	<p>Choose your own!</p>

	
	<p><label for="venue">My own venue's address:</label><input id="venue" type="text" placeholder="No.####, Jalan ########, Poskod, Kuching, Sarawak, Malaysia" size="60">
	
	<br/>
	
	<hr/>
	
	<p>Time to choose what you would like to eat</p>
	
	<br/>
	
	<p>Would you like to make things simple by:</p>
	
	<p><input type="radio">choosing a food package</p>
	
	<p>OR</p>
	
	<p><input type="radio">hand-pick the items</p>
	
	<p>Food Packages</p>
	<p>[Lights up when the first option is chosen]</p>
	
	
	<div id="center">
	<div id="right">
		<ul class="images">
				<li><img src="food/1.jpg"></li>
				<li><img src="food/2.jpg" alt="This is the De Jackie Inspirations"></li>
				<li><img src="food/3.jpg" alt="This is the See Good Food Centre Sdn Bhd"></li>
			</ul>
		</div>
	</div>
	
	<h2>Simple Package</h2>
	<p>Simple mee and stuff like that</p>
	<br/><br/><br/><br/><br/>
	<input type="submit" value="Choose this package">
</br></br>
<table align="center" border="1" id="clear" style="margin-top: 150px;">
	
	<tr>
		<td colspan="2" align="center">Hand-picked items</td>
	</tr>
	<tr>
		<td colspan="2" align="center">[Lights up when the second option is chosen]</td>
	</tr>
	<tr>
		<td><table id="dunno">
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
		<tr>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
			<td><input type="checkbox">Vegetable</td>
		</tr>
	</table>
</td>

<td>
	<ul id="haha">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</td>
</tr>
</table>
</br></br>
<div id="last">
<div class="dropdown">
  <button class="dropbtn">Equipment</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<br/><br/>
<div class="dropdown">
  <button class="dropbtn">Invitation Cards</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<br/><br/>

<div class="dropdown">
  <button class="dropbtn">Bouquets</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<br/><br/>
<div class="dropdown">
  <button class="dropbtn">Entertainment</button>
  <div class="dropdown-content">
    <a href="#">Master of ceremony</a>
    <a href="#">Live band</a>
    <a href="#">Clown</a>
	<a href="#">Stand-up comedian</a>
  </div>
</div>
</div>
		
	
	
</div>

<?php
include $_SERVER["DOCUMENT_ROOT"].'/template/footer.php';
include $_SERVER["DOCUMENT_ROOT"].'/template/script.php';
?>

	
	