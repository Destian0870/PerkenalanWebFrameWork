# 📘 LAPORAN PRAKTIKUM WEEK 11

## Implementasi CRUD Menggunakan Filament (Post & Category)

---

## 👤 Identitas

- Nama: Destian Dwi H
- NIM: 244107020203
- Kelas: TI_2F

---

## 📌 Langkah-langkah Praktikum

---

### 🔹 Step 1 — Database

Konfigurasi database di `.env`

📸 Screenshot:

```md id="tkn3b3"
![Database](images/step1-database.png)
```

---

### 🔹 Step 2 — Install Filament (hasil terminal sebelumnya hilang)

```bash id="x9x6bc"
php artisan make:filament-panel admin
```

📸 Screenshot:

```md id="rq9m1s"
![Install Filament](images/step2-filament.png)
```

---

### 🔹 Step 3 — Buat User Admin

```bash id="k2p5z7"
php artisan make:filament-user
```

📸 Screenshot:

```md id="9rzqzq"
![User Admin](images/step3-user.png)
```

---

### 🔹 Step 4 — Model & Migration

```bash id="xfh43f"
php artisan make:model Category -m
php artisan make:model Post -m
```

📸 Screenshot:

```md id="zx9a2n"
![Migration File](images/step4A-migration.png)
```

```md id="zx9a2n"
![Migration File](images/step4B-migration.png)
```

---

### 🔹 Step 5 — Struktur Database

**Category**

```php id="u0hj5u"
$table->string('name');
```

**Post**

```php id="v8rm7j"
$table->string('title');
$table->string('slug');
$table->foreignId('category_id')->constrained();
```

📸 Screenshot:

```md id="y4u7h0"
![Migration Code](images/step5A-structure.png)
```

```md id="y4u7h0"
![Migration Code](images/step5B-structure.png)
```

---

### 🔹 Step 6 — Jalankan Migration

```bash id="n9avhj"
php artisan migrate
```

📸 Screenshot:

```md id="mzqkzj"
![Migrate](images/step6-migrate.png)
```

---

### 🔹 Step 7 — Resource Filament

```bash id="w8tkdp"
php artisan make:filament-resource Category
php artisan make:filament-resource Post
```

📸 Screenshot:

```md id="4s8c9k"
![Resource](images/step9A-resource.png)
```

```md id="4s8c9k"
![Resource](images/step9B-resource.png)
```

---

### 🔹 Step 8 — Hasil

📸 Screenshot:

```md id="4c4zfp"
![Form Category](images/step10-Hasil1.png)
```

```md id="a9u4l9"
![Form Post](images/step10-Hasil2.png)
```

```md id="a9u4l9"
![Form Post](images/step10-Hasil3.png)
```

```md id="a9u4l9"
![Form Post](images/step10-Hasil4.png)
```

---
