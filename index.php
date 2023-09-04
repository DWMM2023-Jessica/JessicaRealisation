<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Playfair+Display&display=swap" rel="stylesheet">
    
    <title>realisation</title>
</head>
<body>


    <section class="RealisationContainer">
        
        <!-- H2 manipulait avec JS -->
        <h2 class="h2Realisation" onmouseover="base_rea('.h3Realisation')">Réalisation</h2>

        <h2 class="h2RealisationTab" onclick="base_rea('.h3Realisation')">Réalisation</h2>
        
        
        
        <div class="displayRealisation">

            <div class="titre_realisation">
                <div class="block_vide">
                    
                    <!-- All H3 manipulait avec JS -->
                    <h3 class="h3Realisation">Bienvenue <span class="color_rea_h3">sur mes réalisations</h3>
                    <h3 class="h3Realisation1">Osez Rafraîchir <span class="color_rea_h3">Vos Murs</span></h3>
                    <h3 class="h3Realisation2">Donnez de la Vie <span class="color_rea_h3">à Vos Murs avec des Couleurs</span></h3>
                    <h3 class="h3Realisation3">Aventurez-vous <span class="color_rea_h3">dans la Modernisation de Votre Intérieur</span></h3>
                    <h3 class="h3Realisation4">Osez le <span class="color_rea_h3">Changement de Sol</span></h3>
                </div>
                
                <!-- Base de toute la manipulation avec JS -->
                <p class="sousTitre1" onmouseover="showH3_1('h3Realisation1')">Rénovation des Murs ➜</p>
                <p class="sousTitre2" onmouseover="showH3_2('h3Realisation2')">Peinture intérieur ➜</p>
                <p class="sousTitre3" onmouseover="showH3_3('h3Realisation3')">Papier peint ➜</p>
                <p class="sousTitre4" onmouseover="showH3_4('h3Realisation4')">Revêtement des Sols ➜</p>
                
                
                <div class="test">
                    <p class="sousTitreTab1" onclick="showH3_1('h3Realisation1')">Rénovation des Murs</p>
                    <p class="sousTitreTab2" onclick="showH3_2('h3Realisation2')">Peinture intérieur</p>
                    <p class="sousTitreTab3" onclick="showH3_3('h3Realisation3')">Papier peint</p>
                    <p class="sousTitreTab4" onclick="showH3_4('h3Realisation4')">Revêtement des Sols</p>
                    
                    <img class="tracePeintureTab" src="img/tracePeintureTAB.png" alt="">
                </div>

                

                <p class="FlecheTab">↓↓↓</p>

                
            </div>

            <img class="tracePeinturePc" src="img/tracePeinture.png" alt="Trace de peinture">
            
            <div class="meilleurImage">

                <div class="test_phone">
                    <p class="sousTitreTel1" onclick="showPhone_1('best1ImgTel')">Rénovation des Murs</p>
                    <p class="">↓↓↓</p>
                    <img class="best1ImgTel" src="img/best1.jpg" alt="Photo">
                    <p class="sousTitreTel2" onclick="showPhone_2('best2ImgTel')">Peinture intérieur</p>
                    <p class="">↓↓↓</p>
                    <img class="best2ImgTel" src="img/best2.jpg" alt="Photo">
                    <p class="sousTitreTel3" onclick="showPhone_3('best3ImgTel')">Papier peint</p>
                    <p class="">↓↓↓</p>
                    <img class="best3ImgTel" src="img/best3.jpg" alt="Photo">
                    <p class="sousTitreTel4" onclick="showPhone_4('best4ImgTel')">Revêtement des Sols</p>
                    <p class="">↓↓↓</p>
                    <img class="best4ImgTel" src="img/best4.jpg" alt="Photo">
                </div>
                
                <!-- Toute les images en premier plan manipulait avec JS  -->
                <img class="bestImg" src="img/best.jpg" alt="Photo">
                <img class="best1Img" src="img/best1.jpg" alt="Photo">
                <img class="best2Img" src="img/best2.jpg" alt="Photo">
                <img class="best3Img" src="img/best3.jpg" alt="Photo">
                <img class="best4Img" src="img/best4.jpg" alt="Photo">
            
                <!-- Bouton & Modal 1 -->        
                <button type="button" id="modal_pos1" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal1">
                    <strong>Voir plus sur mes rénovations ici</strong>
                </button>

                <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">

                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>

                            <div id="myCarousel1" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel1">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best1.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 2 -->
                <button type="button" id="modal_pos2" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal2">
                    <strong>Voir plus sur mes peintures ici</strong>
                </button>

                <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">

                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel2" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel2">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel2" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best3.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best4.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best1.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best2.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 3 -->
                <button type="button" id="modal_pos3" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal3">
                    <strong>Voir plus sur mes papiers ici</strong>
                </button>

                <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">
                            
                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel3" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel3">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                    </button>

                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bouton & Modal 4 -->
                <button type="button" id="modal_pos4" class="btn position-absolute bottom-0 start-50 translate-middle" data-bs-toggle="modal" data-bs-target="#modal4">
                    <strong>Voir plus sur mes revêtements ici</strong>
                </button>

                <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content text-center text-white bg-dark p-3 rounded-4">
                            
                            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>

                            <div class="AvantApres">
                                <p class="AvantApres_solo">Avant</p>
                                <p class="AvantApres_solo">Après</p>
                                <p class="AvantApres_soloTab1">Avant</p>
                                <p class="AvantApres_soloTab2">Après</p>
                            </div>
                            
                            <div id="myCarousel4" class="carousel slide mb-6" data-bs-ride="carousel" id="exampleModalLabel4">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
                                    <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
                                </div>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>


                                    <div class="carousel-item">
                                                    
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    
                                    <div class="carousel-item">
                                            
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>

                                    <div class="carousel-item">
                                                
                                        <div class="containerImgCarousel mx-auto">
                                            <div class="imgAvant">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                            <div class="imgApres">
                                                <img class="img1" src="img/best.jpg" alt="">
                                            </div>
                                        </div>
                                        <p class="description mb-5 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, dicta?</p>
                                    </div>
                                </div>
                                    
                                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel4" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon me-auto" aria-hidden="true"></span>

                                    <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel4" data-bs-slide="next">
                                    <span class="carousel-control-next-icon ms-auto" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                    </button>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    
</body>
</html>