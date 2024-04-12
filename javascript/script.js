var RefDivModif=document.getElementById("divModif");
var data;

function enregistrerModif(){
		
		//on recup l'objet json de data.json
		$.getJSON("javascript/data.json",function (oJson) {
			console.log(oJson);
			data=JSON.parse(JSON.stringify(oJson));
			const Qs = new URLSearchParams(window.location.search)
			//on recherche l'id de la page dans l'URL 
			getID=Qs.getAll("idPage");
			id=parseInt(getID[0]);
			for(i=0;i<data.page.length;i++){
				if(data.page[i].id_page==id){//on cherche dans l'objet json, l'id de la page sur laquelle on se trouve 
					data.page[i].contenu=RefDivModif.innerHTML;//on met à jour le contenu
					var TransformJSON=JSON.stringify(data);//on convertit l'objet json on chaine de caractère json
					
					//Et on envoie avec une requête ajax la chaine json pour pouvoir l'utiliser avec php.
					//Cette requête est envoyé au fichier ajax.php dans lequel on va pouvoir modifier le fichier data.json
					$.ajax({
						type: "POST",
						url: "ajax.php",
						data: {
							action : "showdata",
							data : TransformJSON,
				
						},
						dataType: "json ",
						success: function (response) {
							console.log(response);
							console.log("réussi");
						}
					});
				}
			}
	}
	);
	
	

	
}