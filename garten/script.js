// script.js
document.addEventListener("DOMContentLoaded", () => {
    fetch("preise.json")
        .then(response => response.json())
        .then(data => window.preise = data);
});

function berechnePreis() {
    const gruenpflege = parseFloat(document.getElementById("gruenpflege").value) || 0;
    const pflasterarbeiten = parseFloat(document.getElementById("pflasterarbeiten").value) || 0;
    const zaeune = parseFloat(document.getElementById("zaeune").value) || 0;
    const bepflanzungen = parseFloat(document.getElementById("bepflanzungen").value) || 0;
    const entfernung = parseFloat(document.getElementById("entfernung").value) || 0;

    const preise = window.preise;

    const preisGruenpflege = gruenpflege * preise.gruenpflege;
    const preisPflasterarbeiten = pflasterarbeiten * preise.pflasterarbeiten;
    const preisZaeune = zaeune * preise.zaeune;
    const preisBepflanzungen = bepflanzungen * preise.bepflanzungen;
    const preisAnfahrt = entfernung * preise.anfahrt;

    const gesamtpreis = preisGruenpflege + preisPflasterarbeiten + preisZaeune + preisBepflanzungen + preisAnfahrt;

    document.getElementById("einzelpreise").innerHTML = `
        Grünpflege: €${preisGruenpflege.toFixed(2)}<br>
        Pflasterarbeiten: €${preisPflasterarbeiten.toFixed(2)}<br>
        Zäune und Mauern: €${preisZaeune.toFixed(2)}<br>
        Bepflanzungen: €${preisBepflanzungen.toFixed(2)}<br>
        Anfahrt: €${preisAnfahrt.toFixed(2)}
    `;

    document.getElementById("gesamtpreis").innerHTML = `
        <strong>Gesamtpreis: €${gesamtpreis.toFixed(2)}</strong>
    `;

    if (gesamtpreis < 50) {
        document.getElementById("hinweis").innerText = "Hinweis: Die Menge ist zu gering.";
    } else {
        document.getElementById("hinweis").innerText = "";
    }
}

function downloadPDF() {
    const element = document.getElementById("ergebnis");
    html2pdf().from(element).save('Angebot.pdf');
}
