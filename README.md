# Lone Star Solutions - Laravel Application

This is a Laravel conversion of the Lone Star Solutions website, offering electrical, plumbing, and roofing services across Texas.

## Features

- **Home Page**: Hero section, service cards, reviews, statistics, and call-to-action
- **Service Pages**: Dedicated pages for Electrical, Plumbing, and Roofing services
- **Quote Form**: Contact form with file upload support for photos/videos
- **About Page**: Company story, values, and credentials
- **Contact Page**: Contact form and emergency contact information
- **Responsive Design**: Mobile-friendly layout with modern UI

## Installation

1. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

2. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Configure Database**
   Edit `.env` file and set your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=lonestar
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Run Migrations** (if you add database features later)
   ```bash
   php artisan migrate
   ```

5. **Start Development Server**
   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`

## Project Structure

```
ishs/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php
├── public/
│   ├── css/
│   │   └── app.css
│   └── js/
│       ├── image-loader.js
│       ├── main.js
│       └── upload.js
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── pages/
│           ├── home.blade.php
│           ├── electrical.blade.php
│           ├── plumbing.blade.php
│           ├── roofing.blade.php
│           ├── quote.blade.php
│           ├── about.blade.php
│           ├── contact.blade.php
│           └── partials/
│               └── quote-form.blade.php
└── routes/
    └── web.php
```

## Routes

- `/` - Home page
- `/electrical` - Electrical services page
- `/plumbing` - Plumbing services page
- `/roofing` - Roofing services page
- `/quote` - Quote request page
- `/about` - About us page
- `/contact` - Contact page

## Form Submissions

The quote and contact forms are set up with routes but need backend implementation:

- `POST /quote/submit` - Quote form submission
- `POST /contact/submit` - Contact form submission

You can add email notifications, database storage, or integrate with third-party services in the `PageController` methods.

## Assets

- **CSS**: `public/css/app.css` - All styles extracted from the original HTML
- **JavaScript**: 
  - `public/js/image-loader.js` - Image loading functionality
  - `public/js/main.js` - Main JavaScript (reviews, navigation, FAQ, etc.)
  - `public/js/upload.js` - File upload handling

## Notes

- The original HTML used a single-page application approach with JavaScript to show/hide sections. This Laravel version uses separate routes and pages for better SEO and maintainability.
- Image paths in the HTML used `data-img` attributes. You'll need to add actual images to `public/images/` and update the image paths or implement the image loader functionality.
- Form submissions currently redirect with success messages. You can enhance these to send emails, store in database, or integrate with CRM systems.

## Next Steps

1. Add actual images to `public/images/` directory
2. Implement email notifications for form submissions
3. Add database models for storing quotes/contacts (optional)
4. Set up email configuration in `.env`
5. Add validation rules for forms
6. Implement file upload handling and storage

## License

MIT License
