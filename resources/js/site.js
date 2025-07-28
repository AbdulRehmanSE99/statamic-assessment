import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'
import Swiper from 'swiper'
import { Navigation, Pagination } from 'swiper/modules'
import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'

// Initialize Alpine.js
Alpine.plugin(focus)
Alpine.start()

// Initialize Swiper globally
window.Swiper = Swiper
window.SwiperModules = { Navigation, Pagination }

// This is all you.
