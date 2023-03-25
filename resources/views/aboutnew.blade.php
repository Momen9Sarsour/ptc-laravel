<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>About New</title>
</head>
<body>
    <i class="fas fa-h1 fa-xs fa-fw"></i>
   <h1 class="container-fluid bg-red">About New</h1>
   <h1 class="badge-pill badge-primary fs-1"><?php echo @$name1 ?></h1>
   <h1 class="badge-pill badge-danger fs-1"><?php echo @$name ?></h1>

   <p class="bg-primary bg-danger btn btn-primare">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo, sed?</p>
   <p style="background: red" class="bg-red btn btn-primare">Lorem</p>

   <form action="store" method="post">
    @csrf    <!-- لحماية البيانات من الهجمات الاختراق -->
    <input type="text" name="name" id="name">
    <input class="btn btn-black" type="submit" value="Send">
   </form>

</body>
</html>

