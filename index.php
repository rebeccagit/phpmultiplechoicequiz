<?php include './includes/headers.php' ?>
<!DOCTYPE HTML> 
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="Keywords" content="geek personality quiz, personality quiz, mbti quiz, sci fi personality">
<meta name="Description" content="Free geek mbti personality quiz and chat">

<title>Nerd Personality Quiz.  What kind of SciFi nerd are you?</title>

</head>
<body> 



<div id="intro">
<br>
<h1>Geeky Nerd Personality <br />Type Quiz</h1>
<br><br>
<p>Discover your personality with this quiz! It's based off of Myers-Briggs Typology Indicator (MBTI). You don't have to answer all the questions, but the more you answer then the more accurate your answer will be.</p>
<p>Check out my Star Wars <a href="http://aceprogrammers.com/scifiquiz/starwarsquiz/starwarsquiz.html">Quiz!</a>
<br><br>
</div>


</div>


<div id="quizform">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

<?php
$i=0;
$e=0;
$n=0;
$s=0;
$t=0;
$f=0;
$j=0;
$p=0;
?>


<br><br>
<img src="images/geekpersonality.png" alt="Geek personality quiz.">
<br><br>
<br><br>
  1. Like Yoda and Obi-Wan, I need to seperate myself from society and have time to think about the ways of the jedi.
<br>
 <input type="radio" name="q1" <?php if(isset($_POST['q1']) && $_POST['q1']=="True") {echo "checked"; $i = $i + 1;} ?> value="True">True 
   <input type="radio" name="q1" <?php if (isset($_POST['q1']) && $_POST['q1']=="False") {echo "checked"; $e = $e + 1;} ?> value="False">False  
<br><br>

  2. I'd rather go to my secret bat cave than go to another fund raiser!
<br>
 <input type="radio" name="q2" <?php if(isset($_POST['q2']) && $_POST['q2']=="True") {echo "checked"; $i = $i + 1;} ?> value="True">True 
   <input type="radio" name="q2" <?php if (isset($_POST['q2']) && $_POST['q2']=="False") {echo "checked"; $e = $e + 1;} ?> value="False">False  
<br><br>



3. Like Senator Palpatine, my choices and actions today are made to influence my future and build the life I want. 
<br />
 <input type="radio" name="q3" <?php if (isset($_POST['q3']) && $_POST['q3']=="True") {echo "checked"; $i = $i + 1;} ?> value="True">True 
   <input type="radio" name="q3" <?php if (isset($_POST['q3']) && $_POST['q3']=="False") {echo "checked"; $e = $e + 1;} ?> value="False">False 
<br><br>


4. I am like Obi-Wan. I can put together the pieces of the puzzle and clearly understand the big picture.
<br />
 <input type="radio" name="q4" <?php if (isset($_POST['q4']) && $_POST['q4']=="True") {echo "checked"; $n = $n + 1;} ?> 

value="True">True
   <input type="radio" name="q4" <?php if (isset($_POST['q4']) && $_POST['q4']=="False") {echo "checked"; $s = $s + 1;} ?> 

value="False">False
<br><br>

5. Life is tough and I can handle it. That's why I bought the Serenity, gathered my own crew together and started my own business.
<br />
 <input type="radio" name="q5" <?php if (isset($_POST['q5']) && $_POST['q5']=="True") {echo "checked"; $t = $t + 1;} ?> 

value="True">True
   <input type="radio" name="q5" <?php if (isset($_POST['q5']) && $_POST['q5']=="False") {echo "checked"; $f = $f + 1;} ?> 

value="False">False
<br><br>

6. Live long and prosper, but remember, being sensitive is not a good thing.
<br />
 <input type="radio" name="q6" <?php if (isset($_POST['q6']) && $_POST['q6']=="True") {echo "checked"; $t = $t + 1;} ?> 

value="True">True
   <input type="radio" name="q6" <?php if (isset($_POST['q6']) && $_POST['q6']=="False") {echo "checked"; $f = $f + 1;} ?> 

value="False">False
<br><br>

7. Unplanned, last minute get-togethers usually are a waste of my time. I have better things to do like learning jiu-jitsu and 

