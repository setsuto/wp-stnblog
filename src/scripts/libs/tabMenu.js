'use strict';

{

  var tabLabels = document.querySelectorAll('.tab__label li a');
  var tabContents = document.querySelectorAll('.tab__content');

  // forEach for-of
  tabLabels.forEach(function (clickedLabel) {
    clickedLabel.addEventListener('click', function (e) {
      e.preventDefault();

      tabLabels.forEach(function (label) {
        label.classList.remove('active');
      });

      clickedLabel.classList.add('active');

      tabContents.forEach(function (content) {
        content.classList.remove('active');
      });

      document.getElementById(clickedLabel.dataset.id).classList.add('active');
    });
  });

}
