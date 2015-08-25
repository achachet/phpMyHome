
<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.html");?>
</head>
<body id="feed">
<?php include("includes/menu.html");?>
    <div class="left column">
      <div class="ui left floated launch icon button">
        <i class="sidebar icon"></i>
      </div>
      <div class="ui right floated launch primary button">
        <i class="mail icon"></i> Compose
      </div>


      <div class="ui secondary pointing filter menu">
        <a class="red active item" data-tab="Salon">Salon</a>
        <a class="yellow item" data-tab="Cuisine">Cuisine</a>
		<a class="green item" data-tab="Salledebain">Salle de bain</a>
        <a class="blue item" data-tab="Chambre1">Chambre 1</a>
        <a class="orange item" data-tab="Chambre">Chambre 2</a>
	</div>
 

      <div class="ui active tab" data-tab="Salon">
		<div class="ui grid">
			<div class="eight wide column">
				<div class="ui fluid green button" onclick="sendFrame('*1*1*50%23%23');">
				<i class="power icon"></i>
				ON
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid red button" onclick="sendFrame('*1*0*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*0*34%23%23,*1*0*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*0*21%23%23,*1*0*25%23%23');">
				<i class="remove circle icon"></i>
				OFF
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*10*32%23%23,*1*10*31%23%23,*1*10*33%23%23,*1*10*34%23%23,*1*5*18%23%23,*1*10*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*4*21%23%23,*1*0*25%23%23');">
				<i class="cocktail icon"></i>
				Apéro
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*5*32%23%23,*1*2*31%23%23,*1*2*33%23%23,*1*2*34%23%23,*1*10*18%23%23,*1*10*19%23%23,*1*0*17%23%23,*1*1*24%23%23,*1*0*21%23%23,*1*0*25%23%23');">
				<i class="food icon"></i>
				Dîner
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*2*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*0*34%23%23,*1*5*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*0*21%23%23,*1*1*25%23%23');">
				<i class="birthday icon"></i>
				Dessert
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*2*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*10*34%23%23,*1*0*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*4*21%23%23,*1*0*25%23%23');">
				<i class="book icon"></i>
				Lecture
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*8*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*2*34%23%23,*1*0*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*4*21%23%23,*1*0*25%23%23');">
				<i class="fire icon"></i>
				Cheminée
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*0*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*0*34%23%23,*1*5*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*1*24%23%23,*1*0*21%23%23,*1*0*25%23%23');">
				<i class="film icon"></i>
				Cinema
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid button" onclick="sendFrame('*1*2*32%23%23,*1*0*31%23%23,*1*0*33%23%23,*1*0*34%23%23,*1*2*18%23%23,*1*0*19%23%23,*1*0*17%23%23,*1*0*24%23%23,*1*2*21%23%23,*1*0*25%23%23');">
				<i class="moon icon"></i>
				Nuit
				</div>
			</div>
			<div class="sixteen wide column">
				<?php include('includes/audio.php');?>	
			</div>
			
			
		</div>
	  

	  
      </div>

      <div class="ui tab" data-tab="Chambre1">
		<div class="ui grid">

		</div>
	  
	  </div>


      <div class="ui tab" data-tab="Cuisine">
		<div class="ui grid">
			<div class="eight wide column">
				<div class="ui fluid green button" onclick="sendFrame('*1*10*21%23%23,*1*1*24%23%23,*1*1*25%23%23');">
				<i class="power icon"></i>
				ON
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid red button" onclick="sendFrame('*1*0*21%23%23,*1*0*24%23%23,*1*0*25%23%23');">
				<i class="remove circle icon"></i>
				OFF
				</div>
			</div>
	  
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*7*21%23%23,*1*0*24%23%23,*1*0*25%23%23');">
				<i class="empty star icon"></i>
				Déco
				</div>
			</div>
			
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*0*21%23%23,*1*1*24%23%23,*1*0*25%23%23');">
				<i class="building icon"></i>
				Plan de travail
				</div>
			</div>

			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*2*21%23%23,*1*0*24%23%23,*1*0*25%23%23');">
				Spots doux
				</div>
			</div>	  

			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*0*21%23%23,*1*0*24%23%23,*1*1*25%23%23');">
				Niche Seule
				</div>
			</div>	  

			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*0*21%23%23,*1*1*24%23%23,*1*1*25%23%23');">
				Niche + Plan de travail
				</div>
			</div>	 
			
			</div>
		</div>
	  			
      <div class="ui tab" data-tab="Salledebain">
		<div class="ui grid">
			<div class="eight wide column">
				<div class="ui fluid green button" onclick="sendFrame('*1*10*61%23%23,*1*10*62%23%23,*1*10*68%23%23,*1*1*63%23%23,');">
				<i class="power icon"></i>
				ON
				</div>
			</div>
			<div class="eight wide column">
				<div class="ui fluid red button" onclick="sendFrame('*1*10*61%23%23,*1*10*62%23%23,*1*10*68%23%23,*1*1*63%23%23');">
				<i class="remove circle icon"></i>
				OFF
				</div>
			</div>
			
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*2*61%23%23,*1*2*62%23%23,*1*5*68%23%23,*1*0*63%23%23');">
				<i class="empty star icon"></i>
				Déco
				</div>
			</div>

			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*2*61%23%23,*1*2*62%23%23,*1*7*68%23%23,*1*1*63%23%23,');">
				<i class="moon icon"></i>
				Toilette du soir
				</div>
			</div>	 		
			
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*3*61%23%23,*1*7*62%23%23,*1*0*68%23%23,*1*0*63%23%23');">
				<i class="linux icon"></i>
				Bain
				</div>
			</div>	 		
			
			<div class="eight wide column">
				<div class="ui fluid icon button" onclick="sendFrame('*1*5*61%23%23,*1*0*62%23%23,*1*0*68%23%23,*1*1*63%23%23');">
				Douche du soir
				</div>
			</div>	 		
						
		</div>
	  

	  
      </div>
	  
      <div class="ui tab" data-tab="Chambre">

      </div>

	

    </div>


</body>

</html>