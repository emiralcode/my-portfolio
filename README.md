# 🚀 Modern PHP Portfolyo Sitesi

Bu proje, modern web teknolojileri ve temiz PHP yapısı kullanılarak geliştirilmiş, tamamen özelleştirilebilir bir kişisel portfolyo sitesidir.

## ✨ Özellikler

- **Modern Tasarım:** Tailwind CSS ile "Deep Dark" teması, cam efekti (glassmorphism) ve neon vurgular.
- **Modüler Yapı:** `header.php`, `footer.php` ve `config.php` ayrımı ile kolay yönetim.
- **Dinamik İçerik:** Tüm site verileri (projeler, eğitim, beceriler) tek bir `config.php` dosyasından yönetilir.
- **Responsive:** Mobil, tablet ve masaüstü cihazlarla tam uyumlu.
- **SEO Dostu:** Temel meta etiketleri ve semantik HTML yapısı.

## 🛠️ Teknolojiler

- **Backend:** PHP 8+
- **Frontend:** HTML5, Tailwind CSS (CDN), Vanilla JS
- **İkonlar:** FontAwesome 6
- **Fontlar:** Google Fonts (Outfit)

## 📦 Kurulum

Bu projeyi çalıştırmak için bilgisayarınızda bir PHP sunucusuna ihtiyacınız vardır (XAMPP, WAMP, Docker vb.).

1. **Repoyu Klonlayın:**
   ```bash
   git clone https://github.com/kullaniciadi/portfolio.git
   ```

2. **Dosyaları Sunucuya Taşıyın:**
   İndirdiğiniz dosyaları yerel sunucunuzun kök dizinine (örn: `htdocs` veya `www`) taşıyın.

3. **Tarayıcıda Açın:**
   `http://localhost/portfolio` adresine gidin.

## ⚙️ Yapılandırma

Sitedeki tüm bilgileri değiştirmek için `config.php` dosyasını düzenlemeniz yeterlidir.

### Örnek `config.php` Düzenlemesi:

```php
// Kişisel Bilgiler
$hero = [
    'name' => 'Adınız Soyadınız',
    'title' => 'Web Geliştirici',
    'subtitle' => 'Kısa biyografiniz...',
    // ...
];

// Proje Ekleme
$projects = [
    [
        'title' => 'Yeni Proje',
        'description' => 'Proje açıklaması...',
        'tags' => ['PHP', 'React'],
        'github' => '#',
        // ...
    ],
];
```

## 📂 Dosya Yapısı

```
.
├── index.php      # Ana sayfa
├── config.php     # Tüm site ayarları ve verileri
├── header.php     # Ortak üst bölüm (Navigasyon, Meta)
├── footer.php     # Ortak alt bölüm ve Scriptler
├── style.css      # Özel stil ve animasyonlar
└── README.md      # Proje dökümantasyonu
```

## 📄 Lisans

Bu proje MIT lisansı ile lisanslanmıştır. Dilediğiniz gibi kullanabilir ve değiştirebilirsiniz.

---
*Sevgiyle kodlandı.* 💙
