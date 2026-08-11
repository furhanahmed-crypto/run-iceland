# Agents

Context for AI agents working on this repo.

## What this is

Single landing page for **Run Iceland w/ Justin** (Aug 22–28, 2026). Trip caps at **20** runners; **2 seats left**. Goal: get applications via the form (`#apply`).

## Stack

Plain PHP + one CSS file + one JS file. No framework, no build step.

## Layout

```
index.php              → requires includes + sections in order
includes/              → head, nav, footer, sticky-cta
sections/              → hero, grid, countdown, about, trip, urgency, proof, signup
assets/css/styles.css  → all styles (:root tokens first)
assets/js/main.js      → countdown + form mailto submit
```

## Rules

1. Keep it simple — HTML partials, `require` them from `index.php`.
2. Put new page blocks in `sections/`; shared chrome in `includes/`.
3. Styles only in `assets/css/styles.css`. Use existing `:root` tokens.
4. Scripts only in `assets/js/main.js`.
5. Do not reintroduce a monolithic HTML file.
6. Copy tone stays casual/raw (Justin’s voice), not agency brochure.
7. Urgency numbers (2 of 20, Aug dates) must stay consistent across sections.
8. Read `design.md` before visual changes; read `README.md` for run/deploy.

## Touch points

| Change | Where |
|--------|--------|
| Headline / CTA copy | `sections/hero.php`, sticky in `includes/sticky-cta.php` |
| Seat count / dates | Multiple sections + countdown target in `main.js` |
| Itinerary / inclusions | `sections/trip.php` |
| Form fields / success | `sections/signup.php` + `main.js` |
| Colors / type | `:root` and base rules in `styles.css` |
