document.addEventListener('DOMContentLoaded', function () {
    var emailAddress = document.getElementById('emailAddress');
    var emailCopyLink = document.querySelector('.helpLink');
    var copiedText = document.getElementById('copiedText');
  
    emailCopyLink.addEventListener('click', function () {
      var email = emailAddress.textContent.trim();
      navigator.clipboard.writeText(email).then(function () {
        copiedText.style.display = 'inline';
        setTimeout(function () {
          copiedText.style.display = 'none';
        }, 2000);
      }).catch(function (error) {
        console.error('Error copying text: ', error);
      });
    });
  });
  