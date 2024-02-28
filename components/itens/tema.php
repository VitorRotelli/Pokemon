<link rel="stylesheet" href="../css/tema.css">

<div class="toggleWrapper">
  <input type="checkbox" class="dn" id="dn" />
  <label for="dn" class="toggle">
    <span class="toggle__handler">
      <span class="crater crater--1"></span>
      <span class="crater crater--2"></span>
      <span class="crater crater--3"></span>
    </span>
    <span class="star star--1"></span>
    <span class="star star--2"></span>
    <span class="star star--3"></span>
    <span class="star star--4"></span>
    <span class="star star--5"></span>
    <span class="star star--6"></span>
  </label>
</div>

<script>
  const toggle = document.getElementById("dn");
  const body = document.body;

  const storedTheme = localStorage.getItem("theme");
  if (storedTheme) {
    body.classList.add(storedTheme);
    toggle.checked = storedTheme === "dark";
  }

  toggle.addEventListener("change", function () {
    if (toggle.checked) {
      body.classList.add("dark");
      localStorage.setItem("theme", "dark");    
    } else {
      body.classList.remove("dark");
      localStorage.setItem("theme", "light");   
    }
  });
</script>
