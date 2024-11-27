<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Agendamento</title>
    <link rel="stylesheet" href="agendamento.css"> 
</head>
<body>

    <header>
        <h1>Agendamento de Serviço</h1>
    </header>

    <div class="container">
        <h2>Escolha uma data para o agendamento</h2>
        <form action="#" method="POST">
            <label for="data">Data do agendamento:</label>
            <input type="date" id="data" name="data" required>
            
            <label for="hora">Horário do agendamento:</label>
            <input type="text" id="hora" name="hora" placeholder="Clique no botão ESCOLHER HORÁRIO DO CORTE" required readonly>
            
            <label for="corte">Tipo de corte:</label>
            <input type="text" id="corte" name="corte" placeholder="Clique no botão ESCOLHER O CORTE" required readonly>
            
            <button type="submit">Agendar</button>
        </form>
        
        <button id="escolherHorarioBtn">Escolher Horário de Corte</button>
        <button id="escolherCorteBtn">Escolher Corte de Cabelo</button>
    </div>


    <div id="modalHorario" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Escolha um horário para o corte de cabelo</h2>
            <div class="horarios">
                <button onclick="definirHorario('06:00')">06:00</button>
                <button onclick="definirHorario('07:00')">07:00</button>
                <button onclick="definirHorario('08:00')">08:00</button>
                <button onclick="definirHorario('09:00')">09:00</button>
                <button onclick="definirHorario('10:00')">10:00</button>
                <button onclick="definirHorario('11:00')">11:00</button>
                <button onclick="definirHorario('12:00')">12:00</button>
                <button onclick="definirHorario('13:00')">13:00</button>
                <button onclick="definirHorario('14:00')">14:00</button>
                <button onclick="definirHorario('15:00')">15:00</button>
                <button onclick="definirHorario('16:00')">16:00</button>
                <button onclick="definirHorario('17:00')">17:00</button>
                <button onclick="definirHorario('18:00')">18:00</button>
                <button onclick="definirHorario('19:00')">19:00</button>
                <button onclick="definirHorario('20:00')">20:00</button>
                <button onclick="definirHorario('21:00')">21:00</button>
            </div>
        </div>
    </div>


    <div id="modalCorte" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Escolha o corte de cabelo</h2>
            <div class="cortes">
                <button onclick="definirCorte('Corte Militar')">Corte Militar</button>
                <button onclick="definirCorte('Corte com Tesoura')">Corte com Tesoura</button>
                <button onclick="definirCorte('Corte com Máquina')">Corte com Máquina</button>
                <button onclick="definirCorte('Corte Mohawk')">Corte Mohawk</button>
                <button onclick="definirCorte('Corte Undercut')">Corte Undercut</button>
                <button onclick="definirCorte('Corte Fade')">Corte Fade</button>
                <button onclick="definirCorte('Corte Franja')">Corte Franja</button>
                <button onclick="definirCorte('Corte de Cabelo Longo')">Corte de Cabelo Longo</button>
            </div>
        </div>
    </div>

    <script>

        const dataInput = document.getElementById('data');
        const hoje = new Date();
        const ano = hoje.getFullYear();
        const mes = String(hoje.getMonth() + 1).padStart(2, '0'); 
        const dia = String(hoje.getDate()).padStart(2, '0');

        dataInput.setAttribute('min', `${ano}-${mes}-${dia}`);


        var modalHorario = document.getElementById("modalHorario");
        var btnHorario = document.getElementById("escolherHorarioBtn");
        var spanHorario = document.getElementsByClassName("close")[0];


        btnHorario.onclick = function() {
            modalHorario.style.display = "block";
        }


        spanHorario.onclick = function() {
            modalHorario.style.display = "none";
        }


        window.onclick = function(event) {
            if (event.target == modalHorario) {
                modalHorario.style.display = "none";
            }
        }


        function definirHorario(horaEscolhida) {
            document.getElementById("hora").value = horaEscolhida;
            modalHorario.style.display = "none"; 
        }


        var modalCorte = document.getElementById("modalCorte");
        var btnCorte = document.getElementById("escolherCorteBtn");
        var spanCorte = document.getElementsByClassName("close")[1];


        btnCorte.onclick = function() {
            modalCorte.style.display = "block";
        }


        spanCorte.onclick = function() {
            modalCorte.style.display = "none";
        }


        window.onclick = function(event) {
            if (event.target == modalCorte) {
                modalCorte.style.display = "none";
            }
        }


        function definirCorte(corteEscolhido) {
            document.getElementById("corte").value = corteEscolhido;
            modalCorte.style.display = "none"; 
        }
    </script>


    <div class="carrossel">
        <div class="carrossel-imagens">
            <img src="Barbershop Photoshoot Ideas.jpeg" alt="Imagem 1">
            <img src="1aba9637-0f4d-49f8-8020-c830e9b31460.jpeg" alt="Imagem 2">
            <img src="Free Barber Shaves A Mans Face Photo — High Res Pictures.jpeg" alt="Imagem 3">
            <img src="best fade haircut for men mid hairstyler for short hair.jpg" alt="Imagem 4">

            <img src="Barbershop Photoshoot Ideas.jpeg" alt="Imagem 1">
            <img src="1aba9637-0f4d-49f8-8020-c830e9b31460.jpeg" alt="Imagem 2">
            <img src="Free Barber Shaves A Mans Face Photo — High Res Pictures.jpeg" alt="Imagem 3">
            <img src="best fade haircut for men mid hairstyler for short hair.jpg" alt="Imagem 4">
        </div>
    </div>

</body>
</html>
