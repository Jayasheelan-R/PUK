# PUK — Simple PHP/HTML Website

This repository appears to be a small PHP/HTML website. I added a minimal project README and a safe `index.php` entrypoint so web servers and hosting services can find the site root.

The project currently contains (non-exhaustive):

- `home.php` — main homepage (existing)
- `about.html`, `services.php`, `profile.php`, `registerform.php`, etc. — other pages
- `puk 16 9/` — a folder with a space in its name; consider renaming to `puk-16-9` for portability.

## How to run locally (quick)

You can use PHP's built-in development server. From the repository root run:

```bash
# start PHP built-in server on port 8000
php -S localhost:8000
```

Then open http://localhost:8000/ in your browser. The newly added `index.php` will redirect to `home.php`.

