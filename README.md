# Seque Infratech Inc. — WordPress Theme

A modern, high-performance, modular WordPress theme engineered for **Seque Infratech Inc.**, a certified Women-Owned Small Business (WOSB) and DLA-approved fuel and infrastructure solutions provider (CAGE Code: `8LH32`).

Designed for direct deployment via **WP Pusher** from a Git repository directly into WordPress without any build steps or manual zip uploads.

---

## 🚀 Key Features

- **Direct WP Pusher Ready**: All theme files (`style.css`, `functions.php`, templates, assets) reside directly at the root of the repository, enabling seamless automatic synchronization into `wp-content/themes/seque-infratech/`.
- **Zero Build Dependencies**: Pure HTML5, modular PHP, vanilla CSS with custom properties, and lightweight vanilla JavaScript. No Node build pipeline or Webpack required in production.
- **Micro-Animations & Visual Design**:
  - Smooth glassmorphic sticky header with scroll detection.
  - Interactive SVG logistics corridor blueprint with animated radar pulses.
  - Animated stat counters with dynamic unit detection (`+`, `%`, `M+`).
  - Interactive real-time capabilities category filter bar (6 fuel/oil divisions).
  - Pre-filled Request for Quotation (RFQ) inquiry handling via URL parameters (`?product=...`).
  - Interactive vector radar map of Buffalo, NY headquarters (`42.8864° N, 78.8784° W`).
- **WordPress Standards**:
  - Semantic HTML5 markup and accessibility.
  - `wp_head()` and `wp_footer()` integration.
  - Automatic `title-tag` and `post-thumbnails` support.
  - Custom logo support via WordPress Customizer (`Appearance > Customize > Site Identity`) with fallback to `Logo-light.png`.
  - Dynamic navigation menus (`primary` and `footer`) with zero-configuration fallback.
  - Fully translatable string domain (`seque-infratech`).

---

## 📁 Repository Structure

```
d:/SEQue/
├── 404.php                 # Branded 404 error page
├── footer.php              # Corporate 4-column footer, credentials & wp_footer()
├── front-page.php          # Homepage template (blueprint hero, radar, stats, previews)
├── functions.php           # Theme setup, assets enqueue, menus, and helpers
├── header.php              # Global header, logo, nav & mobile toggle
├── index.php               # Main blog/archive fallback loop
├── page.php                # Generic default page template
├── page-about.php          # About Us page template (journey timeline, leadership, events)
├── page-capabilities.php   # Capabilities template (live product filters & RFQ triggers)
├── page-contact.php        # Contact template (vector HQ radar map & smart RFQ form)
├── page-logistics.php      # Logistics & Network template (7 delivery modes & corridors)
├── style.css               # Theme definition header + core design system & animations
├── screenshot.png          # 1200x900 theme preview for WordPress Admin
├── Logo-light.png          # Default corporate brand logo asset
├── template-parts/
│   ├── client-row.php      # Reusable client trust wordmark strip
│   └── cta-band.php        # Reusable customizable call-to-action banner
├── js/
│   └── main.js             # Observers, counters, radar pulses, filters & smart form
└── css/
    └── style.css           # Static preview stylesheet reference
```

---

## ⚙️ WP Pusher Setup Instructions

1. Push this Git repository to your Git provider (GitHub, GitLab, Bitbucket, etc.).
2. In your WordPress Admin Dashboard, navigate to **WP Pusher** > **Install Theme**.
3. Select your repository:
   - **Repository Type**: e.g., GitHub
   - **Repository Name**: `your-username/seque-infratech` (or your repository slug)
   - **Repository Branch**: `main` (or `master`)
   - **Push-to-Deploy**: Enable if you want automatic deployments whenever you push to Git.
4. Click **Install Theme**.
5. Once installed, navigate to **Appearance** > **Themes** and click **Activate** on **Seque Infratech**.

---

## 🛠️ WordPress Page Configuration

To set up the primary pages in WordPress:

1. **Homepage**:
   - Go to **Pages** > **Add New**.
   - Name it `Home`.
   - Go to **Settings** > **Reading** > Select **A static page** and set **Homepage** to `Home`.
2. **About Us**:
   - Go to **Pages** > **Add New**.
   - Title: `About Us`, Slug: `about`.
   - In Page Attributes / Template, select **About Us** (`page-about.php`).
3. **Capabilities**:
   - Go to **Pages** > **Add New**.
   - Title: `Capabilities`, Slug: `capabilities`.
   - In Page Attributes / Template, select **Capabilities** (`page-capabilities.php`).
4. **Logistics & Network**:
   - Go to **Pages** > **Add New**.
   - Title: `Logistics & Network`, Slug: `logistics`.
   - In Page Attributes / Template, select **Logistics & Network** (`page-logistics.php`).
5. **Contact Us**:
   - Go to **Pages** > **Add New**.
   - Title: `Contact Us`, Slug: `contact`.
   - In Page Attributes / Template, select **Contact Us** (`page-contact.php`).

---

## 🧭 Navigation Menus

1. Go to **Appearance** > **Menus**.
2. Create a menu named `Main Menu` and assign it to the **Primary Menu** display location.
   - Add links to: *Home*, *About*, *Capabilities*, *Logistics & Network*, *Contact Us*.
3. *(Optional)* Create a `Footer Menu` and assign it to the **Footer Menu** display location.
4. If no custom menu is assigned, the theme automatically renders a semantic fallback menu matching the official site layout.

---

## 🏷️ Theme Metadata

- **Theme Name**: Seque Infratech
- **Theme URI**: https://www.sequeinfratech.com/
- **Author**: Seque Infratech Inc.
- **Author URI**: https://www.sequeinfratech.com/
- **Version**: 1.0.0
- **Requires at least**: 6.0
- **Tested up to**: 6.5
- **Requires PHP**: 7.4
- **License**: GNU General Public License v2 or later
- **Text Domain**: seque-infratech
