# Laravel CRUD Generator

Proyek ini adalah aplikasi Laravel dengan fitur **generator CRUD otomatis** menggunakan command kustom `make:crud-controller`. Cocok untuk mempercepat proses pengembangan backend dan antarmuka admin.

## ✨ Fitur

- Command Artisan: `php artisan make:crud-controller NamaModel --fields=nama:string,email:email,...`
- Otomatis membuat:
  - Controller dengan fungsi lengkap (index, create, store, edit, update, destroy)
  - Route resource ke `routes/web.php`
  - View: `index.blade.php`, `edit.blade.php`, dan `create.blade.php` di `resources/views/admin/<nama-model>`
- Validasi otomatis di controller berdasarkan tipe field

## 🛠 Instalasi

1. **Clone repositori:**

   ```bash
   git clone <url-repo-ini>
   cd <nama-folder>
