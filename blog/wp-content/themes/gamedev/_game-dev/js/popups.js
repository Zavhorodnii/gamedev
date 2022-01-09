/* POPUP White Paper */

const popupLinks = document.querySelectorAll('.popup-link');
const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock-padding");

let unlock = true;

const timeout= 800;

if (popupLinks.length > 0) {
  for (let index = 0; index < popupLinks.length; index++) {
    const popupLink = popupLinks[index];
    popupLink.addEventListener("click", function (e) {
      const popupName = popupLink.getAttribute('href').replace('#', '');
      const curentPopup = document.getElementById(popupName);
      popupOpen(curentPopup);
      e.preventDefault();
    });
  }
}

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
  for (let index = 0; index < popupCloseIcon.length; index++) {
    const el = popupCloseIcon[index];
    el.addEventListener('click', function (e) {
      popupClose(el.closest('.popup'));
      e.preventDefault();
    });
  }
}

function popupOpen(curentPopup) {
  if (curentPopup && unlock) {
    const popupActive = document.querySelector('.popup.openpop');
    if (popupActive) {
      popupClose(popupActive, false);
    } else {
      bodyLock();
    }
    curentPopup.classList.add('openpop');
    curentPopup.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content')) {
        popupClose(e.target.closest('.popup'));
      }
    });
  }
}

function popupClose(popupActive, doUnlock = true) {
  if (unlock) {
    popupActive.classList.remove('openpop');
    if (doUnlock) {
      bodyUnLock();
    }
  }
}

function bodyLock() {
  body.classList.add('lock');

  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}

function bodyUnLock () {
  unlock = false;
  setTimeout(function () {
    unlock = true;
  }, timeout);
}

/* End POPUP White Paper */



/* POPUP Allocation */

const popupLinksAll = document.querySelectorAll('.popup-link');
const bodyAll = document.querySelector('bodyAll');
const lockPaddingAll = document.querySelectorAll(".lock-padding");

let unlockAll = true;

const timeoutAll = 800;

if (popupLinksAll.length > 0) {
  for (let index = 0; index < popupLinksAll.length; index++) {
    const popupLinkAll = popupLinksAll[index];
    popupLinkAll.addEventListener("click", function (e) {
      const popupNameAll = popupLinkAll.getAttribute('href').replace('#', '');
      const curentPopupAll = document.getElementById(popupNameAll);
      popupOpenAll(curentPopupAll);
      e.preventDefault();
    });
  }
}

const popupCloseIconAll = document.querySelectorAll('.close-popup');
if (popupCloseIconAll.length > 0) {
  for (let index = 0; index < popupCloseIconAll.length; index++) {
    const el = popupCloseIconAll[index];
    el.addEventListener('click', function (e) {
      popupCloseAll(el.closest('.popup-all'));
      e.preventDefault();
    });
  }
}

function popupOpenAll(curentPopupAll) {
  if (curentPopupAll && unlockAll) {
    const popupActiveAll = document.querySelector('.popup-all.open-all');
    if (popupActiveAll) {
      popupCloseAll(popupActiveAll, false);
    } else {
      bodyLockAll();
    }
    curentPopupAll.classList.add('open-all');
    curentPopupAll.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-all')) {
        popupCloseAll(e.target.closest('.popup-all'));
      }
    });
  }
}

function popupCloseAll(popupActiveAll, doUnlockAll = true) {
  if (unlockAll) {
    popupActiveAll.classList.remove('open-all');
    if (doUnlockAll) {
      bodyUnLockAll();
    }
  }
}

function bodyLockAll() {
  body.classList.add('lock');

  unlockAll = false;
  setTimeout(function () {
    unlockAll = true;
  }, timeoutAll);
}

function bodyUnLockAll () {
  unlockAll = false;
  setTimeout(function () {
    unlockAll = true;
  }, timeoutAll);
}

/* End POPUP Allocation */




/* POPUP Airdrop */

const popupLinksAir = document.querySelectorAll('.popup-link');
const bodyAir = document.querySelector('body');
const lockPaddingAir = document.querySelectorAll(".lock-padding");

let unlockAir = true;

const timeoutAir= 800;

if (popupLinksAir.length > 0) {
  for (let index = 0; index < popupLinksAir.length; index++) {
    const popupLinkAir = popupLinksAir[index];
    popupLinkAir.addEventListener("click", function (e) {
      const popupNameAir = popupLinkAir.getAttribute('href').replace('#', '');
      const curentPopupAir = document.getElementById(popupNameAir);
      popupOpenAir(curentPopupAir);
      e.preventDefault();
    });
  }
}

