// Generated by CoffeeScript 1.10.0
$(function() {
  var data;
  data = {
    'r': 'counter/index',
    'ua': navigator.userAgent || '',
    'href': window.location.href || '',
    'sw': window.screen.width || '',
    'sh': window.screen.height || '',
    'referer': document.referrer || ''
  };
  return $.ajax('http://localhost/indexAjax.php', {
    data: data,
    dataType: 'jsonp',
    async: false
  });
});