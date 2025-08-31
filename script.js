// tiny enhancement: keep the year current
document.getElementById('year').textContent = new Date().getFullYear();

// Read More functionality for destinations
document.querySelectorAll('.read-more-btn').forEach(function(btn) {
  btn.addEventListener('click', function() {
    var details = btn.closest('.destination').querySelector('.more-details');
    if (details.style.display === 'none' || details.style.display === '') {
      details.style.display = 'block';
      btn.textContent = 'Show Less';
    } else {
      details.style.display = 'none';
      btn.textContent = 'Read More';
    }
  });
});
