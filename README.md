# Run Iceland

Landing page for Justin’s Iceland run (Aug 22–28, 2026). **2 seats left of 20.**

## Run locally

Needs PHP (built-in server is enough):

```bash
php -S localhost:8000
```

Open [http://localhost:8000](http://localhost:8000).

## Structure

| Path | Role |
|------|------|
| `index.php` | Page shell — `require`s includes + sections |
| `includes/` | Shared pieces (head, nav, footer, sticky CTA) |
| `sections/` | Page sections in scroll order |
| `assets/css/styles.css` | All CSS (`:root` design tokens) |
| `assets/js/main.js` | Countdown + apply form |

Docs: `agents.md` (AI/dev context), `design.md` (visual system).

## Edit flow

1. Change copy/markup in the matching `sections/*.php` or `includes/*.php`.
2. Change look in `assets/css/styles.css`.
3. Change countdown/form behavior in `assets/js/main.js`.
4. Wire new sections in `index.php` with `require`.

## Notes

- Form opens a pre-filled `mailto:` to the contact address (no backend).
- Photo slots are placeholders (`ph-label`) until real assets are dropped in.
- Source mock: `run-iceland-landing.html` (keep for reference; live page is PHP).
