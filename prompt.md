# 🎣 Jalasena Fishing Tournament 2025 — Laravel One-Page Website Prompt

## 🌊 Overview
Create a **single-page website** using **Laravel 11** and **TailwindCSS** for the event **“Jalasena Fishing Tournament 2025.”**

This will serve as the **official landing page** for the annual fishing competition in Bali, showcasing event details, prizes, registration info, gallery, and contact sections — all within a single smooth-scrolling page.

---

## 🏝️ Event Information
- **Event Name:** Jalasena Fishing Tournament 2025  
- **Categories:** Jukung & Boat  
- **Date:** Sunday, December 14, 2025  
- **Location:** Benoa, Bali, Indonesia  
- **Domain:** [jalasenafishingtournament.my.id](https://jalasenafishingtournament.my.id)

---

## ⚙️ Technical Stack
- **Framework:** Laravel 11  
- **Frontend:** Blade Templates + TailwindCSS  
- **Scripts:** Vanilla JavaScript (for countdown & smooth scroll)  
- **Database:** None (static content only)  
- All content is within `resources/views/home.blade.php`  
- Use `layouts/app.blade.php` as the main layout  

---

## 🧭 Page Sections

### 1. Hero Section
- Full-screen ocean/fishing background (Bali coastal scene)  
- Main text: **“Jalasena Fishing Tournament 2025”**  
- Subtext: *“Sunday, December 14, 2025 — Benoa, Bali”*  
- CTA button: **“Register Now”** (scrolls to registration section)  
- Include a **JavaScript countdown timer** leading up to Dec 14, 2025  

---

### 2. About Section
- Short description introducing the tournament’s spirit — unity, sportsmanship, and excitement.  
- Mention that the competition is for **Jukung and Boat categories.**

---

### 3. Prizes Section
- Title: **“Total Prizes: 93++ Million Rupiah!”**  
- Display prizes in responsive grid or card layout:  

#### 🏆 *Heaviest Catch Category (Per Fish)*
1. 1st Place – Rp 30,000,000  
2. 2nd Place – Rp 20,000,000  
3. 3rd Place – Rp 10,000,000  
4. Consolation 1 – Rp 3,000,000  
5. Consolation 2 – Rp 2,000,000  
6. Consolation 3 – Rp 1,000,000  

#### 🐟 *Species Category*
- Catch & Release GT – Rp 10,000,000  
- Catch Queen Snapper – Rp 10,000,000  

#### ⚓ *Other Awards*
- Total Catch (per Jukung) – Rp 5,000,000  
- Best Captain (Jukung) – Rp 2,000,000  

---

### 4. Registration Section
- Text: **“Registration Fee: Rp 500,000 per person”**  
- Payment details:  
  - **Bank Mandiri:** Riko Soetardi – 1450017270063  
  - **Bank BRI:** Riko Soetardi – 017401100363503  
- CTA: “Contact the Committee”  
- Include **two WhatsApp buttons**:  
  - Deck Sotto – 087721333344  
  - Komang Trigunadi – 081239392399  
- Use WhatsApp green icon and hover animation  

---

### 5. Gallery Section
- Display a photo grid (3–6 images) showing previous tournaments.  
- Example image paths:  
  - `/public/images/gallery1.jpg`  
  - `/public/images/gallery2.jpg`  
  - `/public/images/gallery3.jpg`

---

### 6. Location & Contact Section
- Title: **“Location & Contact Information”**  
- Embed a **Google Map** showing Benoa, Bali.  
- Display both contact names and WhatsApp links again below the map.  

---

### 7. Footer
- Dark blue background with white text  
- Footer text:  
  `© 2025 Jalasena Fishing Tournament. All Rights Reserved.`  
- Optional: Add small social media icons  

---

## 🎨 Design Guidelines
- **Primary Color:** `#0077b6` (ocean blue)  
- **Secondary Color:** `#00b4d8`, white, light gray  
- **Font:** *Poppins* or *Inter*  
- **Style:** tropical, marine, sporty, adventurous  
- Use smooth scrolling, fade-in animations, and subtle parallax effects.  
- Make it **fully responsive** for mobile and desktop.  

---

## 🧱 Project Structure
/resources/views/
├── layouts/
│ └── app.blade.php ← main layout (navbar + footer)
└── home.blade.php ← single-page content

/public/
├── images/
│ ├── hero.jpg
│ ├── gallery1.jpg
│ ├── gallery2.jpg
│ └── logo.png
└── css/
└── custom.css


---

## 🔋 Features to Include
- Countdown Timer (to Dec 14, 2025)  
- Smooth scrolling navigation (anchor-based)  
- Sticky navbar with logo & anchor links (#about, #prizes, #register, #gallery, #contact)  
- WhatsApp CTA buttons that open direct chat links  
- Embedded Google Maps  
- Fully mobile-friendly layout  

---

## 📦 Expected Output
- Laravel 11 project, ready to run (`php artisan serve`)  
- Single-page Blade layout (`home.blade.php`)  
- TailwindCSS integrated  
- Functional countdown, WhatsApp buttons, and Google Maps embed  
- Public image assets in `/public/images`  
- Clean, professional, and event-themed visuals  

---

## 🎯 Goal
Deliver a **single-page Laravel website** that captures the excitement of the **Jalasena Fishing Tournament 2025**, encourages registration, and provides all key event details in an attractive, responsive design — ready for deployment to **jalasenafishingtournament.my.id**.
