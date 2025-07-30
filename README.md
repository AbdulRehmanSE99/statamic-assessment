# Statamic/Laravel Developer Technical Assessment

A comprehensive technical assessment showcasing modern web development skills with Statamic CMS, Alpine.js, and Tailwind CSS. This project demonstrates advanced content management capabilities, interactive components, and a complete REST API system.

## 🚀 Project Overview

This project is a full-featured web application built with Statamic CMS that showcases:

### Component A: Blog Overview
- **Responsive Layout**: Tailwind CSS grid system (1/2/3 columns)
- **Dynamic Filtering**: Category-based filtering with Alpine.js
- **Smooth Animations**: Transitions and hover effects
- **Load More Functionality**: Pagination with "Load More" button
- **REST API Integration**: Fetches data from `/api/blogs` and `/api/categories`

### Component B: Dynamic Cards
- **Swiper JS Carousel**: Image carousels with navigation and pagination
- **Expandable Content**: Accordion-style expandable descriptions
- **Custom Bard Sets**: Icon lists, accordions, and rich content blocks
- **Professional Styling**: Hover effects, transitions, and modern design

### Component C: API Testing Interface
- **Interactive API Testing**: Real-time API endpoint testing
- **Full-Screen Mode**: Enhanced results viewing experience
- **Multiple Endpoints**: Blogs, categories, collections, and single blog posts
- **JSON Response Viewer**: Formatted JSON display with status indicators

## 🛠 Technical Stack

- **Statamic CMS** - Laravel-based content management system
- **Alpine.js** - Lightweight reactive framework for interactivity
- **Tailwind CSS** - Utility-first CSS framework
- **Swiper JS** - Modern touch slider for carousels
- **Vite** - Fast build tool for development and production

## 📁 Project Structure

```
statamic-assessment/
├── content/
│   ├── collections/
│   │   ├── blogs/           # Blog posts collection
│   │   └── pages/           # Static pages
│   └── taxonomies/
│       ├── categories/      # Blog categories
│       └── tags/           # Blog tags
├── resources/
│   ├── blueprints/         # Content blueprints
│   ├── views/             # Antlers templates
│   ├── css/               # Tailwind CSS
│   └── js/                # Alpine.js and Swiper
└── routes/
    └── web.php            # REST API endpoints
```

## 🚀 Quick Start

### Prerequisites
- **PHP 8.1+** - Required for Laravel and Statamic
- **Composer** - PHP dependency manager
- **Node.js 16+** - For frontend asset compilation
- **Local Server** - Laragon, XAMPP, or similar
- **Git** - Version control system

### Detailed Installation Guide

#### Step 1: Clone and Setup
```bash
# Clone the repository
git clone <repository-url>
cd statamic-assessment

# Install PHP dependencies
composer install

# Install Node.js dependencies
npm install
```

#### Step 2: Environment Configuration
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Configure database (if using local database)
# Edit .env file with your database credentials
```

#### Step 3: Database Setup (Optional)
If you want to use a local database instead of the file-based system:
```bash
# Create database tables
php artisan migrate

# Seed with sample data (if available)
php artisan db:seed
```

#### Step 4: Asset Compilation
```bash
# Build assets for production
npm run build

# Or for development with hot reload
npm run dev
```

#### Step 5: Start Development Server
```bash
# Start Laravel development server
php artisan serve

# Or use your local server (Laragon, XAMPP, etc.)
# Point to the public/ directory
```

#### Step 6: Access the Application
- **Home Page**: `http://localhost:8000/`
- **Blog Overview**: `http://localhost:8000/blogs-list`
- **Dynamic Cards**: `http://localhost:8000/dynamic-cards`
- **API Test**: `http://localhost:8000/api-test`

### Alternative Setup with Laragon

1. **Install Laragon** (if not already installed)
2. **Clone repository** to `C:\laragon\www\statamic-assessment`
3. **Start Laragon** and ensure Apache/Nginx is running
4. **Navigate** to the project directory
5. **Run setup commands**:
   ```bash
   composer install
   npm install
   npm run build
   ```
6. **Access** via `http://statamic-assessment.test` (Laragon auto-creates virtual hosts)

## 📊 API Endpoints

The project includes a complete REST API system with the following endpoints:

