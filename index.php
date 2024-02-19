<?php
require_once __DIR__ . './models/products.php';
require_once __DIR__ . './models/toys.php';
require_once __DIR__ . './models/food.php';
require_once __DIR__ . './models/dogbed.php';
require_once __DIR__ . './models/user.php';

$user = new User('ciao', 'ciao', 'ciao');
var_dump($user);

$productOne = new Products('prodotto','url', 90 , 1 , 4 ,'', 4);
//var_dump($productOne);

$toysOne = new Toys('Gioco Rinfrescante ghiacciolo','./img/Karlie-Fill-N-Freeze-Gioco-Rinfrescante-ghiacciolo-per-Cane.jpg', 8 , 1 , 4 ,'Lorem Ipsum', 3 ,'plastica', true);
//var_dump($toysOne);

$foodOne = new Food('Vaschette Manzo','./img/vaschette_dog_300_manzo__1.jpg', 2 , 1 , 4 ,'Lorem Ipsum', 3 ,'24/07/2024', 'manzo', 20);
//var_dump($foodOne);

$dogbedOne = new DogBed('Cuccia per gatti in plastica','./img/cuccia-per-cani-domus-in-plastica-da-esterno-ricovero-per-cani-trattato-con-impregnanti-ecologici.jpg', 25 , 0 , 4 ,'Lorem Ipsum', 3 ,'stoffa', '20cm');
//var_dump($foodOne);


$productsArray[] = $toysOne;
$productsArray[] = $foodOne;
$productsArray[] = $dogbedOne;

//var_dump($productsArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Arca Planet</title>
</head>
<body>
    <header>
        <h1>
            Arca Planet
        </h1>
    </header>

    <main>
        <div class="container">
            <div class="d-flex flex-wrap">

            <?php
                if($user->nickname != null && $user->password != null && $user->email != null) {
                    foreach ($productsArray as $key => $singleProduct) {
                        $singleProduct->price = $singleProduct->price * 0.20;
                    };
                };
            ?>

            <?php foreach ($productsArray as $key => $singleProduct) { ?>

                <div class="card-product">
                    <div class="frame">
                        <img src="<?php echo $singleProduct->imgUrl ?>" alt="">
                    </div>
                    <div class="info">
                        <h3 class="m-0">
                            <?php echo $singleProduct->name ?>
                        </h3>
                        <p>
                            <?php echo $singleProduct->description ?>
                        </p>
                        <h2 class=" text-success ">
                            <?php echo $singleProduct->price.'€' ?>
                        </h2>
                        <span>
                            <?php
                            if($singleProduct->category == 1){
                                echo '<i class="fa-solid fa-dog"></i>';
                            }else{
                                echo '<i class="fa-solid fa-cat"></i>';
                            }
                            ?>
                        </span>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>