const popupCloseIconAir = document.querySelectorAll('.close-popup');
if (popupCloseIconAir.length > 0) {
  for (let index = 0; index < popupCloseIconAir.length; index++) {
    const el = popupCloseIconAir[index];
    el.addEventListener('click', function (e) {
      popupCloseAir(el.closest('.popup-air'));
      e.preventDefault();
    });
  }
}

function popupOpenAir(curentPopupAir) {
  if (curentPopupAir && unlockAir) {
    const popupActiveAir = document.querySelector('.popup-air.open-air');
    if (popupActiveAir) {
      popupCloseAir(popupActiveAir, false);
    } else {
      bodyLockAir();
    }
    curentPopupAir.classList.add('open-air');
    curentPopupAir.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-air')) {
        popupCloseAir(e.target.closest('.popup-air'));
      }
    });
  }
}

function popupCloseAir(popupActiveAir, doUnlockAir = true) {
  if (unlockAir) {
    popupActiveAir.classList.remove('open-air');
    if (doUnlockAir) {
      bodyUnLockAir();
    }
  }
}

function bodyLockAir() {
  body.classList.add('lock');

  unlockAir = false;
  setTimeout(function () {
    unlockAir = true;
  }, timeoutAir);
}

function bodyUnLockAir () {
  unlockAir = false;
  setTimeout(function () {
    unlockAir = true;
  }, timeoutAir);
}

/* End POPUP Airdrop */




/* POPUP Private sales */

const popupLinksSale = document.querySelectorAll('.popup-link');
const bodySale = document.querySelector('body');
const lockPaddingSale = document.querySelectorAll(".lock-padding");

let unlockSale = true;

const timeoutSale= 800;

if (popupLinksSale.length > 0) {
  for (let index = 0; index < popupLinksSale.length; index++) {
    const popupLinkSale = popupLinksSale[index];
    popupLinkSale.addEventListener("click", function (e) {
      const popupNameSale = popupLinkSale.getAttribute('href').replace('#', '');
      const curentPopupSale = document.getElementById(popupNameSale);
      popupOpenSale(curentPopupSale);
      e.preventDefault();
    });
  }
}

const popupCloseIconSale = document.querySelectorAll('.close-popup');
if (popupCloseIconSale.length > 0) {
  for (let index = 0; index < popupCloseIconSale.length; index++) {
    const el = popupCloseIconSale[index];
    el.addEventListener('click', function (e) {
      popupCloseSale(el.closest('.popup-sale'));
      e.preventDefault();
    });
  }
}

function popupOpenSale(curentPopupSale) {
  if (curentPopupSale && unlockSale) {
    const popupActiveSale = document.querySelector('.popup-sale.open-sale');
    if (popupActiveSale) {
      popupCloseSale(popupActiveSale, false);
    } else {
      bodyLockSale();
    }
    curentPopupSale.classList.add('open-sale');
    curentPopupSale.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-sale')) {
        popupCloseSale(e.target.closest('.popup-sale'));
      }
    });
  }
}

function popupCloseSale(popupActiveSale, doUnlockSale = true) {
  if (unlockSale) {
    popupActiveSale.classList.remove('open-sale');
    if (doUnlockSale) {
      bodyUnLockSale();
    }
  }
}

function bodyLockSale() {
  body.classList.add('lock');

  unlockSale = false;
  setTimeout(function () {
    unlockSale = true;
  }, timeoutSale);
}

function bodyUnLockSale () {
  unlockSale = false;
  setTimeout(function () {
    unlockSale = true;
  }, timeoutSale);
}

/* End POPUP Private sales */




/* POPUP Ecosystem Fund */

const popupLinksEco = document.querySelectorAll('.popup-link');
const bodyEco = document.querySelector('body');
const lockPaddingEco = document.querySelectorAll(".lock-padding");

let unlockEco = true;

const timeoutEco = 800;

if (popupLinksEco.length > 0) {
  for (let index = 0; index < popupLinksEco.length; index++) {
    const popupLinkEco = popupLinksEco[index];
    popupLinkEco.addEventListener("click", function (e) {
      const popupNameEco = popupLinkEco.getAttribute('href').replace('#', '');
      const curentPopupEco = document.getElementById(popupNameEco);
      popupOpenEco(curentPopupEco);
      e.preventDefault();
    });
  }
}

