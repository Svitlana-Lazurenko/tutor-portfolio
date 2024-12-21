# Tutoring Course

WordPress theme for advertising training courses.

- The first 4 sections, a mobile menu and a modal window have been developed.
- The ACF PRO plugin has been used.
- Implemented adaptive, cross-browser, accessible, SEO-adapted markup. Sass preprocessor and BEM methodology used.

<figure>
  <img src="screenshots/hero.png" alt="Section Hero. Screenshot">
  <figcaption style="text-align: center">Section "Hero"</figcaption>
</figure>

&nbsp;

<figure>
  <img src="screenshots/about.png" alt="Section About. Screenshot">
  <figcaption style="text-align: center">Section "About"</figcaption>
</figure>

&nbsp;

<figure>
  <img src="screenshots/advantages.png" alt="Section Advantages. Screenshot">
  <figcaption style="text-align: center">Section "Advantages"</figcaption>
</figure>

&nbsp;

<figure>
  <img src="screenshots/reviews.png" alt="Section Reviews. Screenshot">
  <figcaption style="text-align: center">Section "Reviews"</figcaption>
</figure>

&nbsp;

<figure>
  <img src="screenshots/modal.png" alt="Modal window. Screenshot">
  <figcaption style="text-align: center">Modal window</figcaption>
</figure>

&nbsp;

<figure>
  <img src="screenshots/mobile-menu.png" alt="Mobile menu. Screenshot">
  <figcaption style="text-align: center">Mobile menu</figcaption>
</figure>

## Installation and usage:

- Download the theme in zip format.
- In the administrative part of website, go to "Appearance" -> "Themes" -> "Add new theme" -> "Upload theme". Choose the archive and upload it. Activate theme.
- Install and activate the ACF PRO plugin. This can be done through "Admin Menu" -> "Plugins" -> "Add New Plugin". You can also download the plugin from the official website of this plugin.
- Go to "Admin Menu" -> "ACF" -> "Tools" -> "Import", select the "acf-pro.json" file from the "plugins-settings" folder and install settings of ACF PRO by clicking the "Import JSON" button. Note: The "plugins-settings" folder is located directly in the theme folder.
- Create a page, choosing the "Home Page" template. After creating a page using the template "Home Page" make it the homepage. To do this, in "Settings" -> "Reading" -> "Your homepage displays" choose "A static page". In "Homepage" choose a page that was created using the "Home Page" template.
- Create menus in "Appearance" -> "Menus" ("Header Menu" and "Mobile Menu"). Both menus should have the following items: "Про курс" (Custom Link "#top"), "Переваги" (Custom Link "#about"), "Шлях до знань" (Custom Link "#path"), "Відгуки" (Custom Link "#reviews").

Done!

## Commands:

- npm install - installs npm-dependencies into the project.
- npm run build - launches Gulp.
