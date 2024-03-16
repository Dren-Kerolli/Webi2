function changeLanguage(language) {
    var translations = {
      "home": {
        "en": "home",
        "sq": "ballina",
        "pt": "página inicial",
        "it": "pagina iniziale"
      },
      "about": {
        "en": "about us",
        "sq": "rreth nesh",
        "pt": "sobre nós",
        "it": "chi siamo"
      },
      "services": {
        "en": "services",
        "sq": "shërbimet",
        "pt": "serviços",
        "it": "servizi"
      },
      "projects": {
        "en": "projects",
        "sq": "projektet",
        "pt": "projetos",
        "it": "progetti"
      },
      "contact": {
        "en": "contact",
        "sq": "kontakti",
        "pt": "contato",
        "it": "contatti"
      },
      "blogs": {
        "en": "blogs",
        "sq": "blogu",
        "pt": "blogs",
        "it": "blog"
      },
      "login form": {
        "en": "login form",
        "sq": "forma e hyrjes",
        "pt": "formulário de login",
        "it": "modulo di accesso"
      },
      "enter your email": {
        "en": "enter your email",
        "sq": "vendos emailin tënd",
        "pt": "insira seu email",
        "it": "inserisci la tua email"
      },
      "enter your password": {
        "en": "enter your password",
        "sq": "vendos fjalëkalimin tënd",
        "pt": "insira sua senha",
        "it": "inserisci la tua password"
      },
      "remember me": {
        "en": "remember me",
        "sq": "mbaj mend",
        "pt": "lembrar-me",
        "it": "ricordami"
      },
      "forgot password?": {
        "en": "forgot password?",
        "sq": "harruat fjalëkalimin?",
        "pt": "esqueceu a senha?",
        "it": "hai dimenticato la password?"
      },
      "login now": {
        "en": "login now",
        "sq": "hyr tani",
        "pt": "login agora",
        "it": "accedi ora"
      },
      "don't have an account": {
        "en": "don't have an account",
        "sq": "nuk keni llogari",
        "pt": "não tem uma conta",
        "it": "non hai un account"
      },
      "create one!": {
        "en": "create one!",
        "sq": "krijo një!",
        "pt": "crie uma!",
        "it": "creane uno!"
      },
      "CEO": {
        "en": "CEO",
        "sq": "Zyrtar Ekzekutiv",
        "pt": "CEO",
        "it": "CEO"
      },
      "phone number": {
        "en": "phone number",
        "sq": "numri i telefonit",
        "pt": "número de telefone",
        "it": "numero di telefono"
      },
      "email address": {
        "en": "email address",
        "sq": "adresa email",
        "pt": "endereço de email",
        "it": "indirizzo email"
      },
      "office address": {
        "en": "office address",
        "sq": "adresa e zyrës",
        "pt": "endereço do escritório",
        "it": "indirizzo dell'ufficio"
      },
      "years of experience": {
        "en": "years of experience",
        "sq": "vitet e përvojës",
        "pt": "anos de experiência",
        "it": "anni di esperienza"
      },
      "project completed": {
        "en": "project completed",
        "sq": "projekte të përfunduara",
        "pt": "projeto concluído",
        "it": "progetto completato"
      },
      "satisfied clients": {
        "en": "satisfied clients",
        "sq": "klientë të kënaqur",
        "pt": "clientes satisfeitos",
        "it": "clienti soddisfatti"
      },
      "active workers": {
        "en": "active workers",
        "sq": "punëtorë aktivë",
        "pt": "trabalhadores ativos",
        "it": "lavoratori attivi"
      },
      "contact us": {
        "en": "contact us",
        "sq": "na kontaktoni",
        "pt": "entre em contato",
        "it": "contattaci"
      },
      "get in touch": {
        "en": "get in touch",
        "sq": "merrni kontakt",
        "pt": "entre em contato",
        "it": "prendi contatto"
      },
      "message": {
        "en": "message",
        "sq": "mesazhi",
        "pt": "mensagem",
        "it": "messaggio"
      },
      "send message": {
        "en": "send message",
        "sq": "dërgo mesazhin",
        "pt": "enviar mensagem",
        "it": "invia messaggio"
      },
      "services": {
        "en": "our services",
        "sq": "shërbimet tona",
        "pt": "nossos serviços",
        "it": "i nostri servizi"
      },
      "pharmaceuticalFactories": {
        "en": "Pharmaceutical Factories",
        "sq": "Fabrikat Farmaceutike",
        "pt": "Fábricas Farmacêuticas",
        "it": "Fabbriche Farmaceutiche"
      },
      "pharmaceuticalFactoriesDescription": {
        "en": "We represent the production of pharmaceutical factories, ensuring unparalleled quality and the highest standards in every product we distribute.",
        "sq": "Ne përfaqësojmë prodhimin e fabrikave farmaceutike, duke siguruar cilësinë pa krahas dhe standardet më të larta në çdo produkt që distribuojmë.",
        "pt": "Representamos a produção de fábricas farmacêuticas, garantindo qualidade incomparável e os mais altos padrões em cada produto que distribuímos.",
        "it": "Rappresentiamo la produzione di fabbriche farmaceutiche, garantendo qualità senza pari e i più alti standard in ogni prodotto che distribuiamo."
      },
      "artOfFurnitureProduction": {
        "en": "The Art of Furniture Production",
        "sq": "Arti i Prodhimit të Mobiljeve",
        "pt": "A Arte da Produção de Mobiliário",
        "it": "L'Arte della Produzione di Mobili"
      },
      "artOfFurnitureProductionDescription": {
        "en": "We specialize in large-scale furniture production, working with meticulous care to deliver exceptional quality in every detail.",
        "sq": "Specializohemi në prodhimin e mobiljeve në shkallë të madhe, duke punuar me kujdes të përmbajtur për të ofruar cilësi jashtëzakonisht të lartë në çdo detaj.",
        "pt": "Especializamo-nos na produção de móveis em grande escala, trabalhando com cuidado meticuloso para fornecer qualidade excepcional em cada detalhe.",
        "it": "Siamo specializzati nella produzione di mobili su larga scala, lavorando con cura meticolosa per fornire una qualità eccezionale in ogni dettaglio."
      },
      "developmentOfConstructionProjects": {
        "en": "Development of Construction Projects",
        "sq": "Zhvillimi i Projekteve të Ndërtimit",
        "pt": "Desenvolvimento de Projetos de Construção",
        "it": "Sviluppo di Progetti Edilizi"
      },
      "developmentOfConstructionProjectsDescription": {
        "en": "Construction Projects Development: Achieving Vision with Creativity, High Quality, and Sustainable Progress in the Construction Industry.",
        "sq": "Zhvillimi i Projekteve të Ndërtimit: Realizimi i Vizionit me Kreativitet, Cilësi të Lartë, dhe Progres të Qëndrueshëm në Industrinë e Ndërtimit.",
        "pt": "Desenvolvimento de Projetos de Construção: Alcançando Visão com Criatividade, Alta Qualidade e Progresso Sustentável na Indústria da Construção.",
        "it": "Sviluppo di Progetti Edilizi: Realizzare una Visione con Creatività, Alta Qualità e Progresso Sostenibile nel Settore Edilizio."
      },
      "expertElectricalInstallations": {
        "en": "Expert Electrical Installations",
        "sq": "Instalime Elektrike Eksperte",
        "pt": "Instalações Elétricas Especializadas",
        "it": "Installazioni Elettriche Esperte"
      },
      "expertElectricalInstallationsDescription": {
        "en": "Expert electrical installations for homes, businesses, and industries. Quality, precision, and safety guaranteed.",
        "sq": "Instalime elektrike eksperte për shtëpi, biznese, dhe industri. Cilësi, precizion, dhe siguri e garantuar.",
        "pt": "Instalações elétricas especializadas para residências, empresas e indústrias. Qualidade, precisão e segurança garantidas.",
        "it": "Installazioni elettriche esperte per case, aziende e industrie. Qualità, precisione e sicurezza garantite."
      },
      "realEstateAgency": {
        "en": "Real Estate Agency",
        "sq": "Agjencia e Pronave të Patundshme",
        "pt": "Agência Imobiliária",
        "it": "Agenzia Immobiliare"
      },
      "realEstateAgencyDescription": {
        "en": "We're a real estate agency offering personalized services with high quality for property sales, purchases, rentals, and management.",
        "sq": "Jemi një agjenci e pronave të patundshme që ofron shërbime personalizuar me cilësi të lartë për shitjen, blerjen, qiratimin, dhe menaxhimin e pronave.",
        "pt": "Somos uma agência imobiliária que oferece serviços personalizados com alta qualidade para venda, compra, aluguel e gestão de imóveis.",
        "it": "Siamo un'agenzia immobiliare che offre servizi personalizzati di alta qualità per vendite, acquisti, affitti e gestione immobiliare."
      },
      "travelAgency": {
        "en": "Travel Agency",
        "sq": "Agjencia e Udhëtimit",
        "pt": "Agência de Viagens",
        "it": "Agenzia di Viaggi"
      },
      "travelAgencyDescription": {
        "en": "Discover the world with ease through our travel agency. We specialize in crafting unforgettable journeys tailored to your preferences.",
        "sq": "Zbulojeni botën me lehtësi përmes agjencisë sonë të udhëtimit. Specializohemi në krijimin e udhëtimeve të paharrueshme të përshtatura për preferencat tuaja.",
        "pt": "Descubra o mundo com facilidade através da nossa agência de viagens. Especializamo-nos em criar viagens inesquecíveis adaptadas às suas preferências.",
        "it": "Scopri il mondo con facilità attraverso la nostra agenzia di viaggi. Siamo specializzati nella creazione di viaggi indimenticabili su misura per le tue preferenze."
      },
      "plasticProduction": {
        "en": "Plastic Production",
        "sq": "Prodhimi i Plastikës",
        "pt": "Produção de Plástico",
        "it": "Produzione di Plastica"
      },
      "plasticProductionDescription": {
        "en": "From packaging to industrial applications, we deliver high-quality plastic products that redefine standards and promote environmental responsibility.",
        "sq": "Nga paketimi deri te aplikimet industriale, ofrojmë produkte plastike me cilësi të lartë që ristrukturojnë standardet dhe promovojnë përgjegjësinë mjedisore.",
        "pt": "Desde embalagens até aplicações industriais, entregamos produtos plásticos de alta qualidade que redefinem padrões e promovem responsabilidade ambiental.",
        "it": "Dall'imballaggio alle applicazioni industriali, forniamo prodotti in plastica di alta qualità che ridefiniscono gli standard e promuovono la responsabilità ambientale."
      },
      "exportImport": {
        "en": "Export Import",
        "sq": "Import-Eksport",
        "pt": "Exportação Importação",
        "it": "Esportazione Importazione"
      },
      "exportImportDescription": {
        "en": "Facilitating global trade through expert export-import services. With a focus on efficiency and reliability, we connect markets, delivering value and opportunities across borders.",
        "sq": "Lehtësimi i tregtisë globale përmes shërbimeve eksperte import-eksport. Me fokus në efikasitet dhe besueshmëri, ne lidhim tregjet, duke ofruar vlerë dhe mundësi nëpër kufij.",
        "pt": "Facilitando o comércio global através de serviços especializados de exportação-importação. Com foco em eficiência e confiabilidade, conectamos mercados, entregando valor e oportunidades através das fronteiras.",
        "it": "Facilitare il commercio globale attraverso servizi di import-export esperti. Con un focus sull'efficienza e affidabilità, connettiamo i mercati, offrendo valore e opportunità oltre i confini."
      },
      "professionalismOffer": {
        "en": "We offer our professionalism to all Italians who want to immigrate to Kosovo",
        "sq": "Ofruam profesionalizmin tonë të gjithë italianëve që dëshirojnë të emigrojnë në Kosovë",
        "pt": "Oferecemos nosso profissionalismo a todos os italianos que desejam imigrar para Kosovo",
        "it": "Offriamo il nostro professionalismo a tutti gli italiani che desiderano immigrare in Kosovo"
      },
      "expertiseDescription": {
        "en": "Our professional expertise can assist you in the following areas:",
        "sq": "Ekspertiza jonë profesionale mund t'ju ndihmojë në këto fusha:",
        "pt": "Nossa expertise profissional pode ajudá-lo nas seguintes áreas:",
        "it": "La nostra esperienza professionale può assisterti nelle seguenti aree:"
      },
      "buyProperty": {
        "en": "Buy a house, apartment, villa, land, and more",
        "sq": "Blej një shtëpi, apartament, vilë, tokë dhe më shumë",
        "pt": "Compre uma casa, apartamento, vila, terreno e muito mais",
        "it": "Compra una casa, appartamento, villa, terreno e altro ancora"
      },
      "construction": {
        "en": "Construction of personalized houses and villas",
        "sq": "Ndërtimi i shtëpive dhe vilave të personalizuara",
        "pt": "Construção de casas e vilas personalizadas",
        "it": "Costruzione di case e ville personalizzate"
      },
      "licenseConversion": {
        "en": "Convert your driving license",
        "sq": "Konvertoni patentën tuaj të drejtimit",
        "pt": "Converta sua carteira de motorista",
        "it": "Converti la tua patente di guida"
      },
      "residenceRegistration": {
        "en": "Register your residence",
        "sq": "Regjistroni vendbanimin tuaj",
        "pt": "Registre sua residência",
        "it": "Registra la tua residenza"
      },
      "carTransfer": {
        "en": "Transfer your car with plates to Kosovo",
        "sq": "Transferoni veturën tuaj me targa në Kosovë",
        "pt": "Transfira seu carro com placas para Kosovo",
        "it": "Trasferisci la tua auto con targhe in Kosovo"
      },
      "otherServices": {
        "en": "And many other services...",
        "sq": "Dhe shumë shërbime të tjera...",
        "pt": "E muitos outros serviços...",
        "it": "E molti altri servizi..."
      },
      "contactUs": {
        "en": "Do not hesitate to contact us.",
        "sq": "Mos hezitoni të na kontaktoni.",
        "pt": "Não hesite em nos contatar.",
        "it": "Non esitate a contattarci."
      },
      "ConstructionProjects": {
        "en": "Construction Projects",
        "sq": "Projekte Të Ndërtimit",
        "pt": "Projetos de Construção",
        "it": "Progetti Edilizi"
      },
      "constructiondesign": {
        "en": "construction and design",
        "sq": "ndertim dhe dizajn ",
        "pt": "construção e design",
        "it": "costruzione e design"
      },
      "CarparoandLeccese": {
        "en": "Carparo and Leccese",
        "sq": "Carparo dhe Leccese",
        "pt": "Carparo e Leccese",
        "it": "Carparo e Leccese"
      },
      "EstateAgency": {
        "en": "Real Estate Agency",
        "sq": "Agjencia e Patundshmerive",
        "pt": "Agência Imobiliária",
        "it": "Agenzia Immobiliare"
      },
      "estate": {
        "en": "Buy, sell, rent",
        "sq": "Blej, Shit,Qera",
        "pt": "Comprar, vender, alugar",
        "it": "Compra, vendi, affitta"
      },
      "hospital": {
        "en": "Hospital Planning",
        "sq": "Planifikim i Spitaleve",
        "pt": "Planejamento Hospitalar",
        "it": "Pianificazione Ospedaliera"
      }
    }
    

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
