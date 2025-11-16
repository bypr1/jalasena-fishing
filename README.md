# 🎣 Jalasena Fishing Tournament 2025

Website resmi untuk Turnamen Memancing Jalasena 2025 di Benoa, Bali.

## 🌟 Fitur Utama

- **Single Page Application** - Semua konten dalam satu halaman yang smooth
- **Responsive Design** - Optimal di semua perangkat (desktop, tablet, mobile)
- **Countdown Timer** - Hitungan mundur menuju tournament
- **WhatsApp Integration** - Tombol kontak langsung ke panitia
- **Galeri Interaktif** - Foto-foto tournament sebelumnya
- **Google Maps** - Lokasi tournament di Benoa, Bali
- **Modern Animations** - Efek smooth scrolling dan animasi menarik

## 🚀 Teknologi

- **Laravel 11** - PHP Framework
- **TailwindCSS 3.4** - CSS Framework
- **Vite** - Build tool
- **Vanilla JavaScript** - Interaktivitas
- **FontAwesome** - Icons
- **Google Fonts (Poppins)** - Typography

## 📦 Instalasi

1. **Clone repository ini**
   ```bash
   git clone [repository-url]
   cd jalasena-fishing
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start development server**
   ```bash
   php artisan serve
   ```

8. **Buka browser di** `http://localhost:8000`

## 🎨 Kustomisasi

### Mengganti Gambar
- **Logo**: Ganti file `public/images/logo.png`
- **Hero Background**: Update URL di `resources/views/home.blade.php` line ~4
- **Gallery**: Update URL gambar di section gallery

### Mengubah Warna
Edit file `tailwind.config.js`:
```javascript
colors: {
  'ocean-blue': '#0077b6',
  'ocean-light': '#00b4d8',
}
```

### Tanggal Tournament
Edit file `resources/js/app.js` line ~5:
```javascript
const tournamentDate = new Date("2025-12-14T06:00:00+08:00").getTime();
```

## 📱 Kontak Panitia

- **Deck Sotto**: [087721333344](https://wa.me/62087721333344)
- **Komang Trigunadi**: [081239392399](https://wa.me/6281239392399)

## 🏆 Hadiah Tournament

**Total**: 93++ Juta Rupiah

### Kategori Tangkapan Terberat (Per Ikan)
- Juara 1: Rp 30.000.000
- Juara 2: Rp 20.000.000
- Juara 3: Rp 10.000.000
- Hiburan 1: Rp 3.000.000
- Hiburan 2: Rp 2.000.000
- Hiburan 3: Rp 1.000.000

### Kategori Spesies
- Catch & Release GT: Rp 10.000.000
- Catch Queen Snapper: Rp 10.000.000

### Penghargaan Lainnya
- Total Catch (per Jukung): Rp 5.000.000
- Best Captain (Jukung): Rp 2.000.000

## 🚀 Deployment

### Production Build
```bash
npm run build
```

### Server Requirements
- PHP 8.2+
- Composer
- Node.js 18+
- Web server (Apache/Nginx)

### Environment Variables
```env
APP_NAME="Jalasena Fishing Tournament 2025"
APP_ENV=production
APP_URL=https://jalasenafishingtournament.my.id
```

## 📝 Lisensi

© 2025 Jalasena Fishing Tournament. Semua Hak Dilindungi.

## 🤝 Kontribusi

Untuk perbaikan atau saran, silakan hubungi panitia melalui WhatsApp di atas.

---

**Selamat Memancing & Semoga Beruntung! 🎣**
