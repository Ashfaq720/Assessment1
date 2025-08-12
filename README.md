Content-First Laravel Blog

A simple, content-first blog starter built with Laravel + Blade.This repo focuses on readable content, easy editing, and SEO-friendly templates so writers and developers can collaborate quickly.

🔎 What makes this project different?

Content-first approach: templates prioritize readable HTML output (semantic tags, meta description hooks, and simple markup) so content is crawlable and easy to edit.

Minimal and extendable templates: Blade files are intentionally small and component-friendly (partials for header/footer).

SEO & social-ready: meta tags and open graph-ready placeholders included via Blade stacks.

Editor-friendly: assume posts are stored as HTML or Markdown converted to HTML — easy for CMS integration later.

📂 Project layout (relevant parts)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======

# Assessment1

--
└── views/
├── layouts/
│ └── app.blade.php # master layout with meta stacks
├── partials/
│ ├── header.blade.php
│ └── footer.blade.php
└── views/
├── categories.blade.php
└── profile.blade.php
└── contact.blade.php
└── login.blade.php
└── home.blade.php
└── register.blade.php
└── single-blog.blade.php

--
routes/
└── web.php

---

## ✍️ Content model suggestion

A minimal `posts` table:

- `id` (int)
- `title` (string)
- `slug` (string, unique)
- `body` (text — store sanitized HTML or markdown)
- `image` (string, nullable)
- `author` (string)
- `published_at` (datetime, nullable)
- timestamps

Tip: If you store Markdown, use a Markdown-to-HTML converter in the model accessor.

---

## 🚀 Quick Start

1. Clone & install
   ```bash
   git clone https://github.com/your-username/your-repo.git
   cd your-repo
   composer install
