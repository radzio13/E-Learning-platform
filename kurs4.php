<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>E-learning - kursy wzrokowiec</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Copyright.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
	    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
		    <link rel="stylesheet" type="text/css" href="dist/pell.css">

    <style>


      .content1 {
        box-sizing: border-box;
        margin: 0 auto;
        max-width: 600px;
        padding: 20px;
      }

      #html-output {
        white-space: pre-wrap;
      }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">e - LEARNING</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
				<?php
								if($_SESSION['zalogowani']==true)
								{	
									echo'<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger">Witaj '.$_SESSION['login'].'</a></li>';
									echo'<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href=\'zmien_haslo.php\'>Zmie?? has??o</a></li>';
									if($_SESSION['stanowisko']=='Admin' || $_SESSION['stanowisko']=='Moderator')
									{

										echo'<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href=\'panel_admina.php#main\'>Panel administracji</a></li>';
										
									}
								}
								else
								{
									header('Location:index.html');
									die();
								}	
								?>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="kategorie.php">Strona g????wna</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="wyloguj.php">Wyloguj</a></li>
                    </ul>
         
    </nav>
    <header class="masthead text-center text-white d-flex" style="background-image:url('assets/img/header.jpg');">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase"><strong>E - LEARNING PLATFORM</strong></h1>
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">PLATFORMA, KT??RA ZAPEWNI CI DYNAMICZNY ROZW??J. POSZERZAJ SWOJ?? WIEDZ?? WRAZ Z NASZYMI KURSAMI!</p>
            </div>
        </div>
    </header>

	<div class="container">
            


		<?php
	if($_SESSION['zalogowani']==true)
	{
		require_once "laczenie.php";
				
		$query1 = "SELECT tresc FROM kursy WHERE id_kursu = 4";
		$result1 = mysqli_query($mysqli, $query1);
		if ($result1->num_rows > 0) 
		{
			echo '<div class="thumbnails">';
			$row1 = $result1->fetch_assoc();

			echo "<table>"; 
				echo "<tr>";
				echo "<td>".$row1['tresc']."</td>";
				echo "</tr>"; 
			echo "</table>"; 
			echo '</div>';
			
		} 
		else 
		{
			echo "Brak pasuj??cych wynik??w";
		}
		
		
		?>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>


    var quiztitle = "Test sprawdzaj??cy";

    /**
    * Set the information about your questions here. The correct answer string needs to match
    * the correct choice exactly, as it does string matching. (case sensitive)
    *
    */
    var quiz = [
        {
            "question"      :   "Q1: Pytanie 1 blablabla?",
            "image"         :   "https://www.rmf.fm/_files/Upload/Images/mysz.jpg",
            "choices"       :   [
                                    "Niepoprawna",
                                    "Niepoprawna",
                                    "Poprawna",
                                    "Niepoprawna"
                                ],
            "correct"       :   "Poprawna",
            "explanation"   :   "Jakie?? wyja??nienie do odpowiedzi.",
        },
        {
            "question"      :   "Q2: Pytanie 2 blablabla?",
            "image"         :   "https://www.rmf.fm/_files/Upload/Images/mysz.jpg",
            "choices"       :   [
                                    "Poprawna",
                                    "Niepoprawna",
                                    "Niepoprawna",
                                    "Niepoprawna"
                                ],
            "correct"       :   "Poprawna",
            "explanation"   :   "Jakie?? wyja??nienie do odpowiedzi.",
        },
        {
            "question"      :   "Q3: Pytanie 3 blablabla?",
            "image"         :   "",
            "choices"       :   [
                                    "Niepoprawna",
                                    "Niepoprawna",
                                    "Poprawna",
                                    "Niepoprawna"
                                ],
            "correct"       :   "Poprawna",
            "explanation"   :   "Jakie?? wyja??nienie do odpowiedzi.",
        },

    ];


    /******* No need to edit below this line *********/
/******* No need to edit below this line *********/
    var currentquestion = 0, score = 0, submt=true, picked;
	var wynik = 0;
    jQuery(document).ready(function($){

        /**
         * HTML Encoding function for alt tags and attributes to prevent messy
         * data appearing inside tag attributes.
         */
        function htmlEncode(value){
          return $(document.createElement('div')).text(value).html();
        }

        /**
         * This will add the individual choices for each question to the ul#choice-block
         *
         * @param {choices} array The choices from each question
         */
        function addChoices(choices){
            if(typeof choices !== "undefined" && $.type(choices) == "array"){
                $('#choice-block').empty();
                for(var i=0;i<choices.length; i++){
                    $(document.createElement('li')).addClass('choice choice-box').attr('data-index', i).text(choices[i]).appendTo('#choice-block');                    
                }
            }
        }
        
        /**
         * Resets all of the fields to prepare for next question
         */
        function nextQuestion(){
            submt = true;
            $('#explanation').empty();
            $('#question').text(quiz[currentquestion]['question']);
            $('#pager').text('Pytanie ' + Number(currentquestion + 1) + ' z ' + quiz.length);
            if(quiz[currentquestion].hasOwnProperty('image') && quiz[currentquestion]['image'] != ""){
                if($('#question-image').length == 0){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question'])).insertAfter('#question');
                } else {
                    $('#question-image').attr('src', quiz[currentquestion]['image']).attr('alt', htmlEncode(quiz[currentquestion]['question']));
                }
            } else {
                $('#question-image').remove();
            }
            addChoices(quiz[currentquestion]['choices']);
            setupButtons();
        }

        /**
         * After a selection is submitted, checks if its the right answer
         *
         * @param {choice} number The li zero-based index of the choice picked
         */
        function processQuestion(choice){
            if(quiz[currentquestion]['choices'][choice] == quiz[currentquestion]['correct']){
                $('.choice').eq(choice).css({'background-color':'#50D943'});
                $('#explanation').html('<strong>Poprawnie!</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
                score++;
            } else {
                $('.choice').eq(choice).css({'background-color':'#D92623'});
                $('#explanation').html('<strong>Niepoprawnie!.</strong> ' + htmlEncode(quiz[currentquestion]['explanation']));
            }
            currentquestion++;
            $('#submitbutton').html('NAST??PNE PYTANIE &raquo;').on('click', function(){
                if(currentquestion == quiz.length){
                    endQuiz();
                } else {
                    $(this).text('Sprawd?? odpowied??').css({'color':'#222'}).off('click');
                    nextQuestion();
                }
            })
        }

        /**
         * Sets up the event listeners for each button.
         */
        function setupButtons(){
            $('.choice').on('mouseover', function(){
                $(this).css({'background-color':'#e1e1e1'});
            });
            $('.choice').on('mouseout', function(){
                $(this).css({'background-color':'#fff'});
            })
            $('.choice').on('click', function(){
                picked = $(this).attr('data-index');
                $('.choice').removeAttr('style').off('mouseout mouseover');
                $(this).css({'border-color':'#222','font-weight':700,'background-color':'#c1c1c1'});
                if(submt){
                    submt=false;
                    $('#submitbutton').css({'color':'#000'}).on('click', function(){
                        $('.choice').off('click');
                        $(this).off('click');
                        processQuestion(picked);
                    });
                }
            })
        }
        
        /**
         * Quiz ends, display a message.
         */
        function endQuiz(){
			
            $('#explanation').empty();
            $('#question').empty();
            $('#choice-block').empty();
            $('#submitbutton').remove();
            $('#question').text("Zdoby??e?? " + score + " z " + quiz.length + " poprawnych.");
            $(document.createElement('h2')).css({'text-align':'center', 'font-size':'4em'}).text(Math.round(score/quiz.length * 100) + '%').insertAfter('#question');
			wynik = Math.round(score/quiz.length * 100);
			if(wynik < 50)
			{
            //$(document.createElement('h2')).css({'text-align':'center', 'font-size':'4em'}).text('Wygl??da na to, ??e s??abo Ci idzie! Mo??e chcesz zmieni?? spos??b nauczania na inny?' + '<br><a href="sluchowiec.php">S??uchowiec</a>' + '<br><a href="dzialaniowiec.php">Dzia??aniowiec</a>').insertAfter('#question');
			//document.write('<a href="sluchowiec.php">S??uchowiec</a>');
			document.getElementById("frame").innerHTML = "<b>Tw??j wynik:<b> " + wynik + "% <h2>Wygl??da na to, ??e s??abo Ci idzie! Mo??e chcesz zmieni?? spos??b nauczania na inny?</h2>"
			+ '<a href="sluchowiec.php">S??uchowiec</a>' + '<br><a href="dzialaniowiec.php">Dzia??aniowiec</a><br>';
			//document.getElementById("frame").innerHTML = '<a href="sluchowiec.php">S??uchowiec</a>';
			//document.getElementById("frame").innerHTML = '<a href="dzialaniowiec.php">Dzia??aniowiec</a>';
			}
        }

        /**
         * Runs the first time and creates all of the elements for the quiz
         */
        function init(){
            //add title
            if(typeof quiztitle !== "undefined" && $.type(quiztitle) === "string"){
                $(document.createElement('h1')).text(quiztitle).appendTo('#frame');
            } else {
                $(document.createElement('h1')).text("Quiz").appendTo('#frame');
            }

            //add pager and questions
            if(typeof quiz !== "undefined" && $.type(quiz) === "array"){
                //add pager
                $(document.createElement('p')).addClass('pager').attr('id','pager').text('Pytanie 1 z ' + quiz.length).appendTo('#frame');
                //add first question
                $(document.createElement('h2')).addClass('question').attr('id', 'question').text(quiz[0]['question']).appendTo('#frame');
                //add image if present
                if(quiz[0].hasOwnProperty('image') && quiz[0]['image'] != ""){
                    $(document.createElement('img')).addClass('question-image').attr('id', 'question-image').attr('src', quiz[0]['image']).attr('alt', htmlEncode(quiz[0]['question'])).appendTo('#frame');
                }
                $(document.createElement('p')).addClass('explanation').attr('id','explanation').html('&nbsp;').appendTo('#frame');
            
                //questions holder
                $(document.createElement('ul')).attr('id', 'choice-block').appendTo('#frame');
            
                //add choices
                addChoices(quiz[0]['choices']);
            
                //add submit button
                $(document.createElement('div')).addClass('choice-box').attr('id', 'submitbutton').text('Sprawd?? odpowied??').css({'font-weight':700,'color':'#222','padding':'30px 0'}).appendTo('#frame');
            
                setupButtons();
            }
        }
        
        init();
    });
    </script>
		<div id="frame" role="content"></div>
		
		<?php
		
		
		

		//obliczanie danych na potrzeby stronicowania
		$cur_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$results_per_page = 5; //Liczba wynik??w na stron??
		$skip = (($cur_page - 1) * $results_per_page); //liczba pomijanych wierszy na potrzeby stronicowania
		
		$query = "SELECT * FROM komentarze WHERE id_kursu = 4 AND zatwierdzony = 1 ORDER BY id_komentarza";
		$data = mysqli_query($mysqli, $query); //pobieramy wszystkie wiersze
			
		$total = mysqli_num_rows($data); //liczba wierszy zapisana na potrzeby stronicowania
		$num_pages = ceil($total / $results_per_page); //okre??lenie liczby stron
		$query .=  " LIMIT $skip, $results_per_page"; //dopisujemy do wcze??niejszego zapytania, klauzule LIMIT
		
		//wykonanie kwerendy
		$result = mysqli_query($mysqli, $query);
		
		$sql2  = "SELECT ocena FROM oceny WHERE id_kursu = 4";
		$result2 = $mysqli->query($sql2);
		$row2 = $result2->fetch_assoc();
		$idlekcji = 1;
		
		if ($result->num_rows > 0) 
		{
			echo "<h2>??rednia ocen: ".$row2['ocena']."</h2>";
			echo "<h2>Komentarze:</h2>";
			while($row = $result->fetch_assoc()) 
			{
			
			
			echo "<table>"; 
			echo "<tr>";
			if($_SESSION['stanowisko']=='Admin')
			{	
				echo "<td><b>ID</b></td>";
			}
			echo "<td ><b>LOGIN</b></td>";
			echo "<td ><b>TRE????</b></td>";
			echo "<td><b>OCENA</b></td>";
			echo "<td ><b>DATA DODANIA</b></td>";
			echo "</tr>";
				echo "<tr>";
				if($_SESSION['stanowisko']=='Admin')
				{	
					echo "<td><b>".$row['id_komentarza']."</b></td>";
				}
				echo "<td><b>".$row['login']."</b></td>";
				echo "<td>".$row['tresc_kom']."</td>";
				echo "<td>".$row['ocena']."</td>";
				echo "<td>".$row['data_dodania']."</td>";
				echo "</tr>"; 
			echo "</table>"; 
			
			}
			//wy??wietlanie nawigacj?? przy stronnicowaniu1
			if ($num_pages > 1) {
				 echo generate_page_links($cur_page, $num_pages);
			}
			
		} 
		else 
		{
			echo "Brak pasuj??cych wynik??w";
		}
		

		echo'<br><br><div id="dodaj_kom">
			<form name="dodaj_komentarz" method="post" action="dodaj_komentarz4.php">
			<h3>Skomentuj lekcj??:</h3>
			Tre???? Twojego komentarza: <br>
			<input name="Tresc" type="text" size="50" maxlength="80"><br>
			<br>
			<h3>Oce?? lekcj??:</h3>
			<input type="radio" name="ocena" id="1" value="1"><label for="1">1</label>
			<input type="radio" name="ocena" id="2" value="2"><label for="2">2</label>
			<input type="radio" name="ocena" id="3" value="3"><label for="3">3</label>
			<input type="radio" name="ocena" id="4" value="4"><label for="4">4</label>
			<input type="radio" name="ocena" id="5" value="5"><label for="5">5</label>
			<br>
			<span class="error"> <?php echo $ocenaErr;?></span>
			<br>
			<input value="Dodaj komentarz" type="submit">
			</form>
			<br>
			</div>
			';
			if(isset($_SESSION['dodano_komentarz']))
			{
				echo $_SESSION['dodano_komentarz'];
				unset($_SESSION['dodano_komentarz']);
			}
			if(isset($_SESSION['puste_dodaj_komentarz']))
			{
				echo $_SESSION['puste_dodaj_komentarz'];
				unset($_SESSION['puste_dodaj_komentarz']);
			}
			if(isset($_SESSION['blad_dodawania_komentarz']))
			{
				echo $_SESSION['blad_dodawania_komentarz'];
				unset($_SESSION['blad_dodawania_komentarz']);
			}
			if(isset($_SESSION['brak_uprawnien']))
			{
				echo $_SESSION['brak_uprawnien'];
				unset($_SESSION['brak_uprawnien']);
			}
			
			
			
		if($_SESSION['stanowisko']=='Admin' || $_SESSION['stanowisko']=='Moderator')
		{	
			echo'<div id="usun_kom">
			<br><br>
			<form name="usun_komentarz" method="post" action="usun_komentarz4.php">
			<h3>Formularz usuwania komentarzy:</h3>
			Podaj ID komentarza, kt??ry chcesz usun????: <br>
			<input name="Id_komentarz_usun" type="text" size="30" maxlength="3"><br>
			Podaj login u??ytkownika, kt??rego komentarz chcesz usun???? (musi by?? zgodny z podanym wy??ej ID komentarza): <br>
			<input name="Login_komentarz_usun" type="text" size="30" maxlength="30"><br>
			<br>
			<input value="Usu?? komentarz" type="submit">
			</form>
			<br>
			</div>
			';
				if(isset($_SESSION['usunieto_komentarz']))
				{	
					echo $_SESSION['usunieto_komentarz'];
					unset($_SESSION['usunieto_komentarz']);
				}
				if(isset($_SESSION['puste_usun_komentarz']))
				{	
					echo $_SESSION['puste_usun_komentarz'];
					unset($_SESSION['puste_usun_komentarz']);
				}
				if(isset($_SESSION['blad_usun_komentarz']))
				{
					echo $_SESSION['blad_usun_komentarz'];
					unset($_SESSION['blad_usun_komentarz']);
				}
				if(isset($_SESSION['brak_uprawnien']))
				{
					echo $_SESSION['brak_uprawnien'];
					unset($_SESSION['brak_uprawnien']);
				}
				
		}
		
		
	}
	else
	{
		echo"<h2><center>Nie masz wystarczaj??cych uprawnie??!!</center></h2>";
	}
	
	function generate_page_links($cur_page, $num_pages) {
			 $page_links = '';

			 // odno??nik do poprzedniej strony (-1)
			 if ($cur_page > 1) {
				  $page_links .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page - 1) . '">Poprzednia strona </a> ';
			 }

			 $i = $cur_page - 4;
			 $page = $i + 8;

			 for ($i; $i <= $page; $i++) {

				  if ($i > 0 && $i <= $num_pages) {
					   
					   //je??eli jeste??my na danej stronie to nie wy??wietlamy jej jako link    
					   if ($cur_page == $i  && $i != 0) {
							$page_links .= '' . $i;
					   }
					   else {

							//wy??wietlamy odno??nik do 1 strony
							if ($i == ($cur_page - 4) && ($cur_page - 5) != 0) { 
								 $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=1">1</a> '; 
							}
					   
							//wy??wietlamy "kropki", jako odno??nik do poprzedniego bloku stron
							if ($i == ($cur_page - 4) && (($cur_page - 6)) > 0) { 
								 $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page - 5) . '">...</a> '; 
							} 
					   
							//wy??wietlamy liki do bie????cych stron
							$page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '"> ' . $i . '</a> ';
				  
							//wy??wietlamy "kropki", jako odno??nik do nast??pnego bloku stron
							if ($i == $page && (($cur_page + 4) - ($num_pages)) < -1) { 
								 $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page + 5) . '">...</a>'; 
							} 
					   
							//wy??wietlamy odno??nik do ostatniej strony
							if ($i == $page && ($cur_page + 4) != $num_pages) { 
								 $page_links .= ' <a href="' . $_SERVER['PHP_SELF'] . '?page=' . $num_pages . '">' . $num_pages . '</a> '; 
							}
					   }
				  }
			 }

			 //odno??nik do nast??pnej strony (+1)
			 if ($cur_page < $num_pages) {
				  $page_links .= '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . ($cur_page + 1) . '"> Nast??pna strona</a>';
			 }

			 return $page_links;
		}
	
		?>