const popupCloseIconEco = document.querySelectorAll('.close-popup');
if (popupCloseIconEco.length > 0) {
  for (let index = 0; index < popupCloseIconEco.length; index++) {
    const el = popupCloseIconEco[index];
    el.addEventListener('click', function (e) {
      popupCloseEco(el.closest('.popup-eco'));
      e.preventDefault();
    });
  }
}

function popupOpenEco(curentPopupEco) {
  if (curentPopupEco && unlockEco) {
    const popupActiveEco = document.querySelector('.popup-eco.open-eco');
    if (popupActiveEco) {
      popupCloseEco(popupActiveEco, false);
    } else {
      bodyLockEco();
    }
    curentPopupEco.classList.add('open-eco');
    curentPopupEco.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-eco')) {
        popupCloseEco(e.target.closest('.popup-eco'));
      }
    });
  }
}

function popupCloseEco(popupActiveEco, doUnlockEco = true) {
  if (unlockEco) {
    popupActiveEco.classList.remove('open-eco');
    if (doUnlockEco) {
      bodyUnLockEco();
    }
  }
}

function bodyLockEco() {
  body.classList.add('lock');

  unlockEco = false;
  setTimeout(function () {
    unlockEco = true;
  }, timeoutEco);
}

function bodyUnLockEco () {
  unlockEco = false;
  setTimeout(function () {
    unlockEco = true;
  }, timeoutEco);
}

/* End POPUP Ecosystem Fund */




/* POPUP RFJ use cases */

const popupLinksRFJ = document.querySelectorAll('.popup-link');
const bodyRFJ = document.querySelector('body');
const lockPaddingRFJ = document.querySelectorAll(".lock-padding");

let unlockRFJ = true;

const timeoutRFJ = 800;

if (popupLinksRFJ.length > 0) {
  for (let index = 0; index < popupLinksRFJ.length; index++) {
    const popupLinkRFJ = popupLinksRFJ[index];
    popupLinkRFJ.addEventListener("click", function (e) {
      const popupNameRFJ = popupLinkRFJ.getAttribute('href').replace('#', '');
      const curentPopupRFJ = document.getElementById(popupNameRFJ);
      popupOpenRFJ(curentPopupRFJ);
      e.preventDefault();
    });
  }
}

const popupCloseIconRFJ = document.querySelectorAll('.close-popup');
if (popupCloseIconRFJ.length > 0) {
  for (let index = 0; index < popupCloseIconRFJ.length; index++) {
    const el = popupCloseIconRFJ[index];
    el.addEventListener('click', function (e) {
      popupCloseRFJ(el.closest('.popup-rfj'));
      e.preventDefault();
    });
  }
}

function popupOpenRFJ(curentPopupRFJ) {
  if (curentPopupRFJ && unlockRFJ) {
    const popupActiveRFJ = document.querySelector('.popup-rfj.open-rfj');
    if (popupActiveRFJ) {
      popupCloseRFJ(popupActiveRFJ, false);
    } else {
      bodyLockRFJ();
    }
    curentPopupRFJ.classList.add('open-rfj');
    curentPopupRFJ.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-rfj')) {
        popupCloseRFJ(e.target.closest('.popup-rfj'));
      }
    });
  }
}

function popupCloseRFJ(popupActiveRFJ, doUnlockRFJ = true) {
  if (unlockRFJ) {
    popupActiveRFJ.classList.remove('open-rfj');
    if (doUnlockRFJ) {
      bodyUnLockRFJ();
    }
  }
}

function bodyLockRFJ() {
  body.classList.add('lock');

  unlockRFJ = false;
  setTimeout(function () {
    unlockRFJ = true;
  }, timeoutRFJ);
}

function bodyUnLockRFJ () {
  unlockRFJ = false;
  setTimeout(function () {
    unlockRFJ = true;
  }, timeoutRFJ);
}

/* End POPUP RFJ use cases */




/* POPUP Smart-contract and wallet addresses */

const popupLinksSmart = document.querySelectorAll('.popup-link');
const bodySmart = document.querySelector('body');
const lockPaddingSmart = document.querySelectorAll(".lock-padding");

let unlockSmart = true;

const timeoutSmart = 800;

