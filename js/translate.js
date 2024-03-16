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
    },
    'services': {
      'en': 'our services',
      'sq': 'shërbimet tona'
  },
  'pharmaceuticalFactories': {
      'en': 'Pharmaceutical Factories',
      'sq': 'Fabrikat Farmaceutike'
  },
  'pharmaceuticalFactoriesDescription': {
      'en': 'We represent the production of pharmaceutical factories, ensuring unparalleled quality and the highest standards in every product we distribute.',
      'sq': 'Ne përfaqësojmë prodhimin e fabrikave farmaceutike, duke siguruar cilësinë pa krahas dhe standardet më të larta në çdo produkt që distribuojmë.'
  },
  'artOfFurnitureProduction': {
      'en': 'The Art of Furniture Production',
      'sq': 'Arti i Prodhimit të Mobiljeve'
  },
  'artOfFurnitureProductionDescription': {
      'en': 'We specialize in large-scale furniture production, working with meticulous care to deliver exceptional quality in every detail.',
      'sq': 'Specializohemi në prodhimin e mobiljeve në shkallë të madhe, duke punuar me kujdes të përmbajtur për të ofruar cilësi jashtëzakonisht të lartë në çdo detaj.'
  },
  'developmentOfConstructionProjects': {
    'en': 'Development of Construction Projects',
    'sq': 'Zhvillimi i Projekteve të Ndërtimit'
},
'developmentOfConstructionProjectsDescription': {
    'en': 'Construction Projects Development: Achieving Vision with Creativity, High Quality, and Sustainable Progress in the Construction Industry.',
    'sq': 'Zhvillimi i Projekteve të Ndërtimit: Realizimi i Vizionit me Kreativitet, Cilësi të Lartë, dhe Progres të Qëndrueshëm në Industrinë e Ndërtimit.'
},
'expertElectricalInstallations': {
    'en': 'Expert Electrical Installations',
    'sq': 'Instalime Elektrike Eksperte'
},
'expertElectricalInstallationsDescription': {
    'en': 'Expert electrical installations for homes, businesses, and industries. Quality, precision, and safety guaranteed.',
    'sq': 'Instalime elektrike eksperte për shtëpi, biznese, dhe industri. Cilësi, precizion, dhe siguri e garantuar.'
},
'realEstateAgency': {
    'en': 'Real Estate Agency',
    'sq': 'Agjencia e Pronave të Patundshme'
},
'realEstateAgencyDescription': {
    'en': "We're a real estate agency offering personalized services with high quality for property sales, purchases, rentals, and management.",
    'sq': 'Jemi një agjenci e pronave të patundshme që ofron shërbime personalizuar me cilësi të lartë për shitjen, blerjen, qiratimin, dhe menaxhimin e pronave.'
},
'travelAgency': {
    'en': 'Travel Agency',
    'sq': 'Agjencia e Udhëtimit'
},
'travelAgencyDescription': {
    'en': 'Discover the world with ease through our travel agency. We specialize in crafting unforgettable journeys tailored to your preferences.',
    'sq': 'Zbulojeni botën me lehtësi përmes agjencisë sonë të udhëtimit. Specializohemi në krijimin e udhëtimeve të paharrueshme të përshtatura për preferencat tuaja.'
},
'plasticProduction': {
    'en': 'Plastic Production',
    'sq': 'Prodhimi i Plastikës'
},
'plasticProductionDescription': {
    'en': 'From packaging to industrial applications, we deliver high-quality plastic products that redefine standards and promote environmental responsibility.',
    'sq': 'Nga paketimi deri te aplikimet industriale, ofrojmë produkte plastike me cilësi të lartë që ristrukturojnë standardet dhe promovojnë përgjegjësinë mjedisore.'
},
'exportImport': {
    'en': 'Export Import',
    'sq': 'Import-Eksport'
},
'exportImportDescription': {
    'en': 'Facilitating global trade through expert export-import services. With a focus on efficiency and reliability, we connect markets, delivering value and opportunities across borders.',
    'sq': 'Lehtësimi i tregtisë globale përmes shërbimeve eksperte import-eksport. Me fokus në efikasitet dhe besueshmëri, ne lidhim tregjet, duke ofruar vlerë dhe mundësi nëpër kufij.'
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
