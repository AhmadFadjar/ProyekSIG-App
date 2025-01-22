<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Geografis</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
            background-color: #4361EE;
            color: white;
            padding: 10px 20px;
        }
        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header nav ul {
            list-style: none;
            display: flex;
            gap: 15px;
            margin: 0;
            padding: 0;
        }
        header nav ul li {
            display: inline;
        }
        header nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        .hero {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    padding: 50px 20px;
}

.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ffffff;
    padding: 50px 20px;
}

.hero-container {
    display: flex;
    flex-wrap: wrap; /* Responsif jika layar kecil */
    max-width: 1200px;
    width: 80%;
    gap: 20px; /* Jarak antara gambar dan teks */
}

.hero-image {
    flex: 1; /* Ukuran gambar fleksibel */
    max-width: 50%; /* Gambar menempati 50% lebar */
}

.hero-image img {
    width: 100%; /* Gambar memenuhi kontainer */
    height: auto; /* Menjaga rasio gambar */
    border-radius: 10px; /* Sudut gambar melengkung */
}

.hero-text {
    flex: 1; /* Ukuran teks fleksibel */
    max-width: 50%; /* Teks menempati 50% lebar */
    text-align: left;
}

.hero-text h1 {
    font-size: 2.5rem;
    margin-bottom: 15px;
    font-weight: 700;
    color: #333;
}

.hero-text p {
    font-size: 1.2rem;
    margin-bottom: 20px;
    line-height: 1.5;
    color: #666;
}

.hero-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 600;
    color: white;
    background-color: #4CAF50;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.hero-button:hover {
    background-color: #45a049;
}


        #map {
            height: 500px;
            margin: 20px auto;
            width: 90%;
            border: 3px solid #4361EE;
            border-radius: 10px;
        }
        footer {
            background-color: #4361EE;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <div>
                <h2>SIG Project</h2>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#map">Peta</a></li>
                <li><a href="#about">Tentang</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
    <div class="hero-container">
        <!-- Gambar -->
        <div class="hero-image">
            <img src="{{ asset('images/hero-image.jpg') }}" alt="Peta Interaktif" />
        </div>
        <!-- Teks Penjelasan -->
        <div class="hero-text">
            <h1>Eksplorasi Data Geografis Provinsi Jawa Barat</h1>
            <p>
                Selamat datang di Sistem Informasi Geografis! Dengan platform ini, Anda dapat mengeksplorasi data lokasi secara 
                interaktif, membantu Anda memahami informasi geografis dengan lebih mudah dan praktis.
            </p>
            <a href="#map" class="hero-button">Lihat Peta</a>
        </div>
    </div>
</section>



    <!-- Peta -->
    <section id="map-container">
        <div id="map"></div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 SIG Project | All Rights Reserved</p>
    </footer>

    <!-- Leaflet.js -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.4025,106.7942], 13);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
        
            var lokasi = {
    "type": "FeatureCollection",
    "features": [
        {
            "type": "Feature",
            "properties": {
                "Kota": "Jakarta",
                "Tahun": "2024",
                "Populasi" : "11.436.000 Jiwa",
                "Tingkat Pengangguran": "6,03%"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [106.82698191437964, -6.175544942700014]
            }
        },
        {
                    "type": "Feature",
                    "properties": {
                        "Kota": "Bandung",
                        "Populasi": "2,470,802",
                        "Tingkat Pengangguran": "7.62%",
                        "Tahun": "2024"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [107.6191, -6.9175]
                    }
                },
                {
                    "type": "Feature",
                    "properties": {
                        "Kota": "Bogor",
                        "Populasi": "1,030,720",
                        "Tingkat Pengangguran": "8.03%",
                        "Tahun": "2024"
                    },
                    "geometry": {
                        "type": "Point",
                        "coordinates": [106.8060, -6.5971]
                    }
                },
                {
            "type": "Feature",
            "properties": {
                "Kota": "Depok",
                "Populasi": "2,013,330",
                "Tingkat Pengangguran": "8.52%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [106.8233, -6.4025]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Bekasi",
                "Populasi": "3,083,325",
                "Tingkat Pengangguran": "9.03%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [106.9896, -6.2349]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Cimahi",
                "Populasi": "586,580",
                "Tingkat Pengangguran": "9.89%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.5423, -6.8721]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Cirebon",
                "Populasi": "333,303",
                "Tingkat Pengangguran": "10.42%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.5523, -6.7063]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Sukabumi",
                "Populasi": "350,882",
                "Tingkat Pengangguran": "7.85%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [106.9270, -6.9190]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Tasikmalaya",
                "Populasi": "716,155",
                "Tingkat Pengangguran": "5.89%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.2206, -7.3274]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Banjar",
                "Populasi": "200,970",
                "Tingkat Pengangguran": "5.11%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.5345, -7.3697]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Cianjur",
                "Populasi": "2,400,231",
                "Tingkat Pengangguran": "6.34%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.1424, -6.8161]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Garut",
                "Populasi": "2,573,314",
                "Tingkat Pengangguran": "5.45%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.9084, -7.2147]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Ciamis",
                "Populasi": "1,228,694",
                "Tingkat Pengangguran": "4.98%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.3495, -7.3256]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Kuningan",
                "Populasi": "1,170,299",
                "Tingkat Pengangguran": "5.31%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.4804, -6.9797]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Majalengka",
                "Populasi": "1,287,866",
                "Tingkat Pengangguran": "5.78%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.2270, -6.8392]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Sumedang",
                "Populasi": "1,200,456",
                "Tingkat Pengangguran": "5.88%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.9165, -6.8547]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Indramayu",
                "Populasi": "1,800,512",
                "Tingkat Pengangguran": "6.01%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.3249, -6.3298]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Subang",
                "Populasi": "1,595,320",
                "Tingkat Pengangguran": "6.23%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.7636, -6.5590]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Purwakarta",
                "Populasi": "997,879",
                "Tingkat Pengangguran": "5.94%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.4430, -6.5560]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Karawang",
                "Populasi": "2,299,830",
                "Tingkat Pengangguran": "6.45%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.5731, -6.3054]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Bandung Barat",
                "Populasi": "1,682,390",
                "Tingkat Pengangguran": "6.67%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [107.4652, -6.8238]
            }
        },
        {
            "type": "Feature",
            "properties": {
                "Kota": "Pangandaran",
                "Populasi": "425,620",
                "Tingkat Pengangguran": "4.79%",
                "Tahun": "2024"
            },
            "geometry": {
                "type": "Point",
                "coordinates": [108.5056, -7.6103]
            }
        }
    ]
};

var geojson = L.geoJSON(lokasi, {
    onEachFeature: function (feature, layer) {
        var popupContent = 
            "<b>Kota:</b> " + feature.properties.Kota + "<br>" +
            "<b>Tahun:</b> " + feature.properties.Tahun + "<br>" +
            "<b>Populasi:</b> " + feature.properties.Populasi + "<br>" +
            "<b>Tingkat Pengangguran:</b> " + feature.properties["Tingkat Pengangguran"];
        
        layer.bindPopup(popupContent);
    }
}).addTo(map);

// Tidak perlu menambahkan kembali geoJSON ke peta, karena sudah ditambahkan di atas

    </script>
</body>
</html>
