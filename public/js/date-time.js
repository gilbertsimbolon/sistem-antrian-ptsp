function updateClock() {
            const now = new Date();
            
            // Format Jam
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');
    
            // Format Hari
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const dayName = days[now.getDay()];
    
            // Format Tanggal, Bulan, Tahun
            const date = now.getDate().toString().padStart(2, '0');
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            const monthName = months[now.getMonth()];
            const year = now.getFullYear();
    
            // Gabungkan Semua
            const fullDate = `${dayName}, ${date} ${monthName} ${year}`;
            const time = `${hours}:${minutes}:${seconds}`;
    
            // Tampilkan di Halaman
            document.getElementById('clock').innerHTML = `${fullDate} | ${time}`;
        }
    
        setInterval(updateClock, 1000); // Update setiap 1 detik
        updateClock(); // Panggil sekali untuk menampilkan waktu saat pertama kali