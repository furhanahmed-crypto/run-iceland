// ---- Countdown to Aug 23, 2026, 00:00 local ----
var target = new Date("2026-08-23T00:00:00");
function updateCountdown() {
  var now = new Date();
  var diff = target - now;
  if (diff < 0) diff = 0;
  var d = Math.floor(diff / (1000 * 60 * 60 * 24));
  var h = Math.floor((diff / (1000 * 60 * 60)) % 24);
  var m = Math.floor((diff / (1000 * 60)) % 60);
  var s = Math.floor((diff / 1000) % 60);
  document.getElementById("cd-days").textContent = String(d).padStart(
    2,
    "0",
  );
  document.getElementById("cd-hours").textContent = String(h).padStart(
    2,
    "0",
  );
  document.getElementById("cd-mins").textContent = String(m).padStart(
    2,
    "0",
  );
  document.getElementById("cd-secs").textContent = String(s).padStart(
    2,
    "0",
  );
  var stickyEl = document.getElementById("sticky-count");
  if (stickyEl)
    stickyEl.textContent =
      d + " day" + (d === 1 ? "" : "s") + " left · 2 seats";
  var statDays = document.getElementById("stat-days");
  if (statDays) statDays.textContent = d;
  var gridDays = document.getElementById("days-left-cell");
  if (gridDays) gridDays.innerHTML = d + " DAYS<br>LEFT.";
}
updateCountdown();
setInterval(updateCountdown, 1000);

// ---- Form submit: opens a pre-filled email to Sai (no backend required) ----
// To switch to a hosted form service instead, replace this handler's body
// with a fetch() POST to your Formspree/Google Form endpoint.
document
  .getElementById("apply-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();
    var f = e.target;
    var data = {
      name: f.name.value,
      instagram: f.instagram.value,
      email: f.email.value,
      phone: f.phone.value,
      experience: f.experience.value,
      message: f.message.value,
    };
    var subject = encodeURIComponent(
      "Run Iceland application — " + data.name,
    );
    var body = encodeURIComponent(
      "Name: " +
        data.name +
        "\n" +
        "Instagram: " +
        data.instagram +
        "\n" +
        "Email: " +
        data.email +
        "\n" +
        "Phone: " +
        data.phone +
        "\n" +
        "Running background: " +
        data.experience +
        "\n" +
        "Message: " +
        data.message,
    );
    window.location.href =
      "mailto:sai@digicarotene.com?subject=" + subject + "&body=" + body;

    f.style.display = "none";
    document.getElementById("form-success").style.display = "block";
  });
