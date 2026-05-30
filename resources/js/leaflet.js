document.addEventListener('DOMContentLoaded', function () {

    // Coordenadas da loja (EXEMPLO - troca depois)
    const lat = -30.0346;
    const lng = -51.2177;

    // Criar mapa
    const map = L.map('map').setView([lat, lng], 15);

    // Tiles (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    // Ícone personalizado (dourado)
    const customIcon = L.divIcon({
        className: '',
        html: `
            <div style="
                background:#d4af37;
                width:20px;
                height:20px;
                border-radius:50%;
                border:3px solid white;
                box-shadow:0 0 10px rgba(0,0,0,0.3);
            "></div>
        `,
        iconSize: [20, 20],
        iconAnchor: [10, 10]
    });

    // Marcador
    const marker = L.marker([lat, lng], { icon: customIcon }).addTo(map);

    // Popup estilizado
    marker.bindPopup(`
        <strong>Malharia Everju</strong><br>
        Moda confortável e de qualidade<br><br>
        <a href="https://www.google.com/maps?q=${lat},${lng}" target="_blank">
            Ver no Google Maps
        </a>
    `);

});