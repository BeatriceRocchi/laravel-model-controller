# Movies

1. Creare un nuovo progetto Laravel (o clonare il template fatto in classe)

2. Tramite **phpMyAdmin**, Creare un nuovo database (scegliere liberamente il nome del DB)

3. Importare nel database la tabella **movies** in allegato

4. Inserire le credenziali per il database nel file **.env** (se il progetto è stato clonato duplicare il file .env.exemple, rinominare in .env, generare la chiave e impostare le credenziali)

5. Creare un model Movie **php artisan make:model Movie**

6. Creare un controller che gestirà la rotta **/** **php artisan make:controller Guest/PageController**

7. All’interno della funzione **index()** del controller, recuperare tutti i film dal database e passarli alla view, che quindi li visualizzerà a schermo, tramite delle card.

**BONUS:**

8. Creare altre rotte filtrando i dati come preferite

9. Creare una pagina di dettaglio. La pagina di dettaglio riceve dinamicamente l’ID del movie, esegue la query in base all’ID ricevuto e stampa il singolo elemento. Il link alla pagina di dettaglio sarà presente nell’elenco dei film