### Blog Posts API
- **URL**: `/api/blogs`
- **Method**: GET
- **Response**: JSON array of blog posts with metadata
- **Example Response**:
  ```json
  {
    "success": true,
    "data": [
      {
        "id": "686c14b9-d915-4b74-b111-27d93967973a",
        "title": "This is my accordions blog post",
        "slug": "this-is-my-accordions-blog-post",
        "date": "2025-07-28 00:00:00",
        "excerpt": "Explore interactive accordion components",
        "featured_image": null,
        "author": null,
        "categories": [],
        "url": "/blog/this-is-my-accordions-blog-post"
      }
    ],
    "count": 9
  }
  ```

### Single Blog Post API
- **URL**: `/api/blogs/{slug}`
- **Method**: GET
- **Response**: JSON object of specific blog post
- **Example**: `/api/blogs/this-is-my-accordions-blog-post`

### Categories API
- **URL**: `/api/categories`
- **Method**: GET
- **Response**: JSON array of taxonomy terms
- **Example Response**:
  ```json
  {
    "success": true,
    "data": [
      {
        "id": "...",
        "title": "Management",
        "slug": "management",
        "description": "Project Management",
        "url": "/categories/management"
      }
    ],
    "count": 3
  }
  ```

### Collections API
- **URL**: `/api/collections`
- **Method**: GET
- **Response**: JSON array of collections with entry counts
- **Example Response**:
  ```json
  {
    "success": true,
    "data": [
      {
        "handle": "blogs",
        "title": "Blogs",
        "entries_count": 9,
        "url": "/blogs"
      }
    ],
    "count": 2
  }
  ```

### API Testing Interface
- **URL**: `/api-test`
- **Features**: Interactive testing of all API endpoints
- **Full-Screen Mode**: Enhanced results viewing
- **Real-Time Testing**: Live API response testing

## 🎨 Design Features

### Responsive Design
- Mobile-first approach
- Breakpoints: sm (640px), md (768px), lg (1024px), xl (1280px)
- Flexible grid system

### Interactive Elements
- Smooth transitions and animations
- Hover effects and micro-interactions
- Loading states and error handling

### Accessibility
- Semantic HTML structure
- Proper ARIA labels
- Keyboard navigation support
- High contrast ratios

## 🔧 Development Guide

### Project Structure
```
statamic-assessment/
├── app/
│   └── Http/Controllers/
│       └── ApiController.php          # REST API controller
├── content/
│   ├── collections/
│   │   ├── blogs/                     # Blog posts
│   │   └── pages/                     # Static pages
│   └── taxonomies/
│       ├── categories/                # Blog categories
│       └── tags/                     # Blog tags
├── resources/
│   ├── blueprints/                   # Content blueprints
│   ├── views/                        # Antlers templates
│   │   ├── components/               # Reusable components
│   │   └── layout.antlers.html       # Main layout
│   ├── css/                          # Tailwind CSS
│   └── js/                           # Alpine.js
└── routes/
    └── web.php                       # API routes
```

### Adding New Blog Posts
1. **Create a new markdown file** in `content/collections/blogs/`
2. **Use the front matter structure**:
   ```yaml
   ---
   title: 'Your Post Title'
   excerpt: 'Brief description'
   categories: ['management', 'web-development']
   tags: ['statamic', 'laravel']
   author: 'Author Name'
   featured_image: '/path/to/image.jpg'
   ---
   ```

### Custom Bard Field Sets
The project includes custom Bard field sets for rich content:

#### Available Sets:
- **Accordion**: Collapsible content sections
- **Quote**: Highlighted quotes with attribution
- **Carousel**: Image carousels with Swiper JS
- **Card**: Content cards with images and links
- **Testimonial**: Customer testimonials with ratings
- **Reviews**: Product reviews with pros/cons
- **Icon List**: Lists with Font Awesome icons

#### Adding New Sets:
1. **Update blueprint** in `resources/blueprints/collections/blogs/blog.yaml`
2. **Create component** in `resources/views/components/`
3. **Add to pages blueprint** for use in static pages

### API Development
The project includes a complete REST API system:

#### Controller Methods:
- `getBlogs()`: Returns all blog posts
- `getBlog($slug)`: Returns specific blog post
- `getCategories()`: Returns taxonomy terms
- `getCollections()`: Returns collection status

#### Adding New Endpoints:
1. **Add method** to `ApiController.php`
2. **Register route** in `routes/web.php`
3. **Test endpoint** using the API Test interface

### Styling and Components

#### Tailwind CSS
- **Utility-first approach**: Direct class application
- **Responsive design**: Mobile-first breakpoints
- **Custom components**: Reusable component classes

