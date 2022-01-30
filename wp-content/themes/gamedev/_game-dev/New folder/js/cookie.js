if(!getCookie("HideModal")){
    document.querySelector('.cookies-wrapper').classList.add('active');
}
document.querySelector(".cookies-button-accept").addEventListener("click", function(){
    let date = new Date();
    date.setTime(date.getTime() + (1*60*1000));
    setCookie('HideModal', 'true', {secure: true, 'max-age': 3660} );
    document.querySelector('.cookies-wrapper').classList.remove('active');
})
function setCookie(name, value, options = {}) {

    options = {
      path: '/',
      ...options
    };
  
    if (options.expires instanceof Date) {
      options.expires = options.expires.toUTCString();
    }
  
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
  
    for (let optionKey in options) {
      updatedCookie += "; " + optionKey;
      let optionValue = options[optionKey];
      if (optionValue !== true) {
        updatedCookie += "=" + optionValue;
      }
    }
  
    document.cookie = updatedCookie;
  }
  function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }