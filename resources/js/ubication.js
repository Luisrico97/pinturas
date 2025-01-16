    const map = L.map('map').setView([29.109979, -111.010349], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    L.marker([29.109979, -111.010349]).addTo(map)
        .bindPopup('<b>Pinturas Multicolor "JR"</b><br>Dirección: Av. Perimetral Nte. 1285, Sahuaro, 83178 Hermosillo, Son.')
        .openPopup();