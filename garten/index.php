<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angebotserstellung für Gartenarbeiten</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Unverbindliche Angebotserstellung für Gartenarbeiten</h1>
        <p>Geben Sie die gewünschten Mengen und die Entfernung unseres Standortes ein, um ein vorläufiges Angebot für unsere Gartenarbeiten zu erhalten.</p>
        <form id="angebotForm">
            <div class="form-group">
                <label for="gruenpflege">Grünpflege (in m²):</label>
                <input type="number" id="gruenpflege" name="gruenpflege" min="0" step="0.1">
            </div>
            <div class="form-group">
                <label for="pflasterarbeiten">Pflasterarbeiten und Plattenverlegung (in m²):</label>
                <input type="number" id="pflasterarbeiten" name="pflasterarbeiten" min="0" step="0.1">
            </div>
            <div class="form-group">
                <label for="zaeune">Zäune und Mauern (in m):</label>
                <input type="number" id="zaeune" name="zaeune" min="0" step="0.1">
            </div>
            <div class="form-group">
                <label for="bepflanzungen">Bepflanzungen (in m²):</label>
                <input type="number" id="bepflanzungen" name="bepflanzungen" min="0" step="0.1">
            </div>
            <div class="form-group">
                <label for="entfernung">Entfernung zum Einsatzort (in km):</label>
                <input type="number" id="entfernung" name="entfernung" min="0" step="0.1">
            </div>
            <button type="button" onclick="berechnePreis()">Preis berechnen</button>
        </form>
        <div id="ergebnis">
            <h2>Vorläufiges Angebot</h2>
            <p id="einzelpreise"></p>
            <p id="gesamtpreis"></p>
            <p id="hinweis"></p>
            <p id="mwstHinweis">Hinweis: Alle Preise sind ohne Mehrwertsteuer angegeben.</p>
        </div>
        <button type="button" onclick="downloadPDF()">Angebot als PDF herunterladen</button>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
