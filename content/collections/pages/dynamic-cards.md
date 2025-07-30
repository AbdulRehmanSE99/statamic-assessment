---
id: dynamic-cards-showcase
blueprint: page
title: 'Dynamic Cards Showcase'
author: 923c2109-ae4f-4bd5-9d40-4f287b04b4b2
template: dynamic-cards
updated_by: 923c2109-ae4f-4bd5-9d40-4f287b04b4b2
updated_at: 1753908905
date: '2025-07-30'
content:
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'Welcome to our Dynamic Cards Showcase! This page demonstrates the powerful content components available in our Bard field editor. Each component below showcases different capabilities for creating rich, interactive content.'
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'Below you can see various interactive components that can be added to any page using our Bard field editor.'
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '1- Accordion'
  -
    type: set
    attrs:
      id: brzy2NjK
      values:
        type: accordion
        title: 'Climate Monitoring Systems'
        content: 'Our advanced climate monitoring systems provide real-time data collection and analysis for optimal environmental control. These systems include temperature and humidity sensors, CO2 level monitoring, air quality assessment, and automated alerts and notifications.'
  -
    type: set
    attrs:
      id: mdqeg01s
      values:
        type: accordion
        title: 'Data Analytics & Reporting'
        content: 'Comprehensive data analytics and reporting tools to help you understand and optimize your climate control systems. Features include real-time data visualization, historical trend analysis, custom report generation, and performance optimization insights.'
        group: climate-systems-group
  -
    type: set
    attrs:
      id: mdqegzz1
      values:
        type: accordion
        title: 'Smart Automation'
        content: 'Intelligent automation systems that adapt to your specific climate requirements and optimize performance automatically. Includes AI-powered climate optimization, predictive maintenance alerts, energy efficiency automation, and remote control capabilities.'
        group: climate-systems-group
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '2- Quote'
  -
    type: set
    attrs:
      id: v0j8A5TU
      values:
        type: quote
        quote_text: 'The future of climate control lies in intelligent automation and real-time data analysis. Our systems provide the precision and reliability that modern facilities demand.'
        author: 'Dr. Sarah Johnson'
        source: 'Climate Control Specialist'
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '3- Card'
  -
    type: set
    attrs:
      id: 5FVkjypZ
      values:
        type: card
        title: 'Advanced Climate Control'
        content: 'Our climate control systems provide precise environmental management with real-time monitoring and automated optimization for optimal performance and energy efficiency.'
        image: blog/statamic.jpg
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '4- Testimonial'
  -
    type: set
    attrs:
      id: nkrtfOfX
      values:
        type: testimonial
        quote: 'Jouwklimaatkast.nl has revolutionized our climate control systems. The precision and reliability are unmatched, and the data analytics have helped us optimize our operations significantly.'
        author_name: 'Mark van der Berg'
        author_title: 'Facility Manager at GreenTech Industries'
        rating: 5
        author_image: blog/profile_avatar_placeholder_large.png
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '5- Reviews'
  -
    type: set
    attrs:
      id: XGAzid2e
      values:
        type: reviews
        product_name: 'Jouwklimaatkast.nl Climate Control System'
        rating: 5
        pros: 'Precise temperature control, Real-time monitoring, Energy efficient, User-friendly interface, Excellent customer support, Comprehensive data analytics'
        cons: 'Initial setup requires technical expertise, Higher upfront investment'
        summary: "Jouwklimaatkast.nl delivers exceptional climate control solutions with advanced automation and comprehensive monitoring capabilities. The system's precision and energy efficiency make it an excellent investment for facilities requiring optimal environmental control."
        product_image: blog/profile_avatar_placeholder_large.png
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '6- Single Image'
  -
    type: set
    attrs:
      id: mdqfgwsg
      values:
        type: single_image
        image: blog/1_fdwllyknogis7samhj7riq.png
        alt_text: 'Essential Web Development Tips for 2025'
        caption: 'Essential Web Development Tips for 2025'
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '7- Carousel'
  -
    type: set
    attrs:
      id: mdqfmobu
      values:
        type: carousel
        images:
          - blog/1_fdwllyknogis7samhj7riq.png
          - blog/1732767575542.png
          - blog/image.webp
          - blog/statamic.jpg
          - blog/unnamed.png
        autoplay: true
        interval: 5
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: paragraph
    attrs:
      textAlign: left
  -
    type: paragraph
    attrs:
      textAlign: left
    content:
      -
        type: text
        text: 'All these components are fully customizable and can be added to any page through the Statamic Control Panel using the Bard field editor.'
  -
    type: heading
    attrs:
      textAlign: left
      level: 2
    content:
      -
        type: text
        text: '8- Icon List'
  -
    type: set
    attrs:
      id: icon-list-demo
      values:
        type: icon_list
        title: 'Available Icons for This Project'
        items:
          -
            id: 8rEnMs0r
            icon: 'fas fa-home'
            text: 'Home Icon'
            description: 'Perfect for navigation and home pages'
          -
            id: mXHTc6Cn
            icon: 'fas fa-user'
            text: 'User Icon'
            description: 'Great for user profiles and account sections'
          -
            id: ajzWTRRj
            icon: 'fas fa-cog'
            text: 'Settings Icon'
            description: 'Ideal for configuration and settings pages'
          -
            id: VKcFhmhn
            icon: 'fas fa-search'
            text: 'Search Icon'
            description: 'Perfect for search functionality'
          -
            id: rBUx5PxZ
            icon: 'fas fa-envelope'
            text: 'Email Icon'
            description: 'Great for contact forms and email links'
          -
            id: iHspsIF3
            icon: 'fas fa-phone'
            text: 'Phone Icon'
            description: 'Ideal for contact information'
          -
            id: tITMBmFj
            icon: 'fas fa-map-marker-alt'
            text: 'Location Icon'
            description: 'Perfect for address and location information'
          -
            id: acLlV5Y6
            icon: 'fas fa-calendar'
            text: 'Calendar Icon'
            description: 'Great for events and scheduling'
          -
            id: 6quv51kG
            icon: 'fas fa-clock'
            text: 'Clock Icon'
            description: 'Ideal for time-related information'
          -
            id: aC67gGaV
            icon: 'fas fa-star'
            text: 'Star Icon'
            description: 'Perfect for ratings and favorites'
          -
            id: 5scMxd78
            icon: 'fas fa-heart'
            text: 'Heart Icon'
            description: 'Great for likes and favorites'
          -
            id: 7czIow2V
            icon: 'fas fa-thumbs-up'
            text: 'Thumbs Up Icon'
            description: 'Ideal for positive feedback'
          -
            id: e92YkHOy
            icon: 'fas fa-check'
            text: 'Check Icon'
            description: 'Perfect for completed tasks and confirmations'
          -
            id: 2a5VCEHN
            icon: 'fas fa-times'
            text: 'Times Icon'
            description: 'Great for close buttons and cancellations'
          -
            id: LpoEnYsz
            icon: 'fas fa-arrow-right'
            text: 'Arrow Right Icon'
            description: 'Ideal for navigation and next buttons'
          -
            id: FuhBLUhs
            icon: 'fas fa-arrow-left'
            text: 'Arrow Left Icon'
            description: 'Perfect for back navigation'
          -
            id: WyhRhtkW
            icon: 'fas fa-download'
            text: 'Download Icon'
            description: 'Great for file downloads'
          -
            id: Jke15XZM
            icon: 'fas fa-upload'
            text: 'Upload Icon'
            description: 'Ideal for file uploads'
          -
            id: Vm427eEO
            icon: 'fas fa-share'
            text: 'Share Icon'
            description: 'Perfect for social sharing'
          -
            id: Qk0a3pZ5
            icon: 'fas fa-print'
            text: 'Print Icon'
            description: 'Great for print functionality'
          -
            id: Q8MA7B1b
            icon: 'fas fa-save'
            text: 'Save Icon'
            description: 'Ideal for save actions'
          -
            id: ViXdH5BI
            icon: 'fas fa-edit'
            text: 'Edit Icon'
            description: 'Perfect for edit functionality'
          -
            id: aSvlV0nO
            icon: 'fas fa-trash'
            text: 'Delete Icon'
            description: 'Great for delete actions'
          -
            id: BiQi61a7
            icon: 'fas fa-plus'
            text: 'Plus Icon'
            description: 'Ideal for add actions'
          -
            id: 5DOCijYC
            icon: 'fas fa-minus'
            text: 'Minus Icon'
            description: 'Perfect for remove actions'
          -
            id: 2jIt2kAj
            icon: 'fas fa-info-circle'
            text: 'Info Icon'
            description: 'Great for information tooltips'
          -
            id: w6OMnvfL
            icon: 'fas fa-question-circle'
            text: 'Question Icon'
            description: 'Ideal for help sections'
          -
            id: S5C5dqfa
            icon: 'fas fa-exclamation-triangle'
            text: 'Warning Icon'
            description: 'Perfect for warning messages'
          -
            id: DUT9Wzyp
            icon: 'fas fa-exclamation-circle'
            text: 'Error Icon'
            description: 'Great for error messages'
          -
            id: nlmznMQG
            icon: 'fas fa-check-circle'
            text: 'Success Icon'
            description: 'Ideal for success messages'
          -
            id: dN6hbNlm
            icon: 'fas fa-lock'
            text: 'Lock Icon'
            description: 'Perfect for security features'
          -
            id: MQwrvRJt
            icon: 'fas fa-unlock'
            text: 'Unlock Icon'
            description: 'Great for authentication'
          -
            id: KYifzXML
            icon: 'fas fa-eye'
            text: 'Eye Icon'
            description: 'Ideal for view actions'
          -
            id: 5XW6mpdz
            icon: 'fas fa-eye-slash'
            text: 'Eye Slash Icon'
            description: 'Perfect for hide actions'
          -
            id: gmXW6lBS
            icon: 'fas fa-copy'
            text: 'Copy Icon'
            description: 'Great for copy functionality'
          -
            id: 6Vf5FSTn
            icon: 'fas fa-paste'
            text: 'Paste Icon'
            description: 'Ideal for paste actions'
          -
            id: 1nlgyMTI
            icon: 'fas fa-cut'
            text: 'Cut Icon'
            description: 'Perfect for cut actions'
          -
            id: 6bxgNH52
            icon: 'fas fa-undo'
            text: 'Undo Icon'
            description: 'Great for undo functionality'
          -
            id: 0ULBz5Xv
            icon: 'fas fa-redo'
            text: 'Redo Icon'
            description: 'Ideal for redo actions'
          -
            id: 2kNhRe4x
            icon: 'fas fa-sync'
            text: 'Sync Icon'
            description: 'Perfect for refresh and sync actions'
          -
            id: 1zjIsH4M
            icon: 'fas fa-wifi'
            text: 'WiFi Icon'
            description: 'Great for connectivity status'
          -
            id: TQscnxfI
            icon: 'fas fa-battery-full'
            text: 'Battery Icon'
            description: 'Ideal for device status'
          -
            id: teZAFRx0
            icon: 'fas fa-volume-up'
            text: 'Volume Icon'
            description: 'Perfect for audio controls'
          -
            id: WBU8OxFE
            icon: 'fas fa-music'
            text: 'Music Icon'
            description: 'Great for audio content'
          -
            id: EM6JRpvu
            icon: 'fas fa-video'
            text: 'Video Icon'
            description: 'Ideal for video content'
          -
            id: 7ZQFl3M3
            icon: 'fas fa-image'
            text: 'Image Icon'
            description: 'Perfect for image galleries'
          -
            id: Skm71jQ4
            icon: 'fas fa-file'
            text: 'File Icon'
            description: 'Great for document management'
          -
            id: EI4474xc
            icon: 'fas fa-folder'
            text: 'Folder Icon'
            description: 'Ideal for file organization'
          -
            id: mYG4Fws5
            icon: 'fas fa-database'
            text: 'Database Icon'
            description: 'Perfect for data management'
          -
            id: Y2w0okGC
            icon: 'fas fa-server'
            text: 'Server Icon'
            description: 'Great for hosting and infrastructure'
          -
            id: 0AtWaYGz
            icon: 'fas fa-cloud'
            text: 'Cloud Icon'
            description: 'Ideal for cloud services'
          -
            id: 9rYJj7gn
            icon: 'fas fa-mobile-alt'
            text: 'Mobile Icon'
            description: 'Perfect for mobile features'
          -
            id: YC88R4qO
            icon: 'fas fa-tablet-alt'
            text: 'Tablet Icon'
            description: 'Great for tablet features'
          -
            id: FBzTDfdm
            icon: 'fas fa-desktop'
            text: 'Desktop Icon'
            description: 'Ideal for desktop features'
          -
            id: 7TxhbCdb
            icon: 'fas fa-laptop'
            text: 'Laptop Icon'
            description: 'Perfect for laptop features'
          -
            id: JiHqXnGc
            icon: 'fas fa-tv'
            text: 'TV Icon'
            description: 'Great for media displays'
          -
            id: HNrMr7Cf
            icon: 'fas fa-gamepad'
            text: 'Gamepad Icon'
            description: 'Ideal for gaming features'
          -
            id: qA9oCAG7
            icon: 'fas fa-headphones'
            text: 'Headphones Icon'
            description: 'Perfect for audio features'
          -
            id: 3UsYZiyu
            icon: 'fas fa-microphone'
            text: 'Microphone Icon'
            description: 'Great for voice features'
          -
            id: jGsIPAAO
            icon: 'fas fa-camera'
            text: 'Camera Icon'
            description: 'Ideal for photo features'
          -
            id: jlP1ZCIz
            icon: 'fas fa-video-camera'
            text: 'Video Camera Icon'
            description: 'Perfect for video features'
          -
            id: ZWRF1Nj8
            icon: 'fas fa-bell'
            text: 'Bell Icon'
            description: 'Great for notifications'
          -
            id: TZYcML63
            icon: 'fas fa-bell-slash'
            text: 'Bell Slash Icon'
            description: 'Ideal for notification settings'
          -
            id: 4cJWeg7f
            icon: 'fas fa-comment'
            text: 'Comment Icon'
            description: 'Perfect for messaging'
          -
            id: 2CnVmUfy
            icon: 'fas fa-comments'
            text: 'Comments Icon'
            description: 'Great for discussions'
          -
            id: wX1A8nll
            icon: 'fas fa-reply'
            text: 'Reply Icon'
            description: 'Ideal for responses'
          -
            id: O01lBMcF
            icon: 'fas fa-forward'
            text: 'Forward Icon'
            description: 'Perfect for forwarding'
          -
            id: OSyZia6f
            icon: 'fas fa-share-alt'
            text: 'Share Alt Icon'
            description: 'Great for social sharing'
          -
            id: 4iUKvFXQ
            icon: 'fas fa-link'
            text: 'Link Icon'
            description: 'Ideal for hyperlinks'
          -
            id: kFbItgPO
            icon: 'fas fa-external-link-alt'
            text: 'External Link Icon'
            description: 'Perfect for external links'
          -
            id: 2dKXtXLP
            icon: 'fas fa-bookmark'
            text: 'Bookmark Icon'
            description: 'Great for saving content'
          -
            id: eL3hc8cA
            icon: 'fas fa-tag'
            text: 'Tag Icon'
            description: 'Ideal for categorization'
          -
            id: zJip5Dpw
            icon: 'fas fa-tags'
            text: 'Tags Icon'
            description: 'Perfect for multiple tags'
          -
            id: RQ23JxQL
            icon: 'fas fa-filter'
            text: 'Filter Icon'
            description: 'Great for filtering content'
          -
            id: YtWvP12Y
            icon: 'fas fa-sort'
            text: 'Sort Icon'
            description: 'Ideal for sorting options'
          -
            id: vrKOHpYk
            icon: 'fas fa-sort-up'
            text: 'Sort Up Icon'
            description: 'Perfect for ascending sort'
          -
            id: O6kw8DAL
            icon: 'fas fa-sort-down'
            text: 'Sort Down Icon'
            description: 'Great for descending sort'
          -
            id: 3oiE8RLC
            icon: 'fas fa-list'
            text: 'List Icon'
            description: 'Ideal for list views'
          -
            id: mgUiIGZ9
            icon: 'fas fa-th'
            text: 'Grid Icon'
            description: 'Perfect for grid views'
          -
            id: znJYlyuU
            icon: 'fas fa-columns'
            text: 'Columns Icon'
            description: 'Great for column layouts'
          -
            id: H57XaoSz
            icon: 'fas fa-table'
            text: 'Table Icon'
            description: 'Ideal for data tables'
          -
            id: MA8QjLTt
            icon: 'fas fa-chart-bar'
            text: 'Chart Bar Icon'
            description: 'Perfect for analytics'
          -
            id: njphCc7R
            icon: 'fas fa-chart-line'
            text: 'Chart Line Icon'
            description: 'Great for trends'
          -
            id: 4Yj6JPQA
            icon: 'fas fa-chart-pie'
            text: 'Chart Pie Icon'
            description: 'Ideal for statistics'
          -
            id: lGXFijJz
            icon: 'fas fa-chart-area'
            text: 'Chart Area Icon'
            description: 'Perfect for area charts'
          -
            id: VhE9GLPx
            icon: 'fas fa-tachometer-alt'
            text: 'Dashboard Icon'
            description: 'Great for dashboards'
          -
            id: y0Pqtf4r
            icon: 'fas fa-tools'
            text: 'Tools Icon'
            description: 'Ideal for utilities'
          -
            id: KzwkquE7
            icon: 'fas fa-wrench'
            text: 'Wrench Icon'
            description: 'Perfect for settings'
          -
            id: cVkPwbah
            icon: 'fas fa-screwdriver'
            text: 'Screwdriver Icon'
            description: 'Great for configuration'
          -
            id: Fph3PIn3
            icon: 'fas fa-hammer'
            text: 'Hammer Icon'
            description: 'Ideal for maintenance'
          -
            id: SObRwdEe
            icon: 'fas fa-magic'
            text: 'Magic Icon'
            description: 'Perfect for automation'
          -
            id: 7gnJQojH
            icon: 'fas fa-lightbulb'
            text: 'Lightbulb Icon'
            description: 'Great for ideas and features'
          -
            id: WzflixKX
            icon: 'fas fa-rocket'
            text: 'Rocket Icon'
            description: 'Ideal for launches and releases'
          -
            id: DDFhvEE3
            icon: 'fas fa-gem'
            text: 'Gem Icon'
            description: 'Perfect for premium features'
          -
            id: hFcHwqYV
            icon: 'fas fa-crown'
            text: 'Crown Icon'
            description: 'Great for premium content'
          -
            id: sRxIM1Dy
            icon: 'fas fa-trophy'
            text: 'Trophy Icon'
            description: 'Ideal for achievements'
          -
            id: GbTpmp0z
            icon: 'fas fa-medal'
            text: 'Medal Icon'
            description: 'Perfect for awards'
          -
            id: nbbV3Vuo
            icon: 'fas fa-award'
            text: 'Award Icon'
            description: 'Great for recognition'
          -
            id: zvbeD9nV
            icon: 'fas fa-certificate'
            text: 'Certificate Icon'
            description: 'Ideal for certifications'
          -
            id: qsuS3XP1
            icon: 'fas fa-graduation-cap'
            text: 'Graduation Cap Icon'
            description: 'Perfect for education'
          -
            id: ji76wXs9
            icon: 'fas fa-book'
            text: 'Book Icon'
            description: 'Great for documentation'
          -
            id: lxOWM3F4
            icon: 'fas fa-newspaper'
            text: 'Newspaper Icon'
            description: 'Ideal for articles'
          -
            id: qV5TlPSu
            icon: 'fas fa-blog'
            text: 'Blog Icon'
            description: 'Perfect for blog posts'
          -
            id: XGYHyU7w
            icon: 'fas fa-rss'
            text: 'RSS Icon'
            description: 'Great for feeds'
          -
            id: K4NWjUSK
            icon: 'fas fa-podcast'
            text: 'Podcast Icon'
            description: 'Ideal for audio content'
          -
            id: W8jPjnmS
            icon: 'fas fa-broadcast-tower'
            text: 'Broadcast Icon'
            description: 'Perfect for live content'
          -
            id: XJVwsqFf
            icon: 'fas fa-satellite-dish'
            text: 'Satellite Icon'
            description: 'Great for connectivity'
          -
            id: 6dKobV0W
            icon: 'fas fa-signal'
            text: 'Signal Icon'
            description: 'Ideal for status indicators'
          -
            id: 6MzjTTSc
            icon: 'fas fa-broadcast-tower'
            text: 'Broadcast Tower Icon'
            description: 'Perfect for broadcasting'
          -
            id: NkXnaVyR
            icon: 'fas fa-antenna'
            text: 'Antenna Icon'
            description: 'Great for reception'
          -
            id: aBGKIqKC
            icon: 'fas fa-satellite'
            text: 'Satellite Dish Icon'
            description: 'Ideal for satellite communication'
          -
            id: 2pnHfciF
            icon: 'fas fa-signal-1'
            text: 'Signal 1 Icon'
            description: 'Perfect for weak signals'
          -
            id: 67UWybx8
            icon: 'fas fa-signal-2'
            text: 'Signal 2 Icon'
            description: 'Great for medium signals'
          -
            id: 8IVwPJwa
            icon: 'fas fa-signal-3'
            text: 'Signal 3 Icon'
            description: 'Ideal for strong signals'
          -
            id: SApSoto4
            icon: 'fas fa-signal-4'
            text: 'Signal 4 Icon'
            description: 'Perfect for full signals'
          -
            id: KTLNMhRc
            icon: 'fas fa-signal-5'
            text: 'Signal 5 Icon'
            description: 'Great for maximum signals'
---
