<?php $basename = basename($_SERVER['SCRIPT_FILENAME']); ?>
<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Project Title</title>
		<?php include 'inc/header.php'; ?>
		<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-interval="5000" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner1" class="d-block w-100" alt="Image 1">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner2" class="d-block w-100" alt="Image 2">
				</div>
				<div class="carousel-item">
					<img src="https://via.placeholder.com/1920x700.png?text=Naturessungrown+Banner3" class="d-block w-100" alt="Image 3">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<main id="main" style="min-height: 2000px;">
			<div class="container">
				<nav>
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">alphabet</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link"  id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">counting</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Simble</a></li>
					</ul>
				</nav>
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="nav-home-tab">
						<a href="#" class="opener">alphabet</a>
						<div class="data">
							<p>An alphabet is a standard set of letters (basic written symbols or graphemes) that is used to write one or more languages based upon the general principle that the letters represent phonemes (basic significant sounds) of the spoken language. This is in contrast to other types of writing systems, such as syllabaries (in which each character represents a syllable) and logographies (in which each character represents a word, morpheme, or semantic unit).</p>
							<p>The Proto-Canaanite script, later known as the Phoenician alphabet, is the first fully phonemic script. Thus the Phoenician alphabet is considered to be the first alphabet. The Phoenician alphabet is the ancestor of most modern alphabets, including Arabic, Greek, Latin, Cyrillic, Hebrew, and possibly Brahmic.[1][2] Under a terminological distinction promoted by Peter T. Daniels, an "alphabet" is a script that represents both vowels and consonants as letters equally. In this narrow sense of the word the first "true" alphabet was the Greek alphabet,[3][4] which was developed on the basis of the earlier Phoenician alphabet. In other alphabetic scripts such as the original Phoenician, Hebrew or Arabic, letters predominantly or exclusively represent consonants; such a script is also called an abjad. A third type, called abugida or alphasyllabary, is one where vowels are shown by diacritics or modifications of consonantal base letters, as in Devanagari and other South Asian scripts. The Khmer alphabet (for Cambodian) is the longest, with 74 letters.[5]</p>
						</div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						<a href="#" class="opener">counting</a>
						<div class="data">
							<p>Counting is the action of finding the number of elements of a finite set of objects. The traditional way of counting consists of continually increasing a (mental or spoken) counter by a unit for every element of the set, in some order, while marking (or displacing) those elements to avoid visiting the same element more than once, until no unmarked elements are left; if the counter was set to one after the first object, the value after visiting the final object gives the desired number of elements. The related term enumeration refers to uniquely identifying the elements of a finite (combinatorial) set or infinite set by assigning a number to each element.</p>
							<p>Counting using tally marks at Hanakapiai Beach Counting sometimes involves numbers other than one; for example, when counting money, counting out change, "counting by twos" (2, 4, 6, 8, 10, 12, ...), or "counting by fives" (5, 10, 15, 20, 25, ...).</p>
							<p>There is archaeological evidence suggesting that humans have been counting for at least 50,000 years.[1] Counting was primarily used by ancient cultures to keep track of social and economic data such as number of group members, prey animals, property, or debts (i.e., accountancy). The development of counting led to the development of mathematical notation, numeral systems, and writing.</p>
						</div>
					</div>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						<a href="#" class="opener">Symbol</a>
						<div class="data">
							<p>A symbol is a mark, sign or word that indicates, signifies, or is understood as representing an idea, object, or relationship. Symbols allow people to go beyond what is known or seen by creating linkages between otherwise very different concepts and experiences. All communication (and data processing) is achieved through the use of symbols. Symbols take the form of words, sounds, gestures, ideas or visual images and are used to convey other ideas and beliefs. For example, a red octagon may be a symbol for "STOP". On a map, a blue line might represent a river. Numerals are symbols for numbers. Alphabetic letters may be symbols for sounds. Personal names are symbols representing individuals. A red rose may symbolize love and compassion. The variable 'x', in a mathematical equation, may symbolize the position of a particle in space.</p>
						</div>
					</div>
				</div>
				<div id="data1">cxcxc</div>


				<li>date_difffdfd</li>
				<li>fclosedf</li>
				<li>date_difff</li>
				<li>d</li>
				<li>fclosedff</li>
			</div>
		</main>
		<?php include 'inc/footer.php'; ?>