fighting Morpheus in training sessions.
<br />
 <input type="radio" name="q7" <?php if (isset($_POST['q7']) && $_POST['q7']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q7" <?php if (isset($_POST['q7']) && $_POST['q7']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br>

8. Putting together plans and ideas to overthrow the rebellion is utterly satisfying.
<br />
 <input type="radio" name="q8" <?php if (isset($_POST['q8']) && $_POST['q8']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q8" <?php if (isset($_POST['q8']) && $_POST['q8']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br>


9. I need time to get away and think about things. Like spending time on Dagobah to learn the ways of the force.
<br />
 <input type="radio" name="q9" <?php if (isset($_POST['q9']) && $_POST['q9']=="True") {echo "checked"; $i = $i + 1;} ?> value="True">True
   <input type="radio" name="q9" <?php if (isset($_POST['q9']) && $_POST['q9']=="False") {echo "checked"; $e = $e + 1;} ?> 

value="False">False
<br><br><br><br>
<img src="images/deepmeditation.jpg" alt="Deep meditation.">
<br><br><br><br>
10. I don't need the input of others before making a decision regarding how I plan to rule the galaxy.
<br />
 <input type="radio" name="q10" <?php if (isset($_POST['q10']) && $_POST['q10']=="True") {echo "checked"; $i = $i + 1;} ?> value="True">True
   <input type="radio" name="q10" <?php if (isset($_POST['q10']) && $_POST['q10']=="False") {echo "checked"; $e = $e + 1;} ?> value="False">False
<br><br>


11. What the mind can conceive, the body can achieve. Especially when you want to destroy the Death Star!
<br />
 <input type="radio" name="q11" <?php if (isset($_POST['q11']) && $_POST['q11']=="True") {echo "checked"; $n = $n + 1;} ?> value="True">True
   <input type="radio" name="q11" <?php if (isset($_POST['q11']) && $_POST['q11']=="False") {echo "checked"; $s = $s + 1;} ?> value="False">False
<br><br>

12. I can see positive potential where others see a hopeless situation. I can tell if someone will be a great jedi warrior - even if he is a slave on an isolated desert planet.
<br />
 <input type="radio" name="q12" <?php if (isset($_POST['q12']) && $_POST['q12']=="True") {echo "checked"; $n = $n + 1;} ?> 

value="True">True
   <input type="radio" name="q12" <?php if (isset($_POST['q12']) && $_POST['q12']=="False") {echo "checked"; $s = $s + 1;} ?> 

value="False">False
<br><br>

13. Well C-3P0, when someone whines or complains rather than talk about solutions, I tune them out.
<br />
 <input type="radio" name="q13" <?php if (isset($_POST['q13']) && $_POST['q13']=="True") {echo "checked"; $t = $t + 1;} ?> 

value="True">True
   <input type="radio" name="q13" <?php if (isset($_POST['q13']) && $_POST['q13']=="False") {echo "checked"; $f = $f + 1;} ?> 

value="False">False
<br><br>

14. How I feel about something isn't important when it comes to making the right decision.
<br />
 <input type="radio" name="q14" <?php if (isset($_POST['q14']) && $_POST['q14']=="True") {echo "checked"; $t = $t + 1;} ?> 

value="True">True
   <input type="radio" name="q14" <?php if (isset($_POST['q14']) && $_POST['q14']=="False") {echo "checked"; $f = $f + 1;} ?> 

value="False">False
<br><br>

15. I don't like surprises, especially when no one tells me that the plans to the rebel base are hidden inside R2-D2!
<br />
 <input type="radio" name="q15" <?php if (isset($_POST['q15']) && $_POST['q15']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q15" <?php if (isset($_POST['q15']) && $_POST['q15']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br>

16. Setting clearly defined goals leads me to great results. 
<br />
 <input type="radio" name="q16" <?php if (isset($_POST['q16']) && $_POST['q16']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q16" <?php if (isset($_POST['q16']) && $_POST['q16']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br>

17. People are usually too demanding of my time or thoughts. I'd rather spend time in my quarters with Jar Jar just having 

tea and crumpets.
<br />
 <input type="radio" name="q17" <?php if (isset($_POST['q17']) && $_POST['q17']=="True") {echo "checked"; $i = $i + 1;} ?> 

value="True">True
   <input type="radio" name="q17" <?php if (isset($_POST['q17']) && $_POST['q17']=="False") {echo "checked"; $e = $e + 1;} ?> 

value="False">False
<br><br><br><br>
<img src="images/darthchef.jpg" alt="Darth Chef.">
<br><br><br><br>


18. When I'm with people, I'm usually trying to figure out how I can make a quick getaway. Unfortunately, when Luke 

showed up, I knew it was time to overthrow the empire so I couldn't be a hermit anymore.
<br />
 <input type="radio" name="q18" <?php if (isset($_POST['q18']) && $_POST['q18']=="True") {echo "checked"; $i = $i + 1;} ?> 

value="True">True
   <input type="radio" name="q18" <?php if (isset($_POST['q18']) && $_POST['q18']=="False") {echo "checked"; $e = $e + 1;} ?> 

value="False">False
<br><br>

19. Sometimes I focus too much on the needs of the future rather than the needs of today. But when you're a vampire, like Selene, you 

have all the time in the world to do that!
<br />
 <input type="radio" name="q19" <?php if (isset($_POST['q19']) && $_POST['q19']=="True") {echo "checked"; $n = $n + 1;} ?> 

value="True">True
   <input type="radio" name="q19" <?php if (isset($_POST['q19']) && $_POST['q19']=="False") {echo "checked"; $s = $s + 1;} ?> 

value="False">False
<br><br>

20. I can often see the big picture and can rightly guess the outcomes to many events and choices. That's why I'm the 

leader of the Jedis and over 900 years old.
<br />
 <input type="radio" name="q20" <?php if (isset($_POST['q20']) && $_POST['q20']=="True") {echo "checked"; $n = $n + 1;} ?> 

value="True">True
   <input type="radio" name="q20" <?php if (isset($_POST['q20']) && $_POST['q20']=="False") {echo "checked"; $s = $s + 1;} ?> 

value="False">False
<br><br>

21. I sometimes "have a bad feeling about this". 
<br />
 <input type="radio" name="q21" <?php if (isset($_POST['q21']) && $_POST['q21']=="True") {echo "checked"; $f = $f + 1;} ?> 

value="True">True
   <input type="radio" name="q21" <?php if (isset($_POST['q21']) && $_POST['q21']=="False") {echo "checked"; $t = $t + 1;} ?> 

value="False">False
<br><br>

22. Making people smile isn't important to me. I mean, it's better to fight crime and injustice, even if it's me they need to 

hate.
<br />
 <input type="radio" name="q22" <?php if (isset($_POST['q22']) && $_POST['q22']=="True") {echo "checked"; $t = $t + 1;} ?> 

value="True">True
   <input type="radio" name="q22" <?php if (isset($_POST['q22']) && $_POST['q22']=="False") {echo "checked"; $f = $f + 1;} ?> 

value="False">False
<br><br>
<br><br>
<img src="images/startrek.jpg" alt="Star Trek Away Team.">
<br><br><br><br>

23. Once I make a decision, I stay with it. But don't be surprised when I show up out of the blue and help you destroy the death star!
<br />
 <input type="radio" name="q23" <?php if (isset($_POST['q23']) && $_POST['q23']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q23" <?php if (isset($_POST['q23']) && $_POST['q23']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br>

24. Staying organized is always highly important.  And the best person for the job is an android like Data.
<br />
 <input type="radio" name="q24" <?php if (isset($_POST['q24']) && $_POST['q24']=="True") {echo "checked"; $j = $j + 1;} ?> 

value="True">True
   <input type="radio" name="q24" <?php if (isset($_POST['q24']) && $_POST['q24']=="False") {echo "checked"; $p = $p + 1;} ?> 

value="False">False
<br><br><br><br>



<input type="submit" name="submit" value="Submit">


<br><br>
This site built by <a href="http://www.aceprogrammers.com">aceprogrammers</a>.

</form>
<br><br>
&copy; <?php echo date("Y")?>
</div>


<div id="results">

<?php
function ie($in,$ex) {
     if ($in > $ex) { echo "I";}
     else { echo "E";}
}

function sn($se,$nt) {
     if ($se > $nt) {echo "S";}
     else { echo "N";}
}

function tf($th,$fe) {
     if ($th > $fe) { echo "T";}
     else { echo "F";}
}

function jp($ju,$pe) {
     if ($ju > $pe) { echo "J";}
     else { echo "P";}
}
?>

<?php

if (isset($_POST["submit"])) 
{

echo "YOUR QUIZ RESULTS!";
echo "<br>";echo "<br>";
echo "You are an ";
ie($i,$e);
sn($s,$n);
tf($t,$f);
jp($j,$p);
echo "<br>";echo "<br>";
echo "Click the links below to find out more about your personality!";
echo "<br>";echo "<br>";
echo "<a href='http://www.lightersideoftheforce.com/2013/10/which-character-has-your-personality.html'>The Lighter Side of the Force</a>";
echo "<br>";echo "<br>";
echo "<a href='http://myersbriggspersonalitytypes.tumblr.com/'>Myers Briggs Personality Types</a>";
echo "<br>";echo "<br>";
}

?>


</div>



<br><br><br><br>



</body></html>