# How to Install and Activate the SunRise PMC WordPress Theme on MilesWeb

This guide explains how to upload and activate the custom WordPress theme created from your code directly onto your WordPress site hosted on MilesWeb.

---

## 1. Where the Theme Files Are Located

Inside your project:
- **Theme Folder**: [`d:\sunrise\WordPress\sunrise-theme`](file:///d:/sunrise/WordPress/sunrise-theme)
- **Installable ZIP Package**: [`d:\sunrise\WordPress\sunrise-theme.zip`](file:///d:/sunrise/WordPress/sunrise-theme.zip)

---

## 2. Method A: Upload via WordPress Admin Dashboard (Easiest)

> **Note**: Because the ZIP contains all high-resolution images, videos, and animations (~218 MB), your MilesWeb PHP upload limit should be at least 256 MB or higher. If it errors with "File exceeds upload_max_filesize", use **Method B** below.

1. Log in to your WordPress Admin dashboard (`https://yourdomain.com/wp-admin`).
2. In the left sidebar, navigate to **Appearance** → **Themes**.
3. Click the **Add New Theme** button at the top, then click **Upload Theme**.
4. Click **Choose File** and select `d:\sunrise\WordPress\sunrise-theme.zip`.
5. Click **Install Now**.
6. Once uploaded, click **Activate**.

---

## 3. Method B: Upload via MilesWeb cPanel File Manager (Recommended & Fastest for large files)

1. Log into your **MilesWeb Client Area** or **cPanel** (`https://yourdomain.com:2083`).
2. Under the **Files** section, click on **File Manager**.
3. In File Manager, navigate to:
   ```text
   public_html / wp-content / themes /
   ```
4. Click **Upload** from the top toolbar.
5. Select and upload the file: [`d:\sunrise\WordPress\sunrise-theme.zip`](file:///d:/sunrise/WordPress/sunrise-theme.zip).
6. Once the upload finishes (shows 100% green bar), go back to `public_html/wp-content/themes/`.
7. Right-click on `sunrise-theme.zip` and select **Extract** (extract into `public_html/wp-content/themes/`).
8. You will now see the folder `sunrise-theme`.
9. (Optional) Delete the `sunrise-theme.zip` file from the server to save disk space.
10. Log in to your WordPress admin dashboard (`wp-admin`), go to **Appearance** → **Themes**, and click **Activate** under **SunRise PMC**.

---

## 4. Final Setup in WordPress (Takes 2 Minutes)

After activating the theme:

### Step 1: Create the Pages
Go to **Pages** → **Add New Page** and create these 5 pages:
1. **Home**
2. **About** (Under Page Attributes on the right panel, select Template: `About Us Template`)
3. **Services** (Select Template: `Services Template`)
4. **Projects** (Select Template: `Projects Template`)
5. **Contact** (Select Template: `Contact Template`)

### Step 2: Set Home as Front Page
1. Go to **Settings** → **Reading**.
2. Select **A static page**.
3. Set **Homepage** to **Home**.
4. Click **Save Changes**.

### Step 3: Permalinks
1. Go to **Settings** → **Permalinks**.
2. Choose **Post name** (`/%postname%/`).
3. Click **Save Changes**.

---

Your custom site with all GSAP animations, Lenis smooth scrolling, styles, and luxury aesthetics is now running natively on WordPress on MilesWeb!
