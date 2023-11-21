document.addEventListener('DOMContentLoaded', function () {
    const leesMeerBtn = document.getElementById('leesMeerBtn');
    const verminderBtn = document.getElementById('verminderBtn');
    const volledigeTekst = document.getElementById('volledigeTekst');
  
    leesMeerBtn.addEventListener('click', function (event) {
      event.preventDefault();
      volledigeTekst.classList.toggle('toonVolledig');
      leesMeerBtn.classList.toggle('hidden');
      verminderBtn.classList.toggle('hidden');
    });
  
    verminderBtn.addEventListener('click', function (event) {
      event.preventDefault();
      volledigeTekst.classList.toggle('toonVolledig');
      leesMeerBtn.classList.toggle('hidden');
      verminderBtn.classList.toggle('hidden');
    });
  });
  