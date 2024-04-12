function alerte(n)
{
    b=0
    a=document.querySelector("body > map > area:nth-child("+n+")");
    if (n>9)
    {
        b=1;
    }
    if (n>99)
    {
        b=2;
    }
    tombe=a.outerHTML.slice(a.outerHTML.lastIndexOf("alt=")+5,a.outerHTML.lastIndexOf("alt=")+7+b);
    window["tombe_actuelle"]=tombe;

    if(window[tombe].defunts[0]== undefined )
    {
        document.getElementById("sortie").innerHTML = "Famille: "+window[tombe].famille +"</br>" ;
        document.getElementById("sortie").innerHTML += "Aucune information supplémentaire disponible";
    }
    else{
       
        document.getElementById("sortie").innerHTML= '<input type="button" value="<" onclick="changeMoins();"></input>' + "tombe : "+ n +'<input type="button" value=">" onclick="changePLus();"></input>'+"</br>" +
        "position : 1" + "</br>"+
    
        "nom :"+window[tombe].defunts[0].nom+"</br>"+
        "prenom :"+window[tombe].defunts[0].prenom+"</br>"+
        "date de naissance :"+window[tombe].defunts[0].date_naissance+"</br>"+
        "date de mort :"+window[tombe].defunts[0].date_deces;
    }

    document.querySelector("#sortie").style.display = "block";
    
}

function changePLus()
{
    //console.log(document.getElementById('sortie').innerHTML.slice(document.getElementById('sortie').innerHTML.indexOf("position : ")+11,document.getElementById('sortie').innerHTML.indexOf("position : ")+12));
    pos = parseInt(document.getElementById('sortie').innerHTML.slice(document.getElementById('sortie').innerHTML.indexOf("position : ")+11,document.getElementById('sortie').innerHTML.indexOf("position : ")+12));
    pos = pos-1 ;
    console.log(pos);
    max = window[tombe_actuelle].defunts.length -1;
    if (pos<max)
    {
        pos++;
    }
    else
    {
        document.querySelector("#sortie > input[type=button]:nth-child(2)").style.color="transparent";
        return ;
    }
    document.getElementById("sortie").innerHTML= '<input type="button" value="<" onclick="changeMoins();"></input>' + "tombe : "+ tombe_actuelle.slice(1,tombe_actuelle.length) +'<input type="button" value=">" onclick="changePLus();"></input>'+"</br>" +
    "position : "+(pos+1) + "</br>"+
    "nom :"+window[tombe_actuelle].defunts[pos].nom+"</br>"+
    "prenom :"+window[tombe_actuelle].defunts[pos].prenom+"</br>"+
    "date de naissance :"+window[tombe_actuelle].defunts[pos].date_naissance+"</br>"+
    "date de mort :"+window[tombe_actuelle].defunts[pos].date_deces;
}

function changeMoins()
{
     //console.log(document.getElementById('sortie').innerHTML.slice(document.getElementById('sortie').innerHTML.indexOf("position : ")+11,document.getElementById('sortie').innerHTML.indexOf("position : ")+12));
     pos = parseInt(document.getElementById('sortie').innerHTML.slice(document.getElementById('sortie').innerHTML.indexOf("position : ")+11,document.getElementById('sortie').innerHTML.indexOf("position : ")+12));
     pos = pos-1 ;
     console.log(pos);
     max = window[tombe_actuelle].defunts.length -1;
     if (pos>0)
     {
         pos--;
     }
     else
     {
         document.querySelector("#sortie > input[type=button]:nth-child(1)").style.color="transparent";
         return ;
     }
     
     document.getElementById("sortie").innerHTML= '<input type="button" value="<" onclick="changeMoins();"></input>' + "tombe : "+ tombe_actuelle.slice(1,tombe_actuelle.length) +'<input type="button" value=">" onclick="changePLus();"></input>'+"</br>" +
     "position : "+(pos+1) + "</br>"+
     "nom :"+window[tombe_actuelle].defunts[pos].nom+"</br>"+
     "prenom :"+window[tombe_actuelle].defunts[pos].prenom+"</br>"+
     "date de naissance :"+window[tombe_actuelle].defunts[pos].date_naissance+"</br>"+
     "date de mort :"+window[tombe_actuelle].defunts[pos].date_deces;

}