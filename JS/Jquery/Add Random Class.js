    //Colori Casuali per i titoli delle pagine
    var classes = ['classe1','classe2','classeN'];

    // Seleziona un indice casuale dell'array
    var randomClass = classes[Math.floor(Math.random() * classes.length)];

    // Seleziona l'elemento e assegna la classe casuale
    $('.elemento_da_aggiungere_la_classe').addClass(randomClass);
