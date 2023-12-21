mapboxgl.accessToken =
  "pk.eyJ1Ijoic21pbnRoIiwiYSI6ImNsa3RzOTYzNTAxOTQzcXBlOXQwMTY5dDUifQ.mg4Z24cW-JcY3cviHmZa1w";


//   const map = new mapboxgl.Map({
//     container: "map",
//     style: "mapbox://styles/mapbox/streets-v11",
//     center: [-3.9828, 5.3779], // Coordonnées d'Abidjan
//     zoom: 10, // Zoom sur Abidjan
//   });
// Définir un niveau de zoom par défaut
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
  map.loadImage("map/megaphone.png", function (error, image) {
    if (error) throw error;
    map.addImage("megaphone", image);
  });

  map.loadImage("map/handshake.png", function (error, image) {
    if (error) throw error;
    map.addImage("icon-meeting", image);
  });
  map.loadImage("map/flip-chart.png", function (error, image) {
    if (error) throw error;
    map.addImage("icon-debat", image);
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
            title: "Débat présidentiel",
            description:
              "Date: 2023-09-15, Heure: 19h00, Participants: Candidat A, Candidat B",
            icon: "icon-debat",
            type: "debat",
            video: "https://www.youtube.com/embed/qNZTQWQdtsQ", // Lien YouTube aléatoire pour le test
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
            description: "Le candidat des jeunes de yopougon organise un meeting à ne pas manqué.",
            icon: "icon-meeting",
            type: "meeting",
            video: "https://www.youtube.com/embed/tgbNymZ7vqY", // Autre lien YouTube aléatoire pour le test
          },
        },
        {
          type: "Feature",
          geometry: {
            type: "Point",
            coordinates: [-4.0209, 5.4145], // Abobo
          },
          properties: {
            title: "Meeting du candidat Hubertin",
            description: "Un grand rassemblement à eu lieu pour le meeting du candidat.",
            icon: "icon-meeting",
            type: "meeting",
          },
        },
        // Ajout de nouveaux événements
      ],
    },
  });

//   map.addSource("communes", {
//     type: "geojson",
//     data: "map/commune.geojson", // Remplacez ceci par le chemin vers votre fichier GeoJSON
//   });



  map.addLayer({
    'id': 'communes-layer',
    'type': 'fill',
    'source': 'communes', // Assurez-vous que c'est le nom de votre source GeoJSON
    'layout': {},
    'paint': {
        'fill-color': [
            'match',
            ['get', 'name'], // Récupère la valeur de l'attribut "name"
            'Marcory', '#FFF05F', // Si "name" est "Commune1", utilisez la couleur rouge
            'Cocody', '#EA4E1B', // Si "name" est "Commune2", utilisez la couleur verte
            'Abobo', '#EDCA86', // Si "name" est "Commune3", utilisez la couleur bleue
            'Plateau', '#F9B234', // Si "name" est "Commune1", utilisez la couleur rouge
            'Adjamé', '#F29F29', // Si "name" est "Commune2", utilisez la couleur verte
            'Yopougon', '#E5534C',
            'Attécoubé', '#FF6F6F',
            'Port-Bouët', '#FF5B15',
            'Bingerville', '#642BFF',
            'Anyama', '#007407',
            'Songon', '#FF7200',
            '#ccc' // Couleur par défaut si aucune commune ne correspond
        ],
        // "fill-opacity": 0.1,
    }
});

