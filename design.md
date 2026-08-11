# Design

Visual system for the Run Iceland landing page.

## Direction

Raw trail-run energy, not a polished travel brochure. Dark nav over a full-bleed photo hero, then a warm paper-light page. Copy and layout should feel like Justin’s grid (fog, stamps, short captions), not a dashboard.

## Tokens (`:root` in `assets/css/styles.css`)

| Token | Use |
|-------|-----|
| `--bg` / `--bg-alt` | Page paper / alt surfaces |
| `--ink` / `--ink-soft` | Body text |
| `--rust` | Primary CTA / accents |
| `--amber` | Eyebrow dots / highlights |
| `--black` / `--navy` | Dark bands (hero, grid, countdown) |
| `--white` / `--muted` | Text on dark |
| `--success` | Checks / form success |
| `--line` / `--line-lt` | Borders on dark / light |

## Type

- **Archivo Black** — display headlines, stamps
- **Inter** — body, buttons
- **JetBrains Mono** — eyebrows, facts, countdown labels

## Layout rules

1. Hero is one full-bleed composition: brand, one headline, short support, CTAs, facts row — no cards on the hero.
2. One job per section (grid proof, about, trip, urgency, proof, apply).
3. Prefer existing patterns (`.wrap`, `.section`, `.eyebrow`, `.btn`, `.stamp`) over new one-offs.
4. Mobile: nav links hide under ~760px; grids collapse to one column as already defined.

## Motion

Keep it light: button hover lift, smooth scroll, live countdown. No decorative animation noise.

## Content constraints

- Seat scarcity (**2 / 20**) and dates (**Aug 22–28**) must match everywhere.
- Placeholders stay until real photos/DMs/copy replace them — don’t invent stock polish.
