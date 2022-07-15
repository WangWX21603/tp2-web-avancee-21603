<?php

   class ModelArticle extends CRUD{
       protected $table = 'article';
       protected $primaryKey = 'id';

       protected $fillable = ['titre', 'texte', 'usager_id'];
   } 

?>