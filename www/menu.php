<div class="main-nav">
   <div class="container">
      <header class="group top-nav">
         <nav class="navbar logo-w navbar-left" >
            <a class="logo" href="index.html">Ferienwohnung Treu</a>
         </nav>
         <div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
            <span class="logo">Ferienwohnung Treu</span>
         </div>
         <nav id="navbar-1" class="navbar item-nav navbar-right">
           <ul>

            <?php
            if($section == "startseite"){
            	echo '<li class="active"><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "wohnung"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li class="active"><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "freizeit"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li class="active"><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "anfahrt"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li class="active"><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "preise"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li class="active"><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "buchen"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li class="active"><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }elseif($section == "kontakt"){
            	echo '<li><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li class="active"><a href="index.php?section=kontakt">Kontakt</a></li>';
            }else{
            	echo '<li class="active"><a href="index.php?section=startseite">Startseite</a></li>';
            	echo '<li><a href="index.php?section=wohnung">Wohnung</a></li>';
            	echo '<li><a href="index.php?section=freizeit">Freizeit</a></li>';
            	echo '<li><a href="index.php?section=anfahrt">Anfahrt</a></li>';
            	echo '<li><a href="index.php?section=preise">Preise</a></li>';
            	echo '<li><a href="index.php?section=buchen">Buchen</a></li>';
            	echo '<li><a href="index.php?section=kontakt">Kontakt</a></li>';
            }?>
            </ul>
         </nav>
      </header>
   </div>
</div>
