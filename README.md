# Professional PHP Portfolio - Jagan Mohan Lingam

A production-quality, responsive portfolio website converted from a Next.js/React design into pure PHP, fully optimized to run locally on XAMPP without any build tools, node modules, or external installation steps.

## Project Structure

```text
portfolio/
├── index.php
├── about.php
├── skills.php
├── projects.php
├── certificates.php
├── contact.php
├── includes/
│   ├── header.php
│   ├── navbar.php
│   └── footer.php
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   ├── images/
│   └── icons/
├── downloads/
│   └── Resume.pdf
├── config/
│   └── config.php
└── README.md
```

## Technologies Used

- **PHP 8+** (Modular templating & configuration)
- **HTML5 & CSS3** (Modern responsive layouts, Glassmorphism, CSS animations)
- **Bootstrap 5** (Grid system & UI components)
- **Font Awesome 6** (Icons)
- **Vanilla JavaScript** (Typing effects, scroll animations, theme toggler, interactive counters)

## How to Run on XAMPP

1. Ensure **XAMPP** is installed on your Windows machine.
2. Copy the entire `portfolio` folder into your XAMPP `htdocs` directory:
   ```text
   C:\xampp\htdocs\portfolio
   ```
3. Open the **XAMPP Control Panel** and start **Apache**.
4. Open your web browser and navigate to:
   ```text
   http://localhost/portfolio
   ```

## Future Improvements

- Integrate an SMTP mailer library (like PHPMailer) for live contact form submissions.
- Add dynamic blog or article posting capabilities powered by MySQL.
