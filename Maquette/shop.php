<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="shop.css">
    <title>Shop</title>
</head>
<body>
        <!-- Header block start -->
            <header>
                <nav class="naba">
                    <strong style="text-decoration: none; color: black;">EARTH STORE</strong>
                    <div class="menu">
                        <a href="index.html" style="text-decoration: none; color: black; margin-right: 20px;">HOME</a>
                        <a href="about.html" style="text-decoration: none; color: black; margin-right: 20px;">ABOUT</a>
                        <a href="shop.html" style="text-decoration: none; color: black; margin-right: 20px;">SHOP</a>
                        <a href="contact.html" style="text-decoration: none; color: black; margin-right: 20px;">CONTACT</a>
                        <a href=""><i class="fa-solid fa-lock" style="color: black; margin-right: 20px;"></i></a>
                        <a href=""><i class="fa-solid fa-user" style="color: black;"></i></a>
                    </div>    
                </nav>
            </header>
        <!-- Hearder block end -->
    <section class="one">
        <div class="nav1">
                <form class="gauche">
                    <div class="recherche">
                        <input class="form" type="text" id="name" placeholder="search products...">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass" style="font-size: 17px;background-color: rgb(8, 183, 8); margin-left: 10px; padding: 14px; color: white;"></i>
                        </a>
                    </div><br><br>
                    <div class="fil">
                        <strong>Filter by price</strong>
                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3"><br><br>
                        <div style="display: flex; gap: 20px;">
                            <p>$10</p>
                            <p>$30</p>
                        </div>    
                    </div>
                    <div>
                        <strong style="color: darkolivegreen;">Categories</strong><br><br>
                        <p style="color: darkolivegreen;">Postcards</p>(6)
                        <p style="color: darkolivegreen;">Posters</p>(6)
                    </div>
                </form>
        
            <div class="homeshop">
                <div class="HS">
                    <a href="" style="text-decoration: none; color: rgb(61, 60, 60);">Home</a>/<a href="" style="text-decoration: none; color: rgb(61, 60, 60)">Shop</a><br><br>
                    <h1 style="color: darkolivegreen;">Shop</h1>
                </div> <br><br><br>
                <div class="SD">
                    <p> Showing all 12 results</p>
                    <select style="margin-left: 485px; border-radius: none; background-color: white; border: none;">
                        <option value="1">Default sorting</option>
                        <option value="2">Sort by popularity</option>
                        <option value="3">Sort by averag rating</option>
                        <option value="4">Sort by latest</option>
                        <option value="5">Sort by price: low to high</option>
                        <option value="6">Sort by price: high to low</option>
                    </select>
                </div><br><br>
                <section>
                    <div class="lesimages">
                        <div class="img1">
                            <div>
                                <a href="postcards1.html"><img class="imge" src="images_shop/Postcard1-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V1</strong>
                                <p>$23.99</p>
                            </div>
                            <div>
                                <a href="postcards2.html"><img class="imge" src="images_shop/PostcardV2-min-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V2</strong>
                                <p>$17.99</p>
                            </div>
                            <div>
                                <a href="postcards3.html"><img class="imge" src="images_shop/Postcard3-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V3</strong>
                                <p>$14.99</p>
                            </div>
                        </div>
                        <div class="img2">
                            <div>
                                <a href="postcards4.html"><img class="imge" src="images_shop/Postcard-6-min-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V4</strong>
                                <p>$23.99</p>
                            </div>
                            <div>
                                <a href="postcards5.html"><img class="imge" src="images_shop/PostcardV5-min-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V5</strong>
                                <p>$17.99</p>
                            </div>
                            <div>
                                <a href="postcards6.html"><img class="imge" src="images_shop/PostcardV6-1000x1000.jpg" alt=""></a>
                                <p>Postcards</p>
                                <strong>Postcard V6</strong>
                                <p>$14.99</p>
                            </div>
                        </div>
                        <div class="img3">
                            <div>
                                <a href="posters1.html"><img class="imge" src="images_shop/Poster5-1000x1000.jpg" alt=""></a>
                                <p>Posters</p>
                                <strong>Poster V1</strong>
                                <p>$23.99</p>
                            </div>
                            <div>
                                <a href="posters2.html"><img class="imge" src="images_shop/Poster6-1000x1000.jpg" alt=""></a>
                                <p>Posters</p>
                                <strong>Poster V2</strong>
                                <p>$17.99</p>
                            </div>
                            <div>
                                <a href="posters3.html"><img class="imge" src="images_shop/Poster4-1000x1000.jpg" alt=""></a>
                                <p>Posters</p>
                                <strong>Poster V3</strong>
                                <p>$14.99</p>
                            </div>
                        </div>
                        <div class="img4">
                            <div>
                                <a href="posters4.html"><img class="imge" src="images_shop/Poster2-1000x1000.jpg" alt=""></a>
                                <p>Posters</p>
                                <strong>Poster V4</strong>
                                <p>$23.99</p>
                            </div>
                            <div>
                                <a href="posters5.html"><img class="imge" src="images_shop/Poster3-1000x1000.jpg" alt=""></a>
                                <p>Posters</p>
                                <strong>Poster V5</strong>
                                <p>$17.99</p>
                            </div>
                            <div>
                                <a href="posters6.html"><img class="imge" src="images_shop/Poster1-1000x1000.jpg" alt=""></a>
                                <p>Postetets</p>
                                <strong>Poster V6</strong>
                                <p>$14.99</p>
                            </div>
                        </div> 
                        <div class="dern">
                            <a href="" style="text-decoration: none; color: black;">HOME</a>
                            <a href="" style="text-decoration: none; color: black;">ABOUT</a>
                            <a href="" style="text-decoration: none; color: black;">SHOP</a>
                            <a href="" style="text-decoration: none; color: black;">CONTACT</a>
                            <strong style="margin-left: 150px;">EARTH STORE</strong>
                            <p style="margin-left: 200px;">Copyright © 2024 Planet Ear th Store</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>    
    </section>
</body>
</html>