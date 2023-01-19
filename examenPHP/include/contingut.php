<div id="exercicis">

	<div id="exercici01">
		<h2>Exercici 01</h2>
		<p>
		 <span class="destacat">Enunciat:</span><br/>
		 L'usuari tria una de les possibles imatges.<br/>
		 L'usuari tria una de les possibles dimensions de la imatge.<br/>
		 En la pàgina de processat es mostra només la imatge triada amb la grandària indicada (classes al fitxer estilsProcessa.css).<br/>
		 La imatge tindrà també un enllaç a l'adreça afegida al value de la imatge en cada cas.<br/>
		 En el títol de la pàgina, apareix la paraula: SEU, CASTELL o FONT i la mida Xicoteta, Mitjana o Gran. Amb les majúscules corresponents.<br/>
		 La imatge està dins d'un element que té uns estils determinats (classes al fitxer estilsProcessa.css).<br/>
		 Si l'usuari no tria cap imatge, en el títol de la pàgina és DEFECTE i es mostra una altra imatge per defecte.<br/>
		 Si l'usuari no tria cap mida, en el títol de la pàgina apareix DEFECTE i la mida és defecte (classe al fitxer estilsProcessa.css).<br/>
	 </p>
	 <figure class="imatge">
		<img src="img/font.jpg" alt="Font" class="imatgeExercici02" />
		<img src="img/seu.jpg" alt="Seu" class="imatgeExercici02" />
		<img src="img/castell.jpg" alt="Castell" class="imatgeExercici02" />
	 </figure>
		<form id="form_exercici01" name="form_exercici01" method="POST" action="./include/processaExercici01.php">
			<ul>
					 <li>
						<span>Imatge:</span>
            <span>
               <select id="imatgeExercici01" name="imatge">
                  <option value="">-- Tria una imatge --</option>
									<option value="1,http://www.xativa.es">Font 25 dolls</option>
									<option value="2,https://ca.wikipedia.org/wiki/Xàtiva">El Castell</option>
									<option value="3,http://www.xativaturismo.com/val/">La Seu</option>
               </select>
            </span>
         </li>
					 <li>
            <span>Mida de la imatge:</span>
            <span>
               <input id="midaXicoteta" name="mida" type="radio" value="xicoteta"/>Xicoteta
               <input id="midaMitjana" name="mida" type="radio" value="mitjana"/>Mitjana
               <input id="midaGran" name="mida" type="radio" value="gran"/>Gran
            </span>
         </li>
				  <li>
            <span><input id="envia" name="envia" type="submit" value="Envia Exercici 01"/></span>
         </li>
			</ul>
		</form>
	</div> <!--final exercici 02-->
</div>
