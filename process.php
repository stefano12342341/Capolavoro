<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volontariato col Caffè - Risultati</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            margin: 50px auto;
            padding: 20px;
            max-width: 900px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5em;
            color: #343a40;
            margin-bottom: 20px;
        }

        #testo {
            margin-top: 20px;
            font-size: 1.1em;
            color: #495057;
            text-align: justify;
        }

        p {
            margin: 10px 0;
            text-align: justify;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.1em;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Volontariato col Caffè</h1>
        <div id="testo">
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $action = $_POST['action'];
                    if ($action == 'cosaAbbiamoFatto') {
                        echo '<p>Durante quest\'anno, il nostro gruppo di volontariato ha partecipato a numerose iniziative, tra cui la distribuzione di pasti caldi ai senzatetto, la raccolta di abiti e beni di prima necessità per le famiglie bisognose, e l\'organizzazione di eventi di sensibilizzazione sulla povertà e l\'esclusione sociale.</p>';
                    } elseif ($action == 'cosaHoProvato') {
                        echo '<p>Partecipare a queste attività di volontariato è stata un\'esperienza profondamente gratificante. Ho provato un senso di soddisfazione nel vedere il sorriso sui volti delle persone che abbiamo aiutato. Inoltre, ho sviluppato una maggiore empatia e consapevolezza delle difficoltà che molte persone affrontano quotidianamente.</p>';
                    } elseif ($action == 'comeAiutare') {
                        echo '<p>Se vuoi fare la differenza, ci sono molti modi per aiutare. Puoi unirti a un gruppo di volontariato locale, donare beni di prima necessità, o semplicemente dedicare un po\' del tuo tempo a chi ne ha bisogno. Anche un piccolo gesto può avere un grande impatto nella vita di qualcuno.</p>';
                    } elseif ($action == 'comunitaSantEgidio') {
                        echo '<p>La Comunità di Sant\'Egidio è un movimento cristiano che si dedica al servizio dei poveri e alla promozione della pace. Fondata nel 1968, questa organizzazione opera in oltre 70 paesi e offre sostegno a senzatetto, rifugiati, anziani, e persone in difficoltà. Partecipare alle attività della Comunità di Sant\'Egidio è un modo significativo per contribuire al benessere della società e costruire una cultura di solidarietà e accoglienza.</p>';
                    } else {
                        echo '<p>Selezione non valida.</p>';
                    }
                } else {
                    echo '<p>Metodo di richiesta non valido.</p>';
                }
            ?>
        </div>
        <a href="index.html">Torna indietro</a>
    </div>
</body>
</html>
