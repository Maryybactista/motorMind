<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/monitoramento.css">
  <title>MotorMind</title>
</head>
<body>

    <div id="title">MONITORAMENTO EM TEMPO REAL!</div>

    <button id="toggleButton" onclick="toggleCards()">MONITORAMENTO</button>
  
    <div id="cardContainer">
      <div class="card" id="voltageCard">
        Tensão: <span class="cardValue" id="voltageValue"></span>
      </div>
      <div class="card" id="temperatureCard">
        Temperatura: <span class="cardValue" id="temperatureValue"></span>
      </div>
      <div class="card" id="currentCard">
        Corrente: <span class="cardValue" id="currentValue"></span>
      </div>
      <div class="card" id="speedCard">
        Velocidade: <span class="cardValue" id="speedValue"></span>
      </div>
    </div>
  
    <script>
      function toggleCards() {
        var cardContainer = document.getElementById('cardContainer');
        var cards = document.querySelectorAll('.card');
  
        cards.forEach(function(card) {
          card.classList.toggle('show');
        });
      }
  
      // Exemplo de atribuição de valores do banco de dados (simulação)
      document.getElementById('voltageValue').innerText = '120V';
      document.getElementById('temperatureValue').innerText = '25°C';
      document.getElementById('currentValue').innerText = '5A';
      document.getElementById('speedValue').innerText = '1740 Rpm';
    </script>
   <button> <a href="./index.html"> Voltar</a></button>
</body>
</html>