if (popupLinksSmart.length > 0) {
  for (let index = 0; index < popupLinksSmart.length; index++) {
    const popupLinkSmart = popupLinksSmart[index];
    popupLinkSmart.addEventListener("click", function (e) {
      const popupNameSmart = popupLinkSmart.getAttribute('href').replace('#', '');
      const curentPopupSmart = document.getElementById(popupNameSmart);
      popupOpenSmart(curentPopupSmart);
      e.preventDefault();
    });
  }
}

const popupCloseIconSmart = document.querySelectorAll('.close-popup');
if (popupCloseIconSmart.length > 0) {
  for (let index = 0; index < popupCloseIconSmart.length; index++) {
    const el = popupCloseIconSmart[index];
    el.addEventListener('click', function (e) {
      popupCloseSmart(el.closest('.popup-smart'));
      e.preventDefault();
    });
  }
}

function popupOpenSmart(curentPopupSmart) {
  if (curentPopupSmart && unlockSmart) {
    const popupActiveSmart = document.querySelector('.popup-smart.open-smart');
    if (popupActiveSmart) {
      popupCloseSmart(popupActiveSmart, false);
    } else {
      bodyLockSmart();
    }
    curentPopupSmart.classList.add('open-smart');
    curentPopupSmart.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-smart')) {
        popupCloseSmart(e.target.closest('.popup-smart'));
      }
    });
  }
}

function popupCloseSmart(popupActiveSmart, doUnlockSmart = true) {
  if (unlockSmart) {
    popupActiveSmart.classList.remove('open-smart');
    if (doUnlockSmart) {
      bodyUnLockSmart();
    }
  }
}

function bodyLockSmart() {
  body.classList.add('lock');

  unlockSmart = false;
  setTimeout(function () {
    unlockSmart = true;
  }, timeoutSmart);
}

function bodyUnLockSmart () {
  unlockSmart = false;
  setTimeout(function () {
    unlockSmart = true;
  }, timeoutSmart);
}

/* End POPUP Smart-contract and wallet addresses */




/* POPUP RFJ turnover scheme */

const popupLinksGraf = document.querySelectorAll('.popup-link');
const bodyGraf = document.querySelector('body');
const lockPaddingGraf = document.querySelectorAll(".lock-padding");

let unlockGraf = true;

const timeoutGraf = 800;

if (popupLinksGraf.length > 0) {
  for (let index = 0; index < popupLinksGraf.length; index++) {
    const popupLinkGraf = popupLinksGraf[index];
    popupLinkGraf.addEventListener("click", function (e) {
      const popupNameGraf = popupLinkGraf.getAttribute('href').replace('#', '');
      const curentPopupGraf = document.getElementById(popupNameGraf);
      popupOpenGraf(curentPopupGraf);
      e.preventDefault();
    });
  }
}

const popupCloseIconGraf = document.querySelectorAll('.close-popup');
if (popupCloseIconGraf.length > 0) {
  for (let index = 0; index < popupCloseIconGraf.length; index++) {
    const el = popupCloseIconGraf[index];
    el.addEventListener('click', function (e) {
      popupCloseGraf(el.closest('.popup-graf'));
      e.preventDefault();
    });
  }
}

function popupOpenGraf(curentPopupGraf) {
  if (curentPopupGraf && unlockGraf) {
    const popupActiveGraf = document.querySelector('.popup-graf.open-graf');
    if (popupActiveGraf) {
      popupCloseGraf(popupActiveGraf, false);
    } else {
      bodyLockGraf();
    }
    curentPopupGraf.classList.add('open-graf');
    curentPopupGraf.addEventListener("click", function (e) {
      if (!e.target.closest('.popup__content-graf')) {
        popupCloseGraf(e.target.closest('.popup-graf'));
      }
    });
  }
}

function popupCloseGraf(popupActiveGraf, doUnlockGraf = true) {
  if (unlockGraf) {
    popupActiveGraf.classList.remove('open-graf');
    if (doUnlockGraf) {
      bodyUnLockGraf();
    }
  }
}

function bodyLockGraf() {
  body.classList.add('lock');

  unlockGraf = false;
  setTimeout(function () {
    unlockGraf = true;
  }, timeoutGraf);
}

function bodyUnLockGraf () {
  unlockGraf = false;
  setTimeout(function () {
    unlockGraf = true;
  }, timeoutGraf);
}

/* End POPUP RFJ turnover scheme */