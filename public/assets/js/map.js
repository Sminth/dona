// Configuration de l'API Mapbox
mapboxgl.accessToken =
  "pk.eyJ1Ijoic21pbnRoIiwiYSI6ImNsa3RzOTYzNTAxOTQzcXBlOXQwMTY5dDUifQ.mg4Z24cW-JcY3cviHmZa1w";



  let defaultZoom = 10; // pour les écrans plus grands
let defaultCoord = [-3.8828, 5.3779]; // Coordonnées d'Abidjan

// Si la largeur de l'écran est inférieure à 768 pixels (typiquement un mobile)
if (window.innerWidth < 768) {
    defaultZoom = 8.5; // niveau de zoom plus éloigné pour les mobiles
     defaultCoord = [-3.9828, 5.3779]

}
const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: [-5.5471, 7.5401], // Coordonnées de la Côte d'Ivoire
    zoom: 4, // Zoom initial plus éloigné
  });

  map.on("load", function () {
    map.flyTo({
        center: defaultCoord,
        zoom: defaultZoom, // Niveau de zoom souhaité pour Abidjan
        speed: 1, // Vitesse de l'animation, 1 étant la vitesse normale
        curve: 2, // Courbe de l'animation, 1 étant une courbe linéaire
        easing: function(t) { return t * (2 - t); }// Fonction d'atténuation pour l'animation
      });

    // Ajout des images PNG pour les icônes
    map.loadImage("assets/images/coeur.png", function (error, image) {
        if (error) throw error;
        map.addImage("icon-coeur", image);
    });
    map.loadImage("assets/images/lgo.png", function (error, image) {
        if (error) throw error;
        map.addImage("icon-dona", image);
    });

  // Ajout d'une source de données pour les événements
  map.addSource("events", {
    type: "geojson",
    data: {
      type: "FeatureCollection",
      features: [
        {
          type: "Feature",
          geometry: {
            type: "Point",
            coordinates: [-3.9573, 5.3560], // Cocody
          },
          properties: {
            title: "Arbre de Noël pour les enfants du quartier du tribunal de commerce",
            objectif:"500 000",
            reste : "0",
            pcollecte : "100",
            icon: "icon-coeur",
            image: "storage/sri-slPl.jpg",
          },
        },
        {
          type: "Feature",
          geometry: {
            type: "Point",
            coordinates:[-4.0899, 5.3470], // Yopougon
          },
          properties: {
            title: "Meeting du candidat Gbehu",
            objectif:"500 000",
            reste : "0",
            pcollecte : "100",
            icon: "icon-coeur",
            video: "https://www.youtube.com/embed/tgbNymZ7vqY", // Autre lien YouTube aléatoire pour le test
          },
        },
        {
            type: "Feature",
            geometry: {
              type: "Point",
              coordinates:  [-4.0209, 5.4145], // Abobo
            },
            properties: {
              title: "Arbre de Noël pour les enfants du quartier du tribunal de commerce",
              objectif:"500 000",
              reste : "0",
              pcollecte : "100",
              icon: "icon-coeur",
              image: "storage/sri-slPl.jpg",
            },
          },

      ],
    },
  });

  map.addLayer({
    id: "events-point",
    type: "symbol",
    source: "events",
    layout: {
        "icon-image": "{icon}",
        "icon-size": 0.01,
        "text-field": "{title}",
        "text-font": ["Open Sans Semibold", "Arial Unicode MS Bold"],
        "text-offset": [0, 0.6],
        "text-anchor": "top",
        "text-size": 15
    //   "icon-allow-overlap": true,
    },
  });

    // Animation pour que les icônes "sautent"
    let start;
    function bounceMarker(timestamp) {
      if (!start) start = timestamp;
      const progress = timestamp - start;
      const bounceHeight = 10; // hauteur du saut en pixels
      const bounceSpeed = 300; // vitesse de l'animation en millisecondes
      const bounce = Math.abs(Math.sin(progress / bounceSpeed) * bounceHeight);
      map.setPaintProperty("events-point", "icon-translate", [0, -bounce]);
      if (progress < bounceSpeed * Math.PI) {
        requestAnimationFrame(bounceMarker);
      } else {
        start = undefined;
        requestAnimationFrame(bounceMarker);
      }
    }
    requestAnimationFrame(bounceMarker);

  let activePopup = null; // Variable pour stocker le popup actif


  // Gestionnaire d'événements pour afficher un popup lors du survol d'un événement
  map.on("mouseenter", "events-point", function (e) {
    const coordinates = e.features[0].geometry.coordinates.slice();
    let popupContent = "";

    // Si plusieurs événements se trouvent au même endroit
    if (e.features.length > 1) {
      popupContent += `<p>Il y a ${e.features.length} événements à cet endroit :</p>`;
      e.features.forEach((feature) => {
        const title = feature.properties.title;
        const imageUrl = e.features[0].properties.image;

        popupContent += `
                    <div class="row">
                        <img src="${imageUrl}" width="20" alt="${title}" />
                        <p>${title}</p>
                    </div>
                `;
      });
    } else {
      const title = e.features[0].properties.title;
      const objectif = e.features[0].properties.objectif;
      const reste = e.features[0].properties.reste;
      const pcollecte = e.features[0].properties.pcollecte;
      const videoUrl = e.features[0].properties.video;
      const imageUrl = e.features[0].properties.image;

      if (videoUrl) {
        popupContent += `
                    <iframe width="200" height="150" src="${videoUrl}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
      } else {
        popupContent += `
                    <img src="${imageUrl}" width="100%" alt="${title}" />`;
      }
      popupContent += `
                    <h6>${title}</h6>
                    <div class="cou">
                    <div style="display:flex;width:100%">
                    <p>Objectif: ${objectif} f</p>
                    <p style="text-aligh:right">&nbsp;&nbsp;&nbsp;reste: ${reste} f</p>
                    </div>
                    <div style="height:5px;width:100%;border:1px solid #eee">
                    <div style="height:5px;width:${pcollecte}%;background:#FF7200"></div>
                    </div>
                    <p style="text-align:right"> <span style="color:red">${pcollecte} %</span> collecté</p>

                    </div>
                `;

    }

    activePopup = new mapboxgl.Popup({ offset: 25 })
      .setLngLat(coordinates)
      .setHTML(popupContent)
      .addTo(map);
  });

  map.on("mouseleave", "events-point", function () {
    if (activePopup) {
      activePopup.remove();
      activePopup = null;
    }
  });

  // Ajoutez un gestionnaire d'événements pour le popup lui-même
  map.on("mouseenter", ".mapboxgl-popup", function () {
    if (activePopup) {
      map.getCanvas().style.cursor = "pointer";
    }
  });

  map.on("mouseleave", ".mapboxgl-popup", function () {
    if (activePopup) {
      activePopup.remove();
      activePopup = null;
      map.getCanvas().style.cursor = "";
    }
  });



  })


  let votesChart;
function initializeChart(data) {
    const ctx = document.getElementById('votesChart').getContext('2d');
    votesChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.candidates,
            datasets: [{
                label: 'Nombre de votes - cocody',
                data: data.votes,
                backgroundColor: ['red', 'blue', 'green', 'yellow'],
                borderColor: ['red', 'blue', 'green', 'yellow'],
                borderWidth: 1,
                hoverBackgroundColor: ['darkred', 'darkblue', 'darkgreen', 'gold'],
                hoverBorderColor: ['darkred', 'darkblue', 'darkgreen', 'gold'],
            }]
        },
        options: {
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            animation: {
                duration: 2000, // Durée de l'animation en ms
                easing: 'easeInOutBounce', // Type d'animation
                delay: function(context) {
                    return context.dataIndex * 300; // Délai entre chaque barre
                }
            },
            hover: {
                animationDuration: 800, // Durée de l'animation au survol
            },
            responsiveAnimationDuration: 1000, // Durée de l'animation lors du redimensionnement
            title: {
                display: true,
                text: 'Votes par candidat - cocody',
                fontSize: 20,
                // padding: 20
            },
        }
    });
}

let animationDirection = 1;  // 1 pour augmenter, -1 pour diminuer
function breatheAnimation() {
    if (!votesChart) return;

    votesChart.data.datasets[0].data = votesChart.data.datasets[0].data.map((value, index) => {
        // Changez la valeur de 2% pour chaque barre
        let change = value * 0.02 * animationDirection;
        let newValue = value + change;

        // Si la barre atteint 110% de sa valeur initiale ou descend à 90%, changez la direction
        if (newValue > initialData.votes[index] * 1.10 || newValue < initialData.votes[index] * 0.90) {
            animationDirection *= -1;
        }

        return newValue;
    });

    votesChart.update();

    // Répétez l'animation toutes les 1.5 secondes
    setTimeout(breatheAnimation, 1500);
}

// Stockez les données initiales pour référence
let initialData = {
    candidates: ['Candidat A', 'Candidat B', 'Candidat C', 'Candidat D'],
    votes: [3500, 5000, 6500, 4000]
};

// Commencez l'animation après avoir initialisé le graphique
initializeChart(initialData);
breatheAnimation();

function updateChart(newData) {
    votesChart.data.labels = newData.candidates;
    votesChart.data.datasets[0].data = newData.votes;
    votesChart.update();
}


navigator.geolocation.getCurrentPosition(function(position) {
    const lat = position.coords.latitude;
    const lng = position.coords.longitude;

    // Utilisez les coordonnées pour déterminer la commune et récupérer les données de vote
    // Pour cet exemple, nous utilisons simplement les données fictives
    updateChart(initialData);
});


// ============================================================================================================
// ===========================================================================================================

// Données fictives
const totalElecteurs = 100000; // Nombre total d'électeurs inscrits
const electeursVotants = 65000; // Nombre d'électeurs qui ont déjà voté

const data = {
    labels: ['Votants', 'Non votants'],
    datasets: [{
        data: [electeursVotants, totalElecteurs - electeursVotants],
        backgroundColor: ['#007bff', '#ccc'],
        hoverOffset: 4
    }]
};
// Variables pour l'animation continue
let rotation = 0;

const config = {
    type: 'doughnut',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Taux de participation - Cocody'
            }
        }
    }
};

// Génération du graphique
const ctx = document.getElementById('participationChart').getContext('2d');
const participationChart = new Chart(ctx, config);

// Fonction pour animer continuellement le graphique
function animateChart() {
    rotation += 0.5; // Vitesse de rotation. Augmentez ou diminuez selon vos préférences.
    if (rotation >= 360) {
        rotation = 0;
    }
    participationChart.options.rotation = rotation;
    participationChart.update();
    requestAnimationFrame(animateChart);
}

// Démarrer l'animation
animateChart();
