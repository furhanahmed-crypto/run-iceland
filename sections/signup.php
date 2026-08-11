<!-- ============ SIGNUP FORM ============ -->
<section class="section signup" id="apply">
  <div class="wrap">
    <div class="signup-grid">
      <div class="signup-copy">
        <div class="eyebrow">Last Step</div>
        <h2>Tell him you're in.</h2>
        <p>
          Fill this out and he follows up directly — DM or email — within a
          few hours to confirm the seat and send deposit details. First two
          confirmed replies get the spots. That's it.
        </p>
        <div class="mini-stat">
          <span>⏱ Leaves Aug 23</span>
          <span>·</span>
          <span>2 seats left</span>
        </div>
      </div>

      <div>
        <form id="apply-form">
          <div class="field-row">
            <div class="field">
              <label for="name">Full name</label>
              <input
                type="text"
                id="name"
                name="name"
                required
                placeholder="Jane Doe"
              />
            </div>
            <div class="field">
              <label for="ig">Instagram handle</label>
              <input
                type="text"
                id="ig"
                name="instagram"
                placeholder="@yourhandle"
              />
            </div>
          </div>
          <div class="field-row">
            <div class="field">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                required
                placeholder="you@email.com"
              />
            </div>
            <div class="field">
              <label for="phone">Phone (for fast replies)</label>
              <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="+1 555 000 0000"
              />
            </div>
          </div>
          <div class="field">
            <label for="experience">Running background</label>
            <select id="experience" name="experience">
              <option>Casual runner</option>
              <option>Regular trail/road runner</option>
              <option>Race/ultra experience</option>
            </select>
          </div>
          <div class="field">
            <label for="message">Why you want in (optional)</label>
            <textarea
              id="message"
              name="message"
              rows="3"
              placeholder="A line or two is plenty"
            ></textarea>
          </div>
          <button type="submit" class="btn">
            Submit &amp; Claim My Spot
          </button>
          <p class="form-note">
            Deposit link sent after he confirms your seat. No payment
            collected here.
          </p>
        </form>

        <div id="form-success">
          <h3>You're on the list.</h3>
          <p>
            He'll follow up by email/DM within a few hours. If it's urgent,
            message @justin.truee directly on Instagram.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
