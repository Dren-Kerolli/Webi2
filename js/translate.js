function changeLanguage(language) {
    // Lista e tekstesh në të dy gjuhët
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
      }
      

    };

    // Përcakto cilën tekst duhet të ndryshohet në bazë të gjuhës së zgjedhur
    var elementsToTranslate = document.querySelectorAll('[data-translate]');

    elementsToTranslate.forEach(function(element) {
      var key = element.getAttribute('data-translate');
      if (translations[key]) {
        element.textContent = translations[key][language];
      }
    });
  }