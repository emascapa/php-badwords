<?php 

/* 
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

    $awesomeParagraph = "Contrariamente a quanto potrebbe 
    far supporre il nome, la pizza hawaiana non è originaria 
    delle isole Hawaii.

    Il canadese Sam Panopoulos, originario della Grecia, 
    rivendica dal 2010 di essere stato lui l'inventore della 
    prima pizza hawaiana, presso il ristorante The Satellite 
    di Chatham-Kent (Ontario) nel 1962. All'epoca la pizza era 
    sconosciuta in Canada e bisognava andare fino a Detroit per 
    trovare una pizzeria. Dopo aver assaggiato la pizza 
    statunitense, decise di riproporla nel proprio ristorante, 
    aggiungendo però una stravaganza esotica, ovvero l'ananas 
    sciroppato. Inizialmente Panopoulos fu ritenuto un pazzo per 
    tale insolito abbinamento tra gusto dolce e salato, potendosi 
    rinvenire qualcosa del genere solo nella cucina cinese, in 
    quella belga (es: polpette di Liegi), in quella persiana 
    (es: pollo alle prugne) e in generale in quella europea del 
    periodo rinascimentale. Ciononostante, la ricetta ebbe in 
    seguito molto successo e da allora la pizza all'ananas e 
    prosciutto cotto si è diffusa in tutto il mondo.

    Sembra altresì probabile che la pizza hawaiana sia una 
    variante del toast Hawaii (fetta di toast aperta con 
    formaggio, prosciutto, ananas e ciliegia maraschino), 
    creato dal primo cuoco televisivo tedesco Clemens 
    Wilmenrod nel 1955.";

    $inputString = $_GET['word'];
    
    var_dump($_GET['word']);

    $censoredParagraph = str_replace($inputString, '***', $awesomeParagraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words php</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: lightgrey;
        }

        div {
            width: 80%;
            margin: 3rem auto;
            text-align: center;

            padding: 2rem;
            background-color: white;
            border-radius: 25px;
        }

        p {
            font-size: 1.2rem;
            font-family: Arial, Helvetica, sans-serif;
            line-height: 1.5rem;
        }


    </style>
</head>
<body>

<div>
    <h2>The paragraph:</h2>
    <p><?php echo $awesomeParagraph; ?></p>

    <br>

    <h2>The paragraph length:</h2>
    <p><?php echo strlen($awesomeParagraph); ?> characters</p>

    <br><br>

    <p style="padding: 0.5rem; border: 3px solid red; border-radius: 15px;"><em>Inserisci una parola da censurare aggiungendo nell'html '?word=<strong>parolaInput</strong>'</em></p>

    <br>

    <h2>The new paragraph:</h2>
    <p><?php echo $censoredParagraph; ?></p>
    
    <br>

    <h2>The new paragraph length:</h2>
    <p><?php echo strlen($censoredParagraph); ?> characters</p>

</div>

    
</body>
</html>