map.addLayer({
    id: "communes-label",
    type: "symbol",
    source: "communes", // Utilisez la même source que votre couche de type fill
    layout: {
      "text-field": "{name}", // Utilisez la propriété "name" de votre source GeoJSON
      "text-font": ["Open Sans Bold", "Arial Unicode MS Bold"],
      "text-size": 12
    },
    paint: {
      "text-color": "#000", // Couleur du texte
      "text-halo-color": "#fff", // Couleur de l'halo autour du texte
      "text-halo-width": 1 // Largeur de l'halo
    }
  });
  map.addLayer({
    id: "events-point",
    type: "symbol",
    source: "events",
    layout: {
      "icon-image": "{icon}",
      "icon-size": 1,
      "icon-allow-overlap": true,
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
// Cette fonction est un exemple. Vous devrez la remplir avec les détails réels de chaque commune.
function getCommuneDetails(name) {
    switch(name) {
        case 'cocody':
            return `
                <h2>Cocody</h2>
                <p>Profil des candidats, promesses électorales, etc.</p>
            `;
        case 'guiglo':
            return `
                <h2>Guiglo</h2>
                <p>Profil des candidats, promesses électorales, etc.</p>
            `;
        // ... (autres communes)
        default:
            return `
            <span id="close-sidebar" style="cursor: pointer; position: absolute; right: 10px; top: 10px;"><i class="fa fa-times"></i></span>
            <h2>${name}</h2>
            <p>Profil des candidats, promesses électorales</p>`;
    }
}
  map.on('click', 'communes-layer', function(e) {
    const communeName = e.features[0].properties.name; // Supposons que chaque commune ait une propriété "name"
    const communeDetails = getCommuneDetails(communeName); // Cette fonction doit récupérer les détails de la commune

    const sidebar = document.getElementById('sidebar');
    sidebar.innerHTML = communeDetails;
    sidebar.classList.add('open');
    document
      .getElementById("close-sidebar")
      .addEventListener("click", function () {
        sidebar.classList.remove("open");
      });
});

  // Gestionnaire d'événements pour afficher un popup lors du survol d'un événement
  map.on("mouseenter", "events-point", function (e) {
    const coordinates = e.features[0].geometry.coordinates.slice();
    let popupContent = "";

    // Si plusieurs événements se trouvent au même endroit
    if (e.features.length > 1) {
      popupContent += `<p>Il y a ${e.features.length} événements à cet endroit :</p>`;
      e.features.forEach((feature) => {
        const title = feature.properties.title;
        const imageUrl =
          feature.properties.type === "meeting"
            ? "icon-meeting.png"
            : "icon-debat.png";
        popupContent += `
                    <div class="row">
                        <img src="${imageUrl}" width="20" alt="${title}" />
                        <p>${title}</p>
                    </div>
                `;
      });
    } else {
      const title = e.features[0].properties.title;
      const description = e.features[0].properties.description;
      const videoUrl = e.features[0].properties.video;

      if (videoUrl) {
        popupContent += `
                    <iframe width="200" height="150" src="${videoUrl}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h3>${title}</h3>
                    <p>${description}</p>
                `;
      } else {
        const imageUrl =
          e.features[0].properties.type === "meeting"
            ? "icon-meeting.png"
            : "icon-debat.png";
        popupContent += `
                    <img src="${imageUrl}" width="50" alt="${title}" />
                    <h3>${title}</h3>
                    <p>${description}</p>
                `;
      }
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

  // Gestionnaire d'événements pour afficher une barre latérale lors du clic sur un événement
  map.on("click", "events-point", function (e) {
    const coordinates = e.features[0].geometry.coordinates.slice();
    let sidebarContent = "";

    e.features.forEach((feature) => {
      const title = feature.properties.title;
      const description = feature.properties.description;
      const videoUrl = feature.properties.video;

      if (videoUrl) {
        sidebarContent += `
                    <iframe width="100%" height="200" src="${videoUrl}?autoplay=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <h2>${title}</h2>
                    <p>${description}</p>
                `;
      } else {
        const imageUrl =
        feature.properties.type === "meeting"
        ? "icon-meeting.png"
        : "icon-debat.png";
        sidebarContent += `
                    <img src="${imageUrl}" width="100" alt="${title}" class="mb-3"/>
                    <h2>${title}</h2>
                    <p>${description}</p>
                `;
      }
    });

    sidebarContent +=
      '<span id="close-sidebar" style="cursor: pointer; position: absolute; right: 10px; top: 10px;"><i class="fa fa-times"></i></span>';

    const sidebar = document.getElementById("sidebar");
    sidebar.innerHTML = sidebarContent;
    sidebar.classList.add("open");

    document
      .getElementById("close-sidebar")
      .addEventListener("click", function () {
        sidebar.classList.remove("open");
      });
  });

  document.getElementById("search-bar").addEventListener("input", function (e) {
    const query = e.target.value.toLowerCase();
    const resultsDiv = document.getElementById("search-results");
    resultsDiv.innerHTML = "";

    // Récupérez les données de la source
    const eventData = map.getSource("events")._data.features;

    if (query) {
      eventData.forEach((event) => {
        const eventTitle = event.properties.title.toLowerCase();
        if (eventTitle.includes(query)) {
          const resultDiv = document.createElement("div");
          resultDiv.innerText = event.properties.title;
          resultDiv.onclick = function () {
            map.flyTo({ center: event.geometry.coordinates, zoom: 10 });
            resultsDiv.style.display = "none";
          };
          resultsDiv.appendChild(resultDiv);
        }
      });
      resultsDiv.style.display = "block";
    } else {
      resultsDiv.style.display = "none";
    }
  });

  document.querySelectorAll(".legend-item").forEach((item) => {
    item.addEventListener("click", function () {
      const type = this.getAttribute("data-type");
      const currentFilter = map.getFilter("events-point");

      // Si le type d'icône est déjà filtré, supprimez le filtre et affichez tous les éléments
      if (currentFilter && currentFilter[2] === type) {
        map.setFilter("events-point", null);
      } else {
        // Sinon, appliquez le filtre pour le type d'icône spécifié
        map.setFilter("events-point", ["==", "type", type]);
      }
    });
  });
});



// -===================================================================================================
// ==========================================================================================================?


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
