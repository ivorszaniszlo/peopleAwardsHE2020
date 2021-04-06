<?php 
	include('header.php');
?>
<title>People Awards 2020</title>
</head>
    <body>
	 <img src="img/img_txt.png" alt="People Awards" style="width:100%;"/>
        <div class="container" style="padding: 0"> 
            <div class="slider">
                <div class="box1 box" id="box1">
                    <div class="bg">
					</div>
                    <div class="details">
                        <h1>Napsárga kapucnis pulcsi LIMITED EDITION</h1>
                        <p>
                            Fiatalos, jókedvű és kreatív - mint amilyen Te vagy! Igenis jól áll Neked a sárga szín, ami nem csak trendi, de a hangulatodra is jótékony hatással van! Válaszd S, M, L, XL vagy XXL méretben! 
                        </p>
                        <div id="contact-1"><button type="button" data-toggle="modal" data-target="#contact-modal-1">Ezt választom!</button></div>
                    </div>
                    <div class="illustration">
						<a class="inner" href="img/jumper-thumb.jpg"data-lightbox="1"><a class="inner" href="img/jumper-back.jpg"data-lightbox="1">
							<div class="">
								<p><i class="fa fa-search-plus fa-1x"></i></p>
							</div>
							<img class="img-circle" src="img/jumper-back.jpg" alt="póló"/>
						</a>
					</div>
                </div>
                <div class="box2 box" id="box2">
                    <div class="bg">
					</div>
                    <div class="details">
                        <h1>Nemes nedű Villányból</h1>
                        <p>
                            A Wunderlich Pincészet Villányi Bársony Cuvée-jét ajánljuk figyelmedbe! Nevéhez hűen bársonyos, gazdag ízvilágú gyümölcsös és tartalmas testes vörösbor. Remek választás gazdag fűszerezésű, nehezebb húsételekhez, de a testes villányi borok kedvelői önmagában is szeretni fogják. A készlet erejéig tudjuk biztosítani. Ha beszerzési problémákban ütköznénk, Villányi Portugieser vagy Cabernet Franc lép a helyébe. 
                        </p>
                        <div id="contact-2"><button type="button"  data-toggle="modal" data-target="#contact-modal-2">Ezt választom!</button></div>
                    </div>
                    <div class="illustration">
						<a class="inner" href="img/glass.jpg" data-lightbox="2">
							<div class="">
								<p><i class="fa fa-search-plus fa-1x"></i></p>
							</div>
							<img class="img-circle" src="img/glass-thumb.jpg" alt="bor" />
						</a>
					</div>
                </div>
                <div class="box3 box" id="box3">
                    <div class="bg">
					</div>
                    <div class="details">
                        <h1>Strapabíró vászon hátizsák magabiztos statement felirattal</h1>
                        <p>
                            Táskából sohasem elég, ráadásul épp akkor nincs nálad egy sem, amikor jól jönne. Időtálló dizájnnal, elegáns fekete színnel és körültekintő anyagválasztással dolgoztunk, hogy megoldást adjunk a szállítmányozási gondjaidra.
                        </p>
                        <div id="contact-3"><button type="button" data-toggle="modal" data-target="#contact-modal-3">Ezt választom!</button></div>
                    </div>
                    <div class="illustration">
						<a class="inner" href="img/bag.jpg" data-lightbox="3">
							<div class="text-image">
								<p><i class="fa fa-search-plus fa-1x"></i> </p>
							</div>
							<img class="img-circle" src="img/bag-thumb.jpg" alt="bor" />
						</a>
					</div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="prev" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(0 91) rotate(-90)" fill="#fff"/></svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="next" width="56.898" height="91" viewBox="0 0 56.898 91"><path d="M45.5,0,91,56.9,48.452,24.068,0,56.9Z" transform="translate(56.898) rotate(90)" fill="#fff"/></svg>
            <div class="trail">
                    <div class="box1 active">1</div>
                    <div class="box2">2</div>
                    <div class="box3">3</div>
            </div>
		<!-- Modal 1 -->
			<div id="contact-modal-1" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Kérlek add meg a következő adatokat!</h3>
						</div>
						<form action="saveContact.php" method="post" id="contactForm" name="contact-1" role="form">
							<div class="modal-body">				
								<div class="form-group">
									<label for="name">Név</label>
									<input type="text" required name="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="email">E-mail cím (céges)</label>
									<input type="email" required name="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="phone">Mobilszám</label>
									<input type="text" required name="phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="gift">A kiválasztott ajándék</label>
									<select name="gift" class="form-control selectpicker">
										<option vlaue="" disabled>A kiválasztott ajándék</option>
										<option value = "sárga pulcsi">sárga pulcsi</option>
										<option value = "vörösbor" disabled>vörösbor</option>
										<option value = "fekete táska" disabled>fekete táska</option>
									</select>
								</div>
								<div class="form-group">
									<label for="jumper_size">Pulóver mérete</label>
									<div class="radio">
										<label><input type="radio" name="jumper_size" value="S" />S</label>
										<label><input type="radio" name="jumper_size" value="M" />M</label>
										<label><input checked type="radio" name="jumper_size" value="L" />L</label>
										<label><input type="radio" name="jumper_size" value="XL" />XL</label>
										<label><input type="radio" name="jumper_size" value="XXL" />XXL</label>
									</div>
								</div>
								<div class="form-group">
									<label for="transfer">Az ajándékot </label>
									<div class="radio">
										<label><input checked type="radio" name="transfer" value="iroda" />felveszem januárban a Városmajor 11-ben</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="transfer" value="otthon" />futárral kérem a címemre küldeni</label>
									</div>
								</div>
								<div class="form-group">
									<label for="address">Cím (utca, házszám, emelet)</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<label for="city">Város</label>
									<input type="text" name="city" class="form-control">
								</div>
								<div class="form-group">
									<label for="zip code">Irányítószám</label>
									<input type="number" name="zip code" class="form-control">
								</div>
							</div>
							<div class="modal-footer">					
								<button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
								<input type="submit" class="btn btn-success submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		<!-- Modal 2 -->
			<div id="contact-modal-2" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Kérlek add meg a következő adatokat!</h3>
						</div>
						<form action="saveContact.php" method="post"  id="contactForm2" name="contact-2" role="form">
							<div class="modal-body">				
								<div class="form-group">
									<label for="name">Név</label>
									<input type="text" required  name="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="email">E-mail cím (céges)</label>
									<input type="email" required  name="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="phone">Mobilszám</label>
									<input type="text" required name="phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="gift">A kiválasztott ajándék</label>
									<select name="gift" class="form-control selectpicker">
										<option vlaue="" disabled>A kiválasztott ajándék</option>
										<option value = "sárga pulcsi"disabled>sárga pulcsi</option>
										<option value = "vörösbor" >vörösbor</option>
										<option value = "fekete táska"disabled>fekete táska</option>
									</select>
								</div>
								<div class="form-group">
									<label for="transfer">Az ajándékot </label>
									<div class="radio">
										<label><input checked type="radio" name="transfer" value="iroda" />felveszem januárban a Városmajor 11-ben</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="transfer" value="otthon" />futárral kérem a címemre küldeni</label>
									</div>
								</div>
								<div class="form-group">
									<label for="address">Cím (utca, házszám, emelet)</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<label for="city">Város</label>
									<input type="text" name="city" class="form-control">
								</div>
								<div class="form-group">
									<label for="zip code">Irányítószám</label>
									<input type="number" name="zip code" class="form-control">
								</div>
							</div>
							<div class="modal-footer">					
								<button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
								<input type="submit" class="btn btn-success submit">
							</div>
						</form>
					</div>
				</div>
			</div>	
		<!-- Modal 3 -->
			<div id="contact-modal-3" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a class="close" data-dismiss="modal">×</a>
							<h3>Kérlek add meg a következő adatokat!</h3>
						</div>
						<form action="saveContact.php" method="post"  id="contactForm3" name="contact-3" role="form">
							<div class="modal-body">
								<div class="form-group">
									<label for="name">Név</label>
									<input type="text" required name="name" class="form-control">
								</div>
								<div class="form-group">
									<label for="email">E-mail cím (céges)</label>
									<input type="email" required name="email" class="form-control">
								</div>
								<div class="form-group">
									<label for="phone">Mobilszám</label>
									<input type="text" required name="phone" class="form-control">
								</div>
								<div class="form-group">
									<label for="gift">A kiválasztott ajándék</label>
									<select name="gift" class="form-control selectpicker">
										<option vlaue="" disabled>A kiválasztott ajándék</option>
										<option value = "sárga pulcsi" disabled>sárga pulcsi</option>
										<option value = "vörösbor" disabled>vörösbor</option>
										<option value = "fekete táska">fekete táska</option>
									</select>
								</div>
								<div class="form-group">
									<label for="transfer">Az ajándékot </label>
									<div class="radio">
										<label><input checked type="radio" name="transfer" value="iroda" />felveszem januárban a Városmajor 11-ben</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="transfer" value="otthon" />futárral kérem a címemre küldeni</label>
									</div>
								</div>
								<div class="form-group">
									<label for="address">Cím (utca, házszám, emelet)</label>
									<input type="text" name="address" class="form-control">
								</div>
								<div class="form-group">
									<label for="city">Város</label>
									<input type="text" name="city" class="form-control">
								</div>
								<div class="form-group">
									<label for="zip code">Irányítószám</label>
									<input type="number" name="zip code" class="form-control">
								</div>
							</div>
							<div class="modal-footer">					
								<button type="button" class="btn btn-default" data-dismiss="modal">Bezár</button>
								<input type="submit" class="btn btn-success submit">
							</div>
						</form>
					</div>
				</div>
			</div>	
		</div>
		<footer class="logo">
             <img src="img/logo.png" alt="Logo" style="width:100%;"/>
        </footer>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
        <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.2/CSSRulePlugin.min.js"></script> -->
        <script src="js/script.js"></script>
		<script type="text/javascript" src="js/contact.js"></script>
    </body>
</html>