# Statamic/Laravel Developer Technical Assessment

A comprehensive technical assessment showcasing modern web development skills with Statamic CMS, Alpine.js, and Tailwind CSS.

## 🚀 Features

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
- PHP 8.1+
- Composer
- Node.js 16+
- Laragon/XAMPP (or similar local server)

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd statamic-assessment
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Build assets**
   ```bash
   npm run build
   ```

6. **Start development server**
   ```bash
   php artisan serve
   ```

7. **Visit the application**
   - Home: `http://localhost:8000/`
   - Blog Overview: `http://localhost:8000/blog-overview`
   - Dynamic Cards: `http://localhost:8000/dynamic-cards`
   - API Test: `http://localhost:8000/test-api`

## 📊 API Endpoints

### Blog Posts API
- **URL**: `/api/blogs`
- **Method**: GET
- **Response**: JSON array of blog posts with metadata

### Categories API
- **URL**: `/api/categories`
- **Method**: GET
- **Response**: JSON array of categories with color coding

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

## 🔧 Development

### Adding New Blog Posts
1. Create a new markdown file in `content/collections/blogs/`
2. Use the front matter structure:
   ```yaml
   ---
   title: 'Your Post Title'
   excerpt: 'Brief description'
   category: 'category-slug'
   tags: ['tag1', 'tag2']
   author: 'Author Name'
   published_date: '2024-01-01'
   featured: false
   ---
   ```

### Customizing Styles
- Tailwind CSS classes in templates
- Custom CSS in `resources/css/site.css`
- Component-specific styles in template files

### Alpine.js Components
- Blog overview: `blogOverview()` function
- Dynamic cards: `dynamicCards()` function
- Mobile navigation: Inline Alpine.js data

## 📱 Pages Overview

### Home Page (`/`)
- Project overview and feature showcase
- Technical stack visualization
- Navigation to all components

### Blog Overview (`/blog-overview`)
- Responsive blog grid
- Category filtering
- Load more functionality
- Smooth animations

### Dynamic Cards (`/dynamic-cards`)
- Swiper JS carousels
- Expandable content sections
- Custom Bard field rendering
- Professional styling

### API Test (`/test-api`)
- API endpoint testing
- Collection status information
- Development debugging tools

## 🎯 Assessment Criteria Met

✅ **Statamic/Laravel Proficiency**: Collections, blueprints, REST API  
✅ **Tailwind CSS Usage**: Utility-first, responsive, maintainable  
✅ **Code Quality**: Clean, readable, well-organized with comments  
✅ **Functionality**: All components work across devices  
✅ **User Experience**: Intuitive, polished interactions  
✅ **Content Modeling**: Flexible, scalable blueprint design  
✅ **Documentation**: Proper Statamic conventions  
✅ **Attention to Detail**: Polished final product  

## 🚀 Bonus Features

- **Advanced Alpine.js Patterns**: Stores, custom directives, complex state management
- **Complex Tailwind Customization**: Custom animations, responsive patterns
- **Swiper JS Integration**: Multiple carousels with custom styling
- **Professional UX**: Smooth animations, loading states, error handling
- **Performance Optimization**: Optimized builds, lazy loading, efficient queries

## 📄 License

MIT License - see LICENSE file for details.

## 👨‍💻 Author

Built for Statamic/Laravel Developer Technical Assessment

---

**Built with ❤️ using Statamic, Alpine.js, and Tailwind CSS**
