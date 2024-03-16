function changeLanguage(language) {
    var translations = {
      'home': {
        'en': 'home',
        'sq': 'ballina'
      },
      'about': {
        'en': 'about',
        'sq': 'rreth nesh'
      },
      'services': {
        'en': 'services',
        'sq': 'shërbimet'
      },
      'projects': {
        'en': 'projects',
        'sq': 'projektet'
      },
      'contact': {
        'en': 'contact',
        'sq': 'kontakti'
      },
      'blogs': {
        'en': 'blogs',
        'sq': 'blogu'
      },
      'login form': {
        'en': 'login form',
        'sq': 'forma e hyrjes'
      },
      'enter your email': {
        'en': 'enter your email',
        'sq': 'vendos emailin tënd'
      },
      'enter your password': {
        'en': 'enter your password',
        'sq': 'vendos fjalëkalimin tënd'
      },
      'remember me': {
        'en': 'remember me',
        'sq': 'mbaj mend'
      },
      'forgot password?': {
        'en': 'forgot password?',
        'sq': 'harruat fjalëkalimin?'
      },
      'login now': {
        'en': 'login now',
        'sq': 'hyr tani'
      },
      "don't have an account": {
        'en': "don't have an account",
        'sq': 'nuk keni llogari'
      },
      'create one!': {
        'en': 'create one!',
        'sq': 'krijo një!'
      },
      'CEO': {
        'en': 'CEO',
        'sq': 'Zyrtar Ekzekutiv'
      },
      'phone number': {
        'en': 'phone number',
        'sq': 'numri i telefonit'
      },
      'email address': {
        'en': 'email address',
        'sq': 'adresa email'
      },
      'office address': {
        'en': 'office address',
        'sq': 'adresa e zyrës'
      },
      'years of experience': {
        'en': 'years of experience',
        'sq': 'vitet e përvojës'
      },
      'project completed': {
        'en': 'project completed',
        'sq': 'projekte të përfunduara'
      },
      'satisfied clients': {
        'en': 'satisfied clients',
        'sq': 'klientë të kënaqur'
      },
      'active workers': {
        'en': 'active workers',
        'sq': 'punëtorë aktivë'
      },
      'contact us': {
        'en': 'contact us',
        'sq': 'na kontaktoni'
    },
    'get in touch': {
        'en': 'get in touch',
        'sq': 'merrni kontakt'
    },
    'message': {
        'en': 'message',
        'sq': 'mesazhi'
    },
    'send message': {
        'en': 'send message',
        'sq': 'dërgo mesazhin'
    }
    };

    var elementsToTranslate = document.querySelectorAll('[data-translate]');

    elementsToTranslate.forEach(function(element) {
      var key = element.getAttribute('data-translate');
      if (translations[key]) {
        element.textContent = translations[key][language];
      }
    });
}
var elementsToTranslate = document.querySelectorAll('[data-translate]');

    elementsToTranslate.forEach(function(element) {
        var key = element.getAttribute('data-translate');
        if (translations[key]) {
            element.textContent = translations[key][language];
            // For input placeholders and button text, we handle them differently
            if (element.tagName === 'INPUT' && element.type === 'text') {
                element.setAttribute('placeholder', translations[key][language]);
            } else if (element.tagName === 'INPUT' && element.type === 'email') {
                element.setAttribute('placeholder', translations[key][language]);
            } else if (element.tagName === 'INPUT' && element.type === 'number') {
                element.setAttribute('placeholder', translations[key][language]);
            } else if (element.tagName === 'TEXTAREA') {
                element.setAttribute('placeholder', translations[key][language]);
            } else if (element.tagName === 'INPUT' && element.type === 'submit') {
                element.setAttribute('value', translations[key][language]);
            }
        }
    });
