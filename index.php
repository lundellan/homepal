<!DOCTYPE html>
<html>
	<head>
		<title>Plattformen för dina fastigheter | Homepal Sverige</title>
		
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="navigation.css">
		<link rel="stylesheet" type="text/css" href="content.css">
		<link rel="stylesheet" type="text/css" href="problems.css">
		<link rel="stylesheet" type="text/css" href="steps.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		
		<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
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
				
				
					<div class='footerPaddingTopNav'></div>

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
			
			<div class='contentSection5'>
				<div class='row'>
					<h4 class='tinyTitle'>Redan kund?</h4>
				</div>
				
					<a class='webpageLinkSection' href='inloggning.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Konto</p>
						<p class='webpageLink'>Logga in</p>
						<img class='webpageLinkIcon' src='konto.png' style='height: 48px; top: 21px;'>
					</a>
				
					<span class='mobileHide'>
						<a class='webpageLinkSection' style='background-color: #f5f5f5; border: 1px solid #cccccc;' href='support.html'>
							<p class='webpageLinkTitle'>Support</p>
							<p class='webpageLink'>Få hjälp</p>
							<img class='webpageLinkIcon' src='support.png'>
						</a>
					</span>
				
			</div>
			
			<img id='topBanner' src='housesWallpaper.png'>
			
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				
				<h1 class='largeTitle'>
					Det är dags för dina fastigheter att flytta in.
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
			
			<div class='contentSection5' style='padding-bottom: 0;'>
				<div class='row'>
					<img id='signature' src='signatur.png'>
				</div>

				<div class='row'>
					<h4 class='tinyTitle' style='margin-top: 0;'>Kevin Kimaryo</h4>
					<p class='tinyText tinyDescription' style='margin-bottom: 28px;'>
						Verkställande direktör
					</p>
				</div>
			</div>
				
			
			<span class='mobileHidden'>
			<div class='contentSection5'>		

				<div class='pageDivider'></div>
				
				<div class='row'>
					<h4 class='tinyTitle'>Utvalda integrationer</h4>
					<p class='tinyText tinyDescription' style='margin-bottom: 28px;'>
						Med ett konto kan du lägga till och integrera dem med ett klick.
					</p>
				</div>
				
				
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='boappa.png'>
					</div>
					<p class='webpageLinkTitle'>Boappa</p>
					<p class='appSectionDescription'>
						Sammankoppla dina bostäders grannskap i en app.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogoIcon' src='dinhyresvärd.png'>
					</div>
					<p class='webpageLinkTitle'>Din Hyresvärd</p>
					<p class='appSectionDescription'>
						Förvalta dina fastigheter med en heltäckande lösning.
					</p>
				<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='homeq.png'>
					</div>
					<p class='webpageLinkTitle'>HomeQ</p>
					<p class='appSectionDescription'>
						Hitta nya hyresgäster till dina lägenheter.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='lime.png'>
					</div>
					<p class='webpageLinkTitle'>Lime</p>
					<p class='appSectionDescription'>
						Tillgodose dina kunder med ett omfattande CRM-system.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='newst.png'>
					</div>
					<p class='webpageLinkTitle'>Newst</p>
					<p class='appSectionDescription'>
						Hitta nya hyresgäster till dina kommersiella lokaler.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='parakey.png'>
					</div>
					<p class='webpageLinkTitle'>Parakey</p>
					<p class='appSectionDescription'>
						Lås upp dina fastigheter med din smartphone.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<span class='tabletHidden'>
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogo' src='planima.png'>
					</div>
					<p class='webpageLinkTitle'>Planima</p>
					<p class='appSectionDescription'>
						Planera underhållet av dina fastigheter.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogoIcon' src='tmpl.png'>
					</div>
					<p class='webpageLinkTitle'>Tmpl</p>
					<p class='appSectionDescription'>
						En smart plattform för dina bostäder och kontor.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				
				<a class='appSection' href='#'>
					<div class='row'>
						<img class='appSectionLogoIcon' src='vixinity.png'>
					</div>
					<p class='webpageLinkTitle'>Vixinity</p>
					<p class='appSectionDescription'>
						En smart plattform för de boende i dina bostäder.
					</p>
					<p class='webpageLink' style='text-decoration: none; color: #606060;'>Kommer snart</p>
					
					<p class='appSectionAnnotation'>
						Utvald integration
					</p>
				</a>
				</span>

				
				<!-- <div class='row'>
					<h4 class='tinyTitle'>Senaste nytt</h4>
				</div>
				
				<a class='webpageLinkSection' href='https://www.linkedin.com/company/homepal-sverige/?originalSubdomain=se' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
					<p class='webpageLinkTitle'>Nyheter</p>
					<p class='webpageLink'>Följ oss</p>
					<img class='webpageLinkIcon' src='/wp-content/uploads/2020/08/image-3.png' style='top: 22px; height: 46px;'>
				</a> -->
				
			</div>
			</span>
			
		</div>
		
		
		
		
		
		<!-- Problems -->
		
		
		
		<div id='contentParent2' style='padding: 0;'>
			
			<div class='contentSection3'>
				<h2 class='contentTitleProblems'>Känns detta bekant<span class='mobileHidden'> för dig</span>?</h2>
			</div>
			
			<span class='desktopSlideshow'>
				<div class="slideshow">
					 <div class="images">
							
					 </div>
				</div>
			</span>
			
			<span class='mobileSlideshow'>
				<div class="slideshowMobile">
					 <div class="imagesMobile">
							
					 </div>
				</div>
			</span>
			
			<!-- <div id='mobileProblems'>
				<img src='problem1.png' style='width: 100%; margin-bottom: 25px;'>
				<img src='problem2.png' style='width: 100%; margin-bottom: 25px;'>
				<img src='problem3.png' style='width: 100%; margin-bottom: 25px;'>
			</div> -->
			
		</div>
		
		
		
		
		
		
		<!-- Steps -->
		
		
		
		
		
		<div id='contentParent3'>	
			<div class='contentSection3'>
				<h2 class='contentTitleProblems' style='color: #000000;'>Vi löser allt.<br>Med tre steg.</h2>
			</div>
			
			<img class='wallpaper' src='step1.png'>
			
			<div class='contentSection3'>
				
				<div class='titleParent'>
					<h3 class='smallTitle3'><span style='color: #cccccc;'>Steg ett</span><br>Datalagring</h3>
					<p class='tinyText stepsDescription'>
						Vi samlar all er data, löser dess datafel och hjälper er uppnå klassledande fullständighet.
					</p>


					<div class='row'>
						<a class='webpageLinkSection2' href='datalagring.html'>
							<p class='webpageLinkTitle'>Datalagring</p>
							<p class='webpageLink'>Läs om hur vi gör</p>
							<img class='webpageLinkIcon' src='1.png'>
						</a>
					</div>

				</div>
			</div>
			
			<img class='wallpaper' src='step2.png'>
			
			<div class='contentSection3'>
				
				<div class='titleParent'>
					<h3 class='smallTitle3'><span style='color: #cccccc;'>Steg två</span><br>Integrationer</h3>
					<p class='tinyText stepsDescription'>
						Vi ger er tillgång till ledande integrationer och fantastiska utvecklingsverktyg.
					</p>


					<div class='row'>
						<a class='webpageLinkSection2' href='integrationer.html'>
							<p class='webpageLinkTitle'>Integrationer</p>
							<p class='webpageLink'>Läs om hur det funkar</p>
							<img class='webpageLinkIcon' src='2.png'>
						</a>
					</div>

					
				</div>
			</div>
			
			
			<img class='wallpaper' src='step3.png'>
			
			<div class='contentSection3'>
				<div class='titleParent bottomTitleParent'>
					<h3 class='smallTitle3'><span style='color: #cccccc;'>Steg tre</span><br>Effektivisering</h3>
					<p class='tinyText stepsDescription'>
						Vi underlättar ert arbete med data och gör den till en naturlig del av er verksamhet.
					</p>
					

					<div class='row'>
						<a class='webpageLinkSection2' href='effektivitet.html'>
							<p class='webpageLinkTitle'>Effektivisering</p>
							<p class='webpageLink'>Läs om vad vi uppnår</p>
							<img class='webpageLinkIcon' src='3.png'>
						</a>
					</div>

				</div>
			</div>
			
			<div class='contentSection5'>
				
				<div class='pageDivider'></div>
				
				<div class='row'>
					<h4 class='tinyTitle'>Redo för nästa steg?</h4>
				</div>
				
					<a class='webpageLinkSection' href='kund.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Bli kund</p>
						<p class='webpageLink'>Kom igång</p>
						<img class='webpageLinkIcon' src='kund.png' style='top: 19px;'>
					</a>
				
					<a class='webpageLinkSection' href='demovisning.html' style='background-color: #f5f5f5; border: 1px solid #cccccc;'>
						<p class='webpageLinkTitle'>Demovisning</p>
						<p class='webpageLink'>Boka nu</p>
						<img class='webpageLinkIcon' src='demo.png' style='height: 46px; top: 22px;'>
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
	
	