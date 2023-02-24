// Reload CAPTCHA
document.getElementById('reload-captcha').addEventListener('click', function() {
    var captchaImage = document.getElementById('captcha-image');
    captchaImage.src = 'captcha.php?' + new Date().getTime();
  });
  
  // Validate CAPTCHA
  document.querySelector('form').addEventListener('submit', function(e) {
    var captcha = document.getElementById('captcha').value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        var response = JSON.parse(this.responseText);
        if (!response.valid) {
          e.preventDefault();
          alert('Invalid CAPTCHA!');
        }
      }
    };
    xhr.open('POST', 'captcha-validate.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('captcha=' + captcha);
  });
  