<?php

if($_SESSION['stanowisko']=='Admin')
{


$sql1 = "SELECT tresc FROM kursy WHERE id_kursu = 4";



    $result = $mysqli->query($sql1);


    $details = $result->fetch_array();




    $zapisanatresc = $details["tresc"];



$result1 = $mysqli->query($sql1);


echo'
<br><a href="https://htmled.it/edytor-html/" class="button style3 fit" >EDYTOR TEKSTU</a>

<div class="content1">
      <h2>EDYTOR TEKSTU</h2>
      <div id="editor" class="pell"></div>
      <div style="margin-top:20px;">
        <h3>Wyj??cie Text:</h3>
        <div id="text-output"></div>
      </div>
      <div style="margin-top:20px;">
        <h3>Wyj??cie HTML:</h3>
        <pre id="html-output"></pre>
      </div>
    </div>
'
?>

    <script src="dist/pell.js"></script>
    <script>
      var editor = window.pell.init({
        element: document.getElementById('editor'),
        defaultParagraphSeparator: 'p',
        onChange: function (html) {
          document.getElementById('text-output').innerHTML = html
          document.getElementById('html-output').textContent = html
        }
      })
    </script>
	<?php
echo'
<h3>Edytuj lekcj??:</h3>

<form name="edycja_lekcji" method="post" action="kurs1.php">
       <table>
 <td><textarea rows="10" cols="50" name="zapisanatresc" > '; echo $zapisanatresc; echo' </textarea></td>
        
    
        </table>


<br/>

<form name="edycja_lekcji" method="post" action="kurs4.php">
	
			<input value="Edycja lekcji" type="submit" name="edycja_lekcji">
			</form>';

					
				
				if (isset($_POST['edycja_lekcji']))
				{

					$zapisanatresc = $_POST['zapisanatresc'];
				
							$query = "UPDATE kursy SET tresc = '$zapisanatresc' where id_kursu =4";
							$result = mysqli_query($mysqli, $query);

		
				}
}
				
				?>


<br><br><br><center><a href="wzrokowiec.php" class="button style3 fit" data-poptrox="youtube,300x400">POWR??T</a></center>
<hr>
<br>
</div>  

    <section id="contact">
	
        <div class="container">
		<br>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Pozosta??my w kontakcie!</h2>
                    <hr class="my-4">
                    <p class="mb-5">&nbsp; &nbsp; &nbsp;Masz jakie?? pytania? Chcesz o co?? zapyta??? Chcesz wsp????pracowa??? A mo??e doda?? kurs? &nbsp; &nbsp; &nbsp; Je??li tak skontaktuj si?? z nami poni??ej. &nbsp;&nbsp;</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>https://twitter.com/e-learnpl</p>
                </div>
                <div class="col-lg-4 mr-auto text-center"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="mailto:your-email@your-domain.com">email@example.com</a></p>
                </div>
            </div>
        </div></section>
		<footer class="copyright">
				<div class="content"> Stworzone  <span class="text-switch ion-heart"></span>przez E-learning ?? 2020
                
	</div>
	</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
	   <script src="quiz.js"></script>
</body>

</html>