<footer id="footer">
    <h3>Girolamo</h3>
    <p>A evolução da decoração de interiores</p>
    <p><span>Entre em contato:</span> oi@girolamo.com.br</p>
    <p><span>Ou pelo telefone:</span> +55(21)99990-9999</p>
  </footer>
</body>
<script>
var modal = document.getElementById("myModal");

var btn = document.getElementById("orc");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
<?php wp_footer(); ?>
</html>