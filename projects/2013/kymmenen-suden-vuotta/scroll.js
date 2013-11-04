// Get the year markers
var yearAnchors = Array.prototype.slice.call(document.querySelectorAll('a[name]'));
var yearNavs = Array.prototype.slice.call(document.querySelectorAll('nav li a'));
var nav = document.querySelector('nav');

yearAnchors.reverse();
window.addEventListener('scroll', function () {
  var current = null;
  for (var i = 0; i < yearAnchors.length; i++) {
    if (yearAnchors[i].offsetTop <= window.pageYOffset) {
      current = yearAnchors[i];
      break;
    }
  }
  if (current) {
    nav.className = 'shown';
  } else {
    nav.className = '';
  }

  for (i = 0; i < yearNavs.length; i++) {
    yearNavs[i].className = '';
    if (!current) {
      continue;
    }
    if (yearNavs[i].getAttribute('href') === '#' + current.getAttribute('name')) {
      yearNavs[i].className = 'current';
    }
  }
}, false);
