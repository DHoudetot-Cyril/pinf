let ajd = new Date();
var options = {weekday: 'long'};
let jourActuel = ajd.toLocaleDateString('fr-FR', options);
jourActuel = jourActuel.charAt(0).toUpperCase() + jourActuel.slice(1);
const joursSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
let tabJoursEnOrdre = joursSemaine.slice(joursSemaine.indexOf(jourActuel)).concat(joursSemaine.slice(0, joursSemaine.indexOf(jourActuel)));
var ctx = document.getElementById('graph1').getContext('2d')
var CLEFAPI = 'a1131085231cb855b20252a3bf23c851';
let resultatsAPI;

function remise0(hour){
    if(hour >=24){
        hour = hour - 24;
    }
    return hour
}

// 50.749260321070686, 2.0952010473857454
function AppelAPI(){
    var long = 2.0952010473857454;
    var lat = 50.749260321070686;
    
    fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${lat}&lon=${long}&exclude=minutely&units=metric&lang=fr&appid=${CLEFAPI}`)
    .then((reponse) => {
        return reponse.json();

    })
    .then((data2) => {
        resultatsAPI = data2;
            
        var str = "@2x.png" ;
        var imgtemps = resultatsAPI.hourly[0].weather[0].icon + str;
        document.getElementById('temps').src = "http://openweathermap.org/img/wn/" + imgtemps;

        document.getElementById('jour').innerText = jourActuel;
        document.getElementById('heure').innerText = ajd.getHours() + ':00';
        document.getElementById('temps-txt').innerText = resultatsAPI.current.weather[0].description;
        document.getElementById('temperature').innerText =Math.trunc(resultatsAPI.current.temp);
        var data = { 
            labels:[remise0(ajd.getHours()) + ':00',remise0(ajd.getHours() + 3) + ':00',remise0(ajd.getHours() + 6) + ':00',remise0(ajd.getHours() + 9) + ':00',remise0(ajd.getHours() + 12) + ':00',remise0(ajd.getHours() + 15) + ':00',remise0(ajd.getHours() + 18) + ':00',remise0(ajd.getHours() + 21) + ':00'],
            datasets: [
                {   
                    label: "",
                    backgroundColor:'rgba(0,0,0,0.1)',
                    borderColor:'#9CC191',
                    borderWidth:'8',
                    data:[Math.trunc(resultatsAPI.hourly[0].temp),Math.trunc(resultatsAPI.hourly[2].temp),Math.trunc(resultatsAPI.hourly[5].temp),Math.trunc(resultatsAPI.hourly[8].temp),Math.trunc(resultatsAPI.hourly[11].temp),Math.trunc(resultatsAPI.hourly[14].temp), Math.trunc(resultatsAPI.hourly[17].temp),Math.trunc(resultatsAPI.hourly[20].temp)] 
                }
            ]
        }
        var options = {
             scales: {
                  yAxes: [{
                       ticks: {
                            min:Math.min(Math.trunc(resultatsAPI.hourly[0].temp),Math.trunc(resultatsAPI.hourly[2].temp),Math.trunc(resultatsAPI.hourly[5].temp),Math.trunc(resultatsAPI.hourly[8].temp),Math.trunc(resultatsAPI.hourly[11].temp),Math.trunc(resultatsAPI.hourly[14].temp), Math.trunc(resultatsAPI.hourly[17].temp),Math.trunc(resultatsAPI.hourly[20].temp)) - 2,
                            max:Math.max(Math.trunc(resultatsAPI.hourly[0].temp),Math.trunc(resultatsAPI.hourly[2].temp),Math.trunc(resultatsAPI.hourly[5].temp),Math.trunc(resultatsAPI.hourly[8].temp),Math.trunc(resultatsAPI.hourly[11].temp),Math.trunc(resultatsAPI.hourly[14].temp), Math.trunc(resultatsAPI.hourly[17].temp),Math.trunc(resultatsAPI.hourly[20].temp)) + 2,
                        }

                  }]
             },
             legend: {
                display: false,
            },
        }
        //petit test
        config = {
            type : 'line',
            data : data,
            options : options
        }

        // les heures, par tranche de trois, avec leur temperature.

        let heureActuelle = new Date().getHours();
        var graph1 = new Chart(ctx, config);

    })
}


