<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Blog</title>
</head>
<body>
<form action=".env" method="post" name="datiUtenti">
    <h1>{{$welcome}}Blog</h1>
    <h2>Benvenuto! Iscriviti qui</h2>

    Inserisci Nome <input type="text" name="nome"/>
    Inserisci Cognome <input type="text" name="cognome"/>
    Data di Nascita <input type="date" name="data"/>

    e-mail <input type="text" name="e-mail"/>
    password <input type="password" name="password"/>
    ripeti password <input type="password" name="password2"/>

    <input type="submit" name="Invio"/>   <input type="reset" name="Cancella"/>















</form>

</body>
</html>