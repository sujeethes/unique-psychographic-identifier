<!DOCTYPE html>
<html lang="en">
<head>
	<title>IDEATHON SURVEY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
<!--===============================================================================================-->
<style>
    input
    {
        border-bottom: 1px solid black;
        margin-bottom: 20px;
        padding:5px;
    }
</style>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="dbadd.php" method="POST">
				<span class="contact100-form-title">
					SURVEY 
                </span>
                <span>
                    Email Address<br><br>
                    <input type="email" name="email" required>
                    <span class="contact100-form-title">
					DOMAIN 1 : Social Media
				</span>
				 <span >1. How comfortable are you in using social media?</span><br><br>
                <input type="radio" name="sma1" value="1capture-and-post" required >I like to capture all beautiful moments in my life and post them in social media&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma1" value="2update-feed-threemonths"> Updating feed once in 3 months would be comfortable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma1" value="3rare-usage"> Rare usage of social media would be recommended&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma1" value="4not-using-media"> Using social media would not interest me<br><br>
                <span >2. How many friends from your social media website have you met in person?</span><br><br>
                <input type="radio" name="sma2" value="1all-of-them"  required> All of them &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma2" value="2most-of-them"> Most of them &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma2" value="3about-half-of-them"> About half of them &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma2" value="4few-of-them">A few of them <br><br>
                <span >3. Will social media serve any use to us?</span><br><br>
                <input type="radio" name="sma3" value="1waste-time"  required> Waste of time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma3" value="2used-when-bored"> Can be used when we are bored&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma3" value="3meet-people"> Used to meet new people &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma3" value="4to-know-currentaffairs"> Very useful to know current affairs<br><br>
                <span >4. How will you kill your freetime?</span><br><br>
                <input type="radio" name="sma4" value="1facebook" required> Facebook &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma4" value="2instagram"> Instagram &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma4" value="3tiktok"> TikTok &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sma4" value="4twitter"> Twitter<br><br>
				</span>
			
					<span class="contact100-form-title">
					DOMAIN 2: Travelling
				</span><br>
				<span >1. What worries you most about the road ?</span><br><br>
                <input type="radio" name="tr1" value="1health"  required> Health &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr1" value="2safety"> Safety  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr1" value="3lost"> Lost &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr1" value="4stolen"> Stolen <br><br>
                <span >2. How confident do you feel about the information and directions people give you during your trips?</span><br><br>
                <input type="radio" name="tr2" value="1not-confident-at-all"  required> Not confident at all &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr2" value="2not-very-confident" > Not very confident &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr2" value="3somewhat-confident" > Somewhat confident  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr2" value="4very-confident"> Very confident <br><br>
                <span >3. Do you think travelling makes you a better person?</span><br><br>
                <input type="radio" name="tr3" value="1not-at-all"  required> Not at all &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr3" value="2may-be" > May be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr3" value="3sure" >  Sure &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr3" value="4definitely"> Definitely <br><br>
                <span >4. Which types of trips are most suitable for you?</span><br><br>
                <input type="radio" name="tr4" value="1sports-and-adventure-values"  required> Sports and Adventure Trips &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr4" value="2discovery-trips"> Relaxation and discovery Trips&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr4" value="3eco-solidarity"> Eco-solidarity trips &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="tr4" value="4health-well-being"> Health and well-being trips<br><br>
                <span class="contact100-form-title">
					DOMAIN 3 : Food
				</span>
				<span >1. Taking fast food depends on emotion.Emotion factors such as happy,sad,angry and stress ?</span><br><br>
                <input type="radio" name="f1" value="1strongly-agree" required > Strongly Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f1" value="2agree"> Agree&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f1" value="3disagree"> Disagree &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f1" value="4strongly-disagree"> Strongly Disagree<br><br>
                <span >2. Is income influencing choosen fast food?</span><br><br>
                <input type="radio" name="f2" value="1strongly-agree"  required> Strongly Agree &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f2" value="2agree"> Agree &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f2" value="3disagree"> Disagree &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f2" value="4strongly-disagree"> Strongly disagree<br><br>
                <span >3. What kind of food would you prefer?</span><br><br>
                <input type="radio" name="f3" value="1indian"  required> Indian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f3" value="2continental"> Continental &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f3" value="3italian"> Italian &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f3" value="4chinese"> Chinese<br><br>
                <span >4. What do you feel about having food at irregular timings? </span><br><br>
                <input type="radio" name="f4" value="1notaffected"  required> Not affected &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f4" value="2sad"> Sad  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f4" value="3annoyed"> Annoyed &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="f4" value="4frustrated"> Frustrated<br><br>
                <span class="contact100-form-title">
					DOMAIN 4 : Fashion
				</span>
				 <span >1.What do you think of fashionist as these days? </span><br><br>
                <input type="radio" name="fa1" value="1some-are-exaggerating"  required> Some are exaggerating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa1" value="2too-thin"> Too thin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa1" value="3fake"> Fake &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa1" value="4good"> Good<br><br>
                <span >2. How would you like others to see you in?</span><br><br>
                <input type="radio" name="fa2" value="1casuals"  required> Casuals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa2" value="2formals"> Formals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa2" value="3traditional"> Traditional &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa2" value="4vintage"> Vintage<br><br>
                <span >3.Why do you most often buy new clothes?</span><br><br>
                <input type="radio" name="fa3" value="1as-a-gift"  required> As a gift &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa3" value="2worn-out-clothes">Replacing worn-out clothes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa3" value="3to-enrich-my-wardrobe"> To enrich my wardrobe &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa3" value="4daily-routines"> Its one of my daily routines <br><br>
                <span >4. What factor will you consider to decide your clothing style?</span><br><br>
                <input type="radio" name="fa4" value="1mood"  required> Mood &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa4" value="2location"> Location &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa4" value="3priority"> Priority&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="fa4" value="4occasion"> Occasion<br><br>
                 <span class="contact100-form-title">
					DOMAIN 5 : Sports
				</span>
				 <span >1. Express your enthusiasm in a scale of 1-100</span><br><br>
                <input type="radio" name="sp1" value="1below20"  required> Below 20% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp1" value="2between20-50"> Between 20-50% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp1" value="3between50-80"> Between 50-80% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp1" value="4above80"> Above 80% <br><br>
                <span >2. How disciplined will you be,if you start learning a sport</span><br><br>
                <input type="radio" name="sp2" value="1leave-it-after-a-week"  required> Would leave it after a week,if I loose interest &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp2" value="2dedicated-for-3-months"> I would rather be dedicated for 3 months &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp2" value="3over-something-else"> Give more priority to sports than something else &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp2" value="4to-appear-for-state-competition"> Would learn a sport to appear for some state competitions <br><br>
                <span >3. How useful are physical activities in your daily-life?</span><br><br>
                <input type="radio" name="sp3" value="1no-use"  required> Would be of no use &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp3" value="21-hr-in-your-daily-life"> Should be allocated atleast a time of 1 hr in your daily life &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp3" value="3work-ethics">  It helps you focus on work ethics &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp3" value="4carrer-out-of-it"> Should find a career out of it<br><br>
                <span >4. How bounded will you be towards the game restrictions?</span><br><br>
                <input type="radio" name="sp4" value="1no-concern"  required>Rules are of no concern to me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp4" value="2foul-activities"> I will try not to commit any foul activities  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp4" value="3rules"> I will follow all the rules  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="sp4" value="4rules-and-situations"> Analysing the rules and situations, and then acting upon it <br><br>
                <span class="contact100-form-title">
					DOMAIN 6: Media
				</span>
				 <span >1. How frequently do you watch movies/T.V series ?</span><br><br>
                <input type="radio" name="m1" value="1not-at-all"  required> Not at all &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m1" value="2once-in-a-while"> Once in a while &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m1" value="3at-regular-intervals"> At regular Intervals &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m1" value="4very-frequently"> Very frequently <br><br>
                <span >2. What do you like the most?</span><br><br>
                <input type="radio" name="m2" value="1comedy"  required> Comedy  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m2" value="2action"> Action &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m2" value="3thriller"> Thriller  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m2" value="4romance"> Romance <br><br>
                <span >3. Do you think movies impact your daily routine ?</span><br><br>
                <input type="radio" name="m3" value="1not-at-all"  required> Not at all &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m3" value="2to-an-extent"> To an extent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m3" value="3it-will-influence"> It will influence  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m3" value="4totally-effects-me"> Totally affects me <br><br>
                <span >4. How do you plan your schedule in order to watch movies?</span><br><br>
                <input type="radio" name="m4" value="1allocate-time"  required>Would allocate time  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m4" value="2late-night-time">Would prefer late night hours  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m4" value="3more-than-5-hrs">  Would like to watch movies for more than 5hrs &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <input type="radio" name="m4" value="4any-time-possible"> Any time possible <br><br>
				<input type="submit" name="submit" value="Submit" style="margin-left: 140px;background-color: darkgreen;color:white;width:80px;height:0.7cm;font-size: 18px">
			</form>
		</div>
	</div>




</body>
</html>