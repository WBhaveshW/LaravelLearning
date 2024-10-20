<link href="../css/app.css" rel="stylesheet">
<script src="../js/app.js" defer></script>
<script>
  function closeAlert(button) {
    // Find the parent alert element and remove it
    const alert = button.closest('#alert');
    if (alert) {
      alert.style.display = 'none';
    }
  }
</script>

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>