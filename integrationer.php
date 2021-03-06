<!DOCTYPE html>
<html>
	<head>
		<title>Integrationer | Homepal Sverige</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="navigation.css">
		<link rel="stylesheet" type="text/css" href="content.css">
		<link rel="stylesheet" type="text/css" href="problems.css">
		<link rel="stylesheet" type="text/css" href="steps.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		
		<link rel="stylesheet" type="text/css" href="datalagring.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=3.0, minimum-scale=0.9">
		

		<style>
			
		</style>

	</head>
	<body>
		
		
		<div id='topNavSection'>
			<div id='topNavParent'>
				<div class='contentSection'>
					
					<span class='mobileHidden'>
					<a class='topLogoSection' href='index.html' style='border: 1px solid #cccccc; border-top: 0;'>
						<img class='topLogo' src='logo.png'>
						<h4 class='topLogoText'>Homepal Sverige</h4>
					</a>
					</span>
					
					<button id='closeTopNav' onclick='closeTopNav();'>
						<p id='closeTopNavLabel'>Stäng</p>
						<img id='closeTopNavCross' src='close.png'>
					</button>
				</div>
				
				<div id='topNavContent'>
					<a class='webpageLinkSection' href='inloggning.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Konto</p>
						<p class='webpageLink'>Logga in</p>
						<img class='webpageLinkIcon' src='konto.png' style='height: 48px; top: 21px;'>
					</a>
					
					<a class='webpageLinkSection' href='kund.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Bli kund</p>
						<p class='webpageLink'>Kom igång</p>
						<img class='webpageLinkIcon' src='kund.png' style='top: 19px;'>
					</a>
					
					<a class='webpageLinkSection' style='background-color: #f5f5f5; border: 1px solid #cccccc;' href='support.html'>
						<p class='webpageLinkTitle'>Support</p>
						<p class='webpageLink'>Få hjälp</p>
						<img class='webpageLinkIcon' src='support.png'>
					</a>
					
					<div class='row'>
						<h4 class='tinyTitle'>Plattformen</h4>
						<p class='tinyDescription topNavText'>
							Bekanta dig med vår plattform och våra tjänster.
						</p>
					</div>
				
					
					<a class='webpageLinkSection' href='datalagring.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Datalagring</p>
					<p class='webpageLink'>Läs om hur vi gör</p>
						<img class='webpageLinkIcon' src='1.png'>
					</a>
					
					<a class='webpageLinkSection' href='integrationer.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Integrationer</p>
						<p class='webpageLink'>Läs om hur det funkar</p>
						<img class='webpageLinkIcon' src='2.png'>
					</a>
					
					<a class='webpageLinkSection' href='effektivitet.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Effektivisering</p>
						<p class='webpageLink'>Läs om vad vi uppnår</p>
						
						<img class='webpageLinkIcon' src='3.png'>
					</a>
					
					<a class='webpageLinkSection' href='framtiden.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Framtiden</p>
						<p class='webpageLink'>Läs mer</p>
						
						<img class='webpageLinkIcon' src='framtiden.png' style='height: 48px; top: 21px;'>
					</a>
					
					
					<div class='row'>
						<h4 class='tinyTitle'>Integrationer</h4>
						<p class='tinyDescription topNavText'>
							Se vårt utbud av integrationer och börja utveckla.
						</p>
					</div>
				
					<a class='webpageLinkSection' href='integrationsbutiken.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Integrationsbutiken</p>
						<p class='webpageLink'>Visa utbudet</p>
						<img class='webpageLinkIcon' src='integrationsbutik.png' style='top: 17px; right: 17px; height: 52px;'>
					</a>
					
					<a class='webpageLinkSection' style='background-color: #f5f5f5; border: 1px solid #cccccc;' href='https://developer.homepal.se/'>
						<p class='webpageLinkTitle'>Developer</p>
						<p class='webpageLink'>Kom igång</p>
						<img class='webpageLinkIcon' src='developer.png' style='height: 52px; top: 19px;'>
					</a>
				

					
					
					
					<div class='row'>
						<h4 class='tinyTitle'>Övrigt</h4>
						<p class='tinyDescription topNavText'>
							Delta i demovisningar och workshops eller följ oss.
						</p>
					</div>
				
					<a class='webpageLinkSection' href='demovisning.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Demovisning</p>
						<p class='webpageLink'>Boka nu</p>
						<img class='webpageLinkIcon' src='demo.png' style='height: 46px; top: 22px;'>
					</a>
					
					<a class='webpageLinkSection' href='workshops.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Workshops</p>
						<p class='webpageLink'>Boka nu</p>
						<img class='webpageLinkIcon' src='workshops.png'>
					</a>
					
					<a class='webpageLinkSection' href='https://www.linkedin.com/company/homepal-sverige/?originalSubdomain=se' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Nyheter</p>
						<p class='webpageLink'>Följ oss</p>
						<img class='webpageLinkIcon' src='linkedin.png' style='top: 22px; height: 46px;'>
					</a>
				
				
					<div class='row' style='margin-top: 70px;'></div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							Sidor
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='datalagring.html'>Datalagring</a></div>
						<div class='row'><a class='footerLink' href='integrationer.html'>Integrationer</a></div>
						<div class='row'><a class='footerLink' href='effektivitet.html'>Effektivisering</a></div>
						<div class='row'><a class='footerLink' href='framtiden.html'>Framtiden</a></div>
						
						
					</div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							För kunder
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='inloggning.html'>Konto</a></div>
						<div class='row'><a class='footerLink' href='support.html'>Support</a></div>
						<div class='row'><a class='footerLink' href='workshops.html'>Workshops</a></div>
						<div class='row'><a class='footerLink' href='integrationsbutiken.html'>Integrationsbutiken</a></div>
					</div>

					<div class='footerColumn' style='margin-right: 0;'>
						<h5 class='footerTitle'>
							För utvecklare
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='inloggning.html'>Konto</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/'>Introduktion</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/getting-started'>Genomgångar</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/documentation'>Dokumentation</a></div>
					</div>
					
					<div class='footerColumn' style='margin-right: 0;'>
						<h5 class='footerTitle'>
							Övrigt
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='kund.html'>Bli kund</a></div>
						<div class='row'><a class='footerLink' href='https://www.linkedin.com/company/homepal-sverige/'>Nyheter</a></div>
						<div class='row'><a class='footerLink' href='demovisning.html'>Demovisning</a></div>
						<div class='row'><a class='footerLink' href='support.html'>Partnerkontakt</a></div>
					</div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							Villkor
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='#'>Integritet</a></div>
						<div class='row'><a class='footerLink' href='#'>Sekretess och användarvillkor</a></div>
					</div>


					<div id='footerLogoSection'>
						<img id='footerLogo' src='logo.png'>

						<p id='footerLogoText'>
							<span style='color: #000000; font-weight: 600;'>Homepal</span> &#169; 2020
						</p>
					</div>
					
					
				</div>
				
			</div>
		</div>
		
		
		
			
		<div id='topSection'>
			<div class='contentSection'>
				<a class='topLogoSection' href='index.html'>
					<img class='topLogo' src='logo.png'>
					<h4 class='topLogoText'>Homepal Sverige</h4>
				</a>

				<button id='topNavTriggerButton' onclick='displayTopNav()'>
					<span class='desktopNav'>
						<h4 class='topLogoText topNavLink'>Plattformen</h4>
						<h4 class='topLogoText topNavLink'>Integrationer</h4>
						<h4 class='topLogoText topNavLink'>Övrigt</h4>
					</span>
					<span class='tabletNav'>
						<h4 class='topLogoText topNavLink'>Meny</h4>
					</span>
					<img id='topNavDisplayImg' src='meny.png'>
				</button>
			</div>
		</div>
		
		<div class='row' style='background-color: #ffffff; margin-bottom: -103px;'>
		<div id='topSectionMobile'>
			<div id='topSectionMobileContent'>
				<a href='index.html'>
					<img class='topLogo' src='logo.png'>
					<h4 class='topLogoText'>Homepal Sverige</h4>
				</a>

				<button id='topNavTriggerButtonMobile' onclick='displayTopNav()'>
					<img id='topNavDisplayImg' style='height: 23px;' src='meny.png'>
				</button>
			</div>
		</div>
		</div>
		
		
		
		
		<!-- Content -->
		
		
		
		
		<div id='contentParent2' style='background-color: #ffffff;'>
			

			<img class='wallpaper' src='step2.png'>
			
			<div class='contentSection3'>
				
				<div class='titleParent'>
					<h3 class='smallTitle3'><span style='color: #cccccc;'>Steg två</span><br>Integrationer</h3>
				</div>
			</div>
			
			<div class='contentSection5' style='margin-top: 0;'>
				<a class='webpageLinkSection' href='datalagring.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
					<p class='webpageLinkTitle'>Datalagring</p>
					<p class='webpageLink'>Läs om hur vi gör</p>
					<img class='webpageLinkIcon' src='1.png'>
				</a>
				
				<a class='webpageLinkSection' href='integrationer.html' style='background-color: #EAF4FF; border: 2px solid #7AA5D4;'>
					<p class='webpageLinkTitle'>Integrationer</p>
					<p class='webpageLink'>Läs om hur det funkar</p>
					<img class='webpageLinkIcon' src='2.png'>
				</a>
				
				<a class='webpageLinkSection' href='effektivitet.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
					<p class='webpageLinkTitle'>Effektivisering</p>
					<p class='webpageLink'>Läs om vad vi uppnår</p>
					<img class='webpageLinkIcon' src='3.png'>
				</a>
				
				<div class='pageDivider'></div>
			</div>
			
			
			
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				
				<h1 class='largeTitle'>
					Enkelheten som du har väntat på.
				</h1>
				
				<img class='productImage' src='hem.png'>
			</div>
			
			
			<div class='tinyTextSection'>
				<p class='tinyText tinyTextParagraph'>
					Nu finns plattformen som samlar all din fastighetsdata och som gör arbetet med den till en fröjd. Att börja använda nya integrationer är nu så enkelt som ett klick och de bästa finns redan inyggda. Fastighetsdata som tidigare tyngt din verksamhet kommer få den att lyfta. 
				</p>
				
				<p class='tinyText tinyTextParagraph'>
					Listan kan göras lång. Det enda du behöver veta är att du troligen aldrig har upplevt något liknande. Om du inte tidigare hittat det rätta hemmet för din fastighetsdata är vi övertygade om att du hittade det precis. Välkommen hem och välkommen till Homepal!
				</p>
			</div>
			
			
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				
				<h1 class='largeTitle'>
					Integrationer som du aldrig sett dem förut.
				</h1>
				
				<img class='productImage' src='integrationer.png'>
			</div>
			
			
			<div class='tinyTextSection'>
				<p class='tinyText tinyTextParagraph'>
					Nu finns plattformen som samlar all din fastighetsdata och som gör arbetet med den till en fröjd. Att börja använda nya integrationer är nu så enkelt som ett klick och de bästa finns redan inyggda. Fastighetsdata som tidigare tyngt din verksamhet kommer få den att lyfta. 
				</p>
				
				<p class='tinyText tinyTextParagraph'>
					Listan kan göras lång. Det enda du behöver veta är att du troligen aldrig har upplevt något liknande. Om du inte tidigare hittat det rätta hemmet för din fastighetsdata är vi övertygade om att du hittade det precis. Välkommen hem och välkommen till Homepal!
				</p>
			</div>
			
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				
				<h1 class='largeTitle'>
					<!-- Det bästa?<br> De finns ett klick bort. -->
					Aldrig längre bort än ett klick.
				</h1>
				
				<img class='productImage' src='installera.png'>
			</div>
			
			
			<div class='tinyTextSection'>
				<p class='tinyText tinyTextParagraph'>
					Nu finns plattformen som samlar all din fastighetsdata och som gör arbetet med den till en fröjd. Att börja använda nya integrationer är nu så enkelt som ett klick och de bästa finns redan inyggda. Fastighetsdata som tidigare tyngt din verksamhet kommer få den att lyfta. 
				</p>
				
				<p class='tinyText tinyTextParagraph'>
					Listan kan göras lång. Det enda du behöver veta är att du troligen aldrig har upplevt något liknande. Om du inte tidigare hittat det rätta hemmet för din fastighetsdata är vi övertygade om att du hittade det precis. Välkommen hem och välkommen till Homepal!
				</p>
			</div>
			
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				
				<div class='row'>
					<img class='largeTitleIllustration' src='developer.png'>
				</div>
				
				<h1 class='largeTitle'>
					Sa någon utvecklare?
				</h1>
				
			</div>
			
			
			<div class='tinyTextSection'>
				<p class='tinyText tinyTextParagraph'>
					Nu finns plattformen som samlar all din fastighetsdata och som gör arbetet med den till en fröjd. Att börja använda nya integrationer är nu så enkelt som ett klick och de bästa finns redan inyggda. Fastighetsdata som tidigare tyngt din verksamhet kommer få den att lyfta. 
				</p>
				
				<p class='tinyText tinyTextParagraph'>
					Listan kan göras lång. Det enda du behöver veta är att du troligen aldrig har upplevt något liknande. Om du inte tidigare hittat det rätta hemmet för din fastighetsdata är vi övertygade om att du hittade det precis. Välkommen hem och välkommen till Homepal!
				</p>
			</div>

			
			
			
			<div class='contentSection3'>
				
				<div class='titleParent'>
					<h3 class='smallTitle3'><span style='color: #cccccc;'>Nästa steg</span><br>Effektivisering</h3>
				</div>
			</div>
			
			<div class='contentSection5' style='margin-top: 0;'>
				<a class='webpageLinkSection' href='effektivitet.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
					<p class='webpageLinkTitle'>Effektivisering</p>
					<p class='webpageLink'>Läs om vad vi uppnår</p>
					<img class='webpageLinkIcon' src='3.png'>
				</a>
			</div>
			
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<!-- Footer -->
		
		
		<div id='footer'>
			<div id='footerContent'>
				
				<!--<div class='footerColumnWide'>
					<h5 class='footerTitle'>
						Relaterat
					</h5>
					
					<div style='float: left; width: 100%; height: 1px; background-color: #cccccc;'></div>
				</div>
				
				<div class='row' style='margin-bottom: 20px;'>
					<a class='webpageLinkSection' href='#' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Bli kund</p>
						<p class='webpageLink'>Kom igång</p>
						<img class='webpageLinkIcon' src='/wp-content/uploads/2020/08/kundkasse.png' style='top: 19px;'>
					</a>

					<a class='webpageLinkSection' href='#' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Demovisning</p>
						<p class='webpageLink'>Boka nu</p>
						<img class='webpageLinkIcon' src='/wp-content/uploads/2020/08/Group-177-2.png' style='height: 46px; top: 22px;'>
					</a>

					<a class='webpageLinkSection' href='#' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Workshops</p>
						<p class='webpageLink'>Boka nu</p>
						<img class='webpageLinkIcon' src='/wp-content/uploads/2020/08/Group-166-2.png'>
					</a>
					
				</div>-->
				
				<div class='footerColumn'>
						<h5 class='footerTitle'>
							Sidor
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='datalagring.html'>Datalagring</a></div>
						<div class='row'><a class='footerLink' href='integrationer.html'>Integrationer</a></div>
						<div class='row'><a class='footerLink' href='effektivitet.html'>Effektivisering</a></div>
						<div class='row'><a class='footerLink' href='framtiden.html'>Framtiden</a></div>
						
						
					</div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							För kunder
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='https://portal.homepal.se/'>Konto</a></div>
						<div class='row'><a class='footerLink' href='/support/'>Support</a></div>
						<div class='row'><a class='footerLink' href='workshops.html'>Workshops</a></div>
						<div class='row'><a class='footerLink' href='integrationsbutiken.html'>Integrationsbutiken</a></div>
					</div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							För utvecklare
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='https://portal.homepal.se/'>Konto</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/'>Introduktion</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/getting-started'>Genomgångar</a></div>
						<div class='row'><a class='footerLink' href='https://developer.homepal.se/documentation'>Dokumentation</a></div>
					</div>
					
					<div class='footerColumn'>
						<h5 class='footerTitle'>
							Övrigt
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='kund.html'>Bli kund</a></div>
						<div class='row'><a class='footerLink' href='https://www.linkedin.com/company/homepal-sverige/'>Nyheter</a></div>
						<div class='row'><a class='footerLink' href='demovisning.html'>Demovisning</a></div>
						<div class='row'><a class='footerLink' href='support.html'>Partnerkontakt</a></div>
					</div>

					<div class='footerColumn'>
						<h5 class='footerTitle'>
							Villkor
						</h5>

						<div class='footerDivider'></div>

						<div class='row'><a class='footerLink' href='#'>Integritet</a></div>
						<div class='row'><a class='footerLink' href='#'>Sekretess och användarvillkor</a></div>
					</div>


					<div id='footerLogoSection'>
						<img id='footerLogo' src='logo.png'>

						<p id='footerLogoText'>
							<span style='color: #000000; font-weight: 600;'>Homepal</span> &#169; 2020
						</p>
					</div>
					
				</div>
			
		</div>
		
		
	</body>
	
	<script>
			function displayTopNav()	{
				document.getElementById("topNavSection").style.display = "block";
				document.body.style.position = "fixed";
			}
			
			function closeTopNav()	{
				document.getElementById("topNavSection").style.display = "none";
				document.body.style.position = "relative";
			}
		</script>
</html>