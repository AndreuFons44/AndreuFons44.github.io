<!doctype html>
<html lang='en'>
<head>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
<title>Honkai Impact 3rd Calculadora</title>
</head>
<body>
    <?php 
    
    ?>
    <div class="container-fluid">
       <form action="ai_chan.php" method="get">
           <div class="row">
               <div class="col">
                   <label for="fecha1">Fecha de inicio</label>
                   <input type="date" class="form-control" name="date_start" id="date_start">
               </div>
               <div class="col">
                   <label for="fecha1">Fecha de final</label>
                   <input type="date" class="form-control" name="date_end" id="date_end">
               </div>
           </div>
            <div class="row">
                <div class="col">
                    <label for="abyss">Superdimensio Abyss</label>
                    <select class="form-select" name="abyssrank" id="abyssrank">
                        <option value="0">Forbidden</option>
                        <option value="1">Sinful 1</option>
                        <option value="2">Sinful 2</option>
                        <option value="3">Sinful 3</option>
                        <option value="4">Agony 1</option>
                        <option value="5">Agony 2</option>
                        <option value="6">Agony 3</option>
                        <option value="7">Redlotus</option>
                        <option value="8">Nirvana</option>
                    </select>
                </div>
                <div class="col">
                    <label for="abyss">Crystal</label>
                    <input type="number" class="form-control" name="crystal" id="crystal" placeholder="0" value="0">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="">
            </div>
       </form>
    </div>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>
</html>