<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article modification post</title>
    <link rel="stylesheet" href="{{path}}css/style.css">

</head>
<body>
    <div class="page-container">
        <header>

            <!--logo & navigation bar-->                
            <div class="header__container wrapper">
                <a href="{{path}}" class="logo">VOYAGER BLOG</a>                

                <ul class="header__navigation">
                        <li><a href="#" class="header__link">Tous</a></li>
                        <li><a href="#" class="header__link">Destinations</a></li>
                        <li><a href="#" class="header__link">Plein Air</a></li>
                        <li><a href="#" class="header__link">Conseils voyage</a></li>
                </ul>
            </div>
        </header>

        <main>
            <div class="wrapper">
                <h1 class="title">Modifier l'article</h1>
                <div class="wrapper">
                {% if errors is defined %}
                    <span class="error">{{ errors|raw }}</span>
                {% endif %}
                </div>


                <form action="{{path}}article/update" method="post" class="form-article wrapper">
                    <input type="hidden" name="id" value="{{ article.id }}">
                    Titre : 
                    <input type="text" name="titre" value="{{ article.titre }}" class="titre"> 

                    Auteur : 
                    <select name="usager_id">
                            {% for usager in usagers %}
                            <option value="{{ usager.id }}" {% if usager.id==article.usager_id %} selected {% endif %}>{{ usager.nom }}</option>
                            {% endfor %}
                    </select>
            
                    Texte :
                    <textarea type="text" name="texte" rows="30" cols="100" class="text">{{ article.texte }}</textarea>
                    <input type="submit" value="Mise a jour" class="btn"/>    
                </form>
                
                <div class="wrapper">
                    <p>
                        <a href="{{path}}" class="btn-a">Retourne à l'accueil</a>
                    </p>
                </div>
            </div>
        </main>
        
        <!--footer-->
        <footer class="footer">

            <ul class="footer__social-media">
                <!-- Facebook -->
                <li class="icone">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px; height:30px;" viewBox="0 0 400 400"><path fill="#fff" d="M27.6 16C15.7 16 6.2 25 6.2 36.3v327.4c0 11.3 9.5 20.3 21.4 20.3h185.6V241.4h-50.4v-55.6h50.4V145c0-47.5 30.5-73.4 75.2-73.4 21.4 0 39.7 1.5 45.2 2.1v49.6h-30.9c-24.2 0-29 10.9-29 27v35.5h57.9l-7.5 55.6h-50.4V384h98.6c11.9 0 21.4-9 21.4-20.3V36.3C393.6 25 384.1 16 372.2 16H27.6z" fill="#000"/></svg></a>
                </li>
                <!-- Twitter -->
                <li class="icone">
                    <a href=""><svg  xmlns="http://www.w3.org/2000/svg" style="width:30px; height:30px;" viewBox="0 0 400 400"><path fill="#fff" d="M127.1 359.3c148 0 228.9-122.5 228.9-228.9 0-3.5 0-6.9-.2-10.4 15.7-11.4 29.4-25.5 40.2-41.7-14.7 6.5-30.2 10.8-46.1 12.7 16.7-10 29.4-25.9 35.3-44.5-15.7 9.4-33.1 15.9-51 19.6-30.4-32.5-81.5-33.9-113.7-3.5-20.8 19.6-29.8 49-23.3 76.8-64.7-3.3-124.9-33.7-165.8-84.1C9.9 92 20.9 139 56.3 162.7c-12.9-.4-25.3-3.9-36.5-10v1c0 38.4 26.9 71.3 64.5 78.8-11.8 3.3-24.3 3.7-36.3 1.4 10.6 32.7 40.6 55.1 75.1 55.9-28.4 22.5-63.7 34.5-99.8 34.5-6.3 0-12.9-.4-19.2-1.2 36.4 23.7 79.3 36.2 123 36.2" fill="#000"/></svg></a>
                </li>
                <!-- Instagram -->
                <li class="icone">
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px; height:30px;" viewBox="0 0 400 400"><g fill="#fff"><path fill="#fff" d="M282.4 16H117.6C61.5 16 16 61.5 16 117.6v164.9c0 56 45.5 101.6 101.6 101.6h164.9c56 0 101.6-45.5 101.6-101.6V117.6C384 61.5 338.5 16 282.4 16zm68.9 266.4c0 38-30.9 68.9-68.9 68.9H117.6c-38 0-68.9-30.9-68.9-68.9V117.6c0-38 30.9-68.9 68.9-68.9h164.9c38 0 68.9 30.9 68.9 68.9v164.8h-.1z"/><path d="M200 105.1c-52.3 0-94.9 42.5-94.9 94.9 0 52.3 42.5 94.9 94.9 94.9s94.9-42.6 94.9-94.9-42.6-94.9-94.9-94.9zm0 157.1c-34.3 0-62.2-27.9-62.2-62.2s27.9-62.2 62.2-62.2 62.2 27.9 62.2 62.2-27.9 62.2-62.2 62.2zM298.8 77.5c-6.3 0-12.5 2.6-16.9 7-4.5 4.4-7 10.6-7 16.9 0 6.3 2.6 12.5 7 16.9 4.4 4.4 10.6 7 16.9 7s12.5-2.6 16.9-7c4.5-4.5 7-10.7 7-16.9 0-6.3-2.6-12.5-7-16.9-4.4-4.5-10.5-7-16.9-7z"/></g></svg></a>
                </li>
            </ul>  

            <a href="{{path}}" class="logo">VOYAGER BLOG</a>    
            
        </footer>

    </div>

</body>
</html>