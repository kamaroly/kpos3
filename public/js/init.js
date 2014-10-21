;(function initAutoUpgrade () {

  // Prevent click-jacking
  try {
    if (window == window.top || window.chrome && chrome.app && chrome.app.window) {
      document.documentElement.style.display = 'block';
    } else {
      top.location = self.location;
    }
  } catch (e) {console.error('CJ protection', e)};


})();


