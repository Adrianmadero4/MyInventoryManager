document.addEventListener('DOMContentLoaded', function () {
    var faqItems = document.querySelectorAll('.faq-item');
  
    faqItems.forEach(function (item) {
      var question = item.querySelector('.faq-question');
      var answer = item.querySelector('.faq-answer');
  
      question.addEventListener('click', function () {
        item.classList.toggle('active');
        var symbol = question.querySelector('.toggle-symbol');
        if (item.classList.contains('active')) {
          symbol.textContent = '-';
        } else {
          symbol.textContent = '+';
        }
      });
    });
  });
  