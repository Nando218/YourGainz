# YourGainz - Fitness App
<p align="center">
    <img src="https://github.com/user-attachments/assets/a7d902a2-a06e-4cd9-bfea-6a63188f5bd5" width="400px" alt="YourGainz Logo">
</p>


YourGainz is a fitness application designed to help users improve their physical condition through an exercise system, gamification, and personalized routines.

---

## ✨ **Table of Contents**
1. [🌟 Main Features](#-main-features)
2. [🖥️ Screenshots](#-Screenshots)
3. [👨‍🎓 Team](#-team)
4. [🛠 Technologies](#-technologies)
5. [📂 Project Architecture](#-project-architecture)
6. [⚙️ Installation & Setup](#-installation--setup)
7. [📊 Database](#-database)
8. [🚀 Future Improvements](#-future-improvements)
9. [🛡️ License](#-license)

---

## 🌟 **Main Features**

- **Exercises & Database:**
  - Around 200 exercises.
  - Animations and detailed descriptions.
  - Search and filter by difficulty and muscle group.
  
- **User Personalization:**
  - Creation of custom routines.
  - Profile with avatar and editable data.
  - Automatic BMI calculation.

- **Modern Interface:**
  - Mobile First with responsive design.
  - Smooth animations and attractive transitions.
  - Optimized UI for usability and intuitive experience.

- **Database & API:**
  - Secure storage with MySQL.
  - Custom API with CRUD for exercise management.
  - Administration via phpMyAdmin.

---

## 🖥️ **Screenshots**

| Landing Page | Home Page | Exercises Page |
|-------------|----------|---------------| 
| [![Landing Page](https://github.com/user-attachments/assets/53efbf8d-393b-4b39-9e95-eedb851ad308)](URL_LANDING_IMAGE) | [![Home Page](https://github.com/user-attachments/assets/30fde329-9d50-4e1f-b70a-82ce4d2afd19)](URL_HOME_IMAGE) | [![Exercises Page](https://github.com/user-attachments/assets/9ad3aaf2-891a-4946-a08b-b8890e6a5d44)](URL_EXERCISES_IMAGE) |







---

## 👨‍🎓 **Team**

| Name | Role |
|--------|-----|
| **Jesús Manuel García Lozano** | Developer |
| **Jairo Alexandro Saborito Franco** | Product Owner |
| **Rubén Martín Ruiz** | Scrum Master |
| **Fernando de la Torre Esperón** | Developer |

---

## 🛠 **Technologies**

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP with Laravel
- **Database:** MySQL + phpMyAdmin
- **Tools:** Figma, VS Code, Trello, Git/GitHub

---

## 📂 **Project Architecture**

```
YourGainz/
├── app/
│   ├── Http/
│   ├── Models/
│   ├── Controllers/
├── database/
│   ├── migrations/
│   ├── seeders/
├── resources/
│   ├── views/
│   ├── css/
│   ├── js/
├── routes/
│   ├── web.php
├── public/
├── config/
├── .env
├── composer.json
├── package.json
├── README.md
```

---

## ⚙️ **Installation & Setup**

### **Prerequisites**

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL
- Laravel 10+

### **Installation Steps**

1. Clone the repository:
   ```bash
   git clone https://github.com/YourGainz/yourgainz.git
   ```
2. Navigate to the project directory:
   ```bash
   cd yourgainz
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   ```
4. Configure the **.env** file:
   ```bash
   cp .env.example .env
   ```
5. Generate application key:
   ```bash
   php artisan key:generate
   ```
6. Set up the database in **.env** and run migrations:
   ```bash
   php artisan migrate --seed
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

---

## 📊 **Database**

The database includes the following tables:

- **users:** Personal data and settings for each user.
- **exercises:** List of exercises with details and animations.
- **routines:** Custom routines created by users.

---

## 🚀 **Future Improvements**

- **WebSockets implementation** for real-time interaction.
- **Integration with wearable device APIs** (such as Fitbit or Apple Health).
- **Achievements and trophy system** to enhance gamification.

---

## 🛡️ **License**

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

_YourGainz - The Digital Fitness Revolution_

