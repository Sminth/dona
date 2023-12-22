<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Convert HTML To Image</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
  </head>
  <style media="screen">
    .ad-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 250px;

    border: 2px solid #000;
    background: linear-gradient(to bottom, #FFDE59 55%, #00BF63 45%);

    text-align: center;
    padding: 20px;
    font-family: Arial, sans-serif;
  }

  .ad-header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .ad-qr {
    margin: 10px 0;
  }

  .ad-qr {
  /* autres propriétés */
  border: 10px solid white; /* Bordure blanche */
  border-radius: 15px; /* Coins arrondis */
  position: relative; /* Pour positionner le logo SVG */
  overflow: hidden; /* Pour les coins arrondis du QR code */
}

.qr-logo {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 30%; /* Ajustez la taille de votre logo */
  height: 30%; /* Ajustez la taille de votre logo */
}
  .ad-footer {
    font-size: 16px;
    margin-top: 20px;
  }
  </style>
  <body onload = "autoClick();">

    <div id = "htmlContent" class="ad-container">
        <div class="ad-header">MINTMADE</div>
        <div>Clothes for Him and Her</div>
        <!-- Ici, vous intégrerez le QR Code généré dynamiquement -->
        <div class="ad-qr" id="qrcode">
          <!-- Logo SVG au milieu du QR code -->
          <!-- <svg  viewBox="0 0 100 100"> -->
            <svg class="qr-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 256 256" enable-background="new 0 0 256 256" xml:space="preserve">
              <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
              <g><g><path fill="#000000" d="M227.5,29c-0.2-0.2,0.2-0.4-1.5-0.6v0l0.7,0c-12.3-12.1-28.1-18.1-44.2-17.9c-16.1,0.1-32,6.4-44,18.7l-20.1,20c0,0,0,0.5,0,0.5c-1.3,1.3-4.8,2.2-6.5,0.5h0L97.4,34.9l0-0.3c-9.9-9.9-22.9-15-35.9-15c-13,0-26.8,4.9-36.6,14.8l-3.8,2.9v0.2C14.3,47,10,58.7,10,70.3c0,13,5.3,26,15.2,35.9l59.6,59.4c4,4,10.5,4,14.5,0c4-4,4.1-10.5,0-14.5L40,91.7c-5.9-5.9-8.8-13.7-8.8-21.4c0-7.8,3-15.5,8.9-21.4l0,0c5.9-5.9,13.6-8.2,21.4-8.2c7.7,0,15.5,2.6,21.4,9.3h0l21.2,20.9c3,3,6.9,4.3,10.9,4.3c3.9,0,7.8-1.5,10.8-4.5l26.5-27l-0.8-0.1v0c8.5-8.4,19.9-12.6,30.8-12.7c10.9-0.1,22.2,3.9,30.5,12l0.3,0c0.2,0.2,0.4,0.3,0.6,0.5c8,8.2,12.2,18.9,12.4,29.6c0.1,10.7-3.7,21.3-11.6,29.5c-0.2,0.1-0.3,0.3-0.5,0.4l-93.5,92.4c-4,4-4.1,10.4-0.1,14.5c4,4,10.5,4.1,14.5,0.1l93.5-92.4c0.2-0.2,0.5-0.5,0.7-0.7c11.9-12.1,17.2-28.1,17-44C245.9,56.8,239.3,41,227.5,29z"/><path fill="#000000" d="M101.6,211.5c-9.4,0-17.1,7.7-17.1,17.1c0,9.4,7.6,17.1,17.1,17.1c9.4,0,17-7.7,17-17.1C118.6,219.2,111,211.5,101.6,211.5z"/></g></g>
            </svg>
        </div>
        
        <div class="ad-footer">Discover our latest collection</div>
    </div>
    <a id="download">Download</a>


    <!-- Insérez ici le script pour la bibliothèque de génération de QR Code -->
<script src="{{asset('assets/qrcode.js')}}"></script>
<script>
  // var qrcode = new QRCode(document.getElementById("qrcode"), {
  //   text: "Le texte que vous voulez encoder",
  //   width: 100,
  //   height: 100,
  //   colorDark : "transparent", // Rend les points du QR code transparents
  //   colorLight : "#ffffff", // Couleur de fond du QR code, généralement blanc
  //   correctLevel : QRCode.CorrectLevel.H // Haute correction d'erreur
  // });
// Configuration du QR code (ceci est un pseudo-code, la syntaxe réelle dépendra de la bibliothèque)
var qrOptions = {
  text: "http://votre-url.com",
  width: 100,
  height: 100,
  colorDark: "#0000ff", // Couleur des points du QR code
  colorLight: "#ffffff", // Couleur de fond du QR code, ici transparent
  correctLevel: QRCode.CorrectLevel.H, // Niveau de correction d'erreur
  logo: "path-to-your-logo.svg", // Chemin vers le logo central
  logoWidth: undefined, // Largeur du logo si nécessaire
  logoHeight: undefined, // Hauteur du logo si nécessaire
  logoBackgroundColor: '#ffffff', // Couleur de fond derrière le logo si nécessaire
  logoBackgroundTransparent: true, // Fond transparent pour le logo
  // ... Autres options pour personnaliser la forme des points et le texte ...
};

// Créer le QR code
var qrCode = new QRCode(document.getElementById("qrcode"), qrOptions);

// Appliquer les styles CSS pour la bordure et les coins arrondis
var container = document.getElementById("qrcode-container");
container.style.border = "10px solid white";
container.style.borderRadius = "15px";
container.style.padding = "10px";
container.style.backgroundColor = "#00ff00"; // Couleur de fond du conteneur
container.style.display = "inline-block";

</script>









    <script type="text/javascript">
      $(document).ready(function() {
  $('#download').on('click', function() {
    html2canvas(document.querySelector("#htmlContent")).then(canvas => {
      // Créer un élément d'ancre pour le téléchargement
      var link = document.createElement('a');
      link.download = 'capture-de-contenu.png';
      link.href = canvas.toDataURL();
      link.click();
      link.delete;
    });
  });
});
    </script>
  </body>
</html>





<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Advertisement</title>
<style>
  .ad-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 300px;
    border: 2px solid #000;
    background: linear-gradient(to right, yellow 50%, green 50%);
    text-align: center;
    padding: 20px;
    font-family: Arial, sans-serif;
  }

  .ad-header {
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .ad-qr {
    margin: 10px 0;
  }

  .ad-footer {
    font-size: 16px;
    margin-top: 20px;
  }
</style>
</head>
<body>

<div class="ad-container">
  <div class="ad-header">MINTMADE</div>
  <div>Clothes for Him and Her</div>
  <img class="ad-qr" src="path-to-your-qr-code.png" alt="QR Code" width="100" height="100">
  <div class="ad-footer">Discover our latest collection</div>
</div>

</body>
</html> -->
<!-- 

.ad-qr {
  /* autres propriétés */
  border: 10px solid white; /* Bordure blanche */
  border-radius: 15px; /* Coins arrondis */
  position: relative; /* Pour positionner le logo SVG */
  overflow: hidden; /* Pour les coins arrondis du QR code */
}

.qr-logo {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 30%; /* Ajustez la taille de votre logo */
  height: 30%; /* Ajustez la taille de votre logo */
} -->
