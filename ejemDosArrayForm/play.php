<?php

$disco=array(
	"cancion"=>$_POST['titulo'],
	"gener"=>$_POST['genero'],
	10=>$_POST['duracion'],
	"cantante"=>$_POST['interprete']);

	//var_dump($disco)
	//TAREA: Dependiendo del titulo de la cancion, mostrar la letra y el video de youtube (2canciones usar un condicional)
	$letra = array('FD'=>'Si hace falta 
            Que le mire 
            A los ojos miraré 
            Ya hoy creo que es tiempo
            Ojos negros
            Piel de hielo
            Voz de fuego
            Siento al verle
            Pero sin miedo
            Olvidarle me da igual
            No estoy mintiendo
            Ignoro su juego
            Si su vestido de cristal 
            Se quiebra en silencio',
	        'WJ'=>'Have you got color in your cheeks
            Do you ever get the feeling that you cant shift the tide
            That sticks around like somethings in your teeth
            And some aces up your sleeve
            I had no idea that youre in deep
            I dreamt about you near me every night this week
            How many secrets can you keep
            Cause theres this tune I found that makes me think of you somehow
            When I play it on repeat
            Until I fall asleep
            Spilling drinks on my settee');

			if ($disco["cancion"]=="Vestido de Cristal") {
                echo "<p>";
                print('<iframe width="560" height="315" src="https://www.youtube.com/embed/vblVuJRJFw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
                
				echo "</p>";
				echo "<p>";
				echo ($letra['FD']);
				echo "</p>";
			} else {
				if ($disco["cancion"]=="do i wanna know") {
				echo "<p>";
				echo ($letra['WJ']);
				echo "</p>";
			
			}
		}				

			