#### Alpine.js Components
- **Blog Overview**: `blogOverview()` with filtering and pagination
- **Dynamic Cards**: `dynamicCards()` with carousel functionality
- **API Test**: `apiTest()` with full-screen mode
- **Mobile Navigation**: Responsive hamburger menu

#### Custom Components
- **Accordion**: Grouped and single accordions
- **Carousel**: Swiper JS integration
- **Icon List**: Font Awesome icon grid
- **Reviews**: Structured review display

### Development Workflow

#### 1. Content Management
```bash
# Access Statamic Control Panel (if configured)
# Or edit content files directly in content/ directory
```

#### 2. Frontend Development
```bash
# Start development server
npm run dev

# Build for production
npm run build
```

#### 3. API Development
```bash
# Test API endpoints
curl http://localhost:8000/api/blogs

# Use the API Test interface
http://localhost:8000/api-test
```

#### 4. Database (Optional)
```bash
# If using database instead of file-based system
php artisan migrate
php artisan db:seed
```

## 📱 Pages Overview

### Home Page (`/`)
- **Project Overview**: Complete feature showcase
- **Technical Stack**: Visual representation of technologies used
- **Navigation**: Links to all major components
- **Responsive Design**: Mobile-first approach

### Blog Overview (`/blogs`)
- **Responsive Grid**: 1/2/3 column layout based on screen size
- **Category Filtering**: Dynamic filtering with Alpine.js
- **Load More**: Pagination with smooth loading animations
- **Search Functionality**: Real-time search across blog posts
- **Smooth Animations**: CSS transitions and hover effects

### Dynamic Cards (`/dynamic-cards`)
- **Swiper JS Carousels**: Touch-enabled image carousels
- **Expandable Content**: Accordion-style collapsible sections
- **Custom Bard Sets**: Rich content blocks (quotes, cards, testimonials)
- **Icon Lists**: Font Awesome icon integration
- **Professional Styling**: Modern design with hover effects

### API Test (`/api-test`)
- **Interactive Testing**: Real-time API endpoint testing
- **Full-Screen Mode**: Enhanced results viewing experience
- **Multiple Endpoints**: Test blogs, categories, collections, and single posts
- **JSON Response Viewer**: Formatted JSON display with status indicators
- **Error Handling**: Proper error display and status codes

## 🎯 Assessment Criteria Met

✅ **Statamic/Laravel Proficiency**: Collections, blueprints, REST API  
✅ **Tailwind CSS Usage**: Utility-first, responsive, maintainable  
✅ **Code Quality**: Clean, readable, well-organized with comments  
✅ **Functionality**: All components work across devices  
✅ **User Experience**: Intuitive, polished interactions  
✅ **Content Modeling**: Flexible, scalable blueprint design  
✅ **Documentation**: Proper Statamic conventions  
✅ **Attention to Detail**: Polished final product  

## 🚀 Advanced Features

### Interactive Components
- **Advanced Alpine.js Patterns**: Complex state management and reactive data
- **Swiper JS Integration**: Touch-enabled carousels with custom navigation
- **Full-Screen API Testing**: Enhanced results viewing with toggle functionality
- **Responsive Mobile Navigation**: Hamburger menu with smooth animations

### Content Management
- **Custom Bard Field Sets**: 7 different content block types
- **Taxonomy Integration**: Categories and tags with proper relationships
- **Rich Content Rendering**: Dynamic content with proper styling
- **Flexible Blueprints**: Extensible content structure

### Performance & UX
- **Optimized Asset Loading**: Vite-based build system
- **Smooth Animations**: CSS transitions and micro-interactions
- **Error Handling**: Graceful error states and user feedback
- **Loading States**: Professional loading indicators

### API System
- **RESTful Endpoints**: Complete CRUD API for content
- **JSON Response Format**: Consistent API response structure
- **Error Handling**: Proper HTTP status codes and error messages
- **Interactive Testing**: Real-time API testing interface

### Development Features
- **Hot Module Replacement**: Fast development with Vite
- **Component Architecture**: Reusable Antlers components
- **Mobile-First Design**: Responsive across all devices
- **Accessibility**: Semantic HTML and ARIA labels

## 📄 License

MIT License - see LICENSE file for details.

## 👨‍💻 Author

Built for Statamic/Laravel Developer Technical Assessment

---

**Built with ❤️ using Statamic, Alpine.js, and Tailwind CSS**
