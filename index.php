<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
  <main class="container">
    <div class="mt-4 d-flex justify-content-center">
        <div class="col-md-3 text-center">
            <form action="badWords.php" method="POST">
                <h2 class="font-bold py-3">Censura la parola desiderata!!</h2>
                <div class="mb-3">
                    <label for="" class="form-label">Inserisci qui il tuo paragrafo</label>
                    <textarea class="form-control text-left" id="textarea" placeholder="Scrivi qui il paragrafo" name="paragrafo"></textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">inserisci qua la parola da censusare</label>
                    <input type="text" class="form-control" name="censura" placeholder="Scrivi qui la parola da censurare">
                </div>
                <button class="btn btn-primary">censura la parola!</button>
            </form>
        </div>
    </div>
    </div>
  </main>
</body>
</html>