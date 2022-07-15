
CREATE TABLE IF NOT EXISTS usager (
  id INT NOT NULL AUTO_INCREMENT,
  nom VARCHAR(45) NULL,
  courriel VARCHAR(45) NULL,
  motPasse VARCHAR(45) NULL,
  PRIMARY KEY (id)
  );


CREATE TABLE IF NOT EXISTS article (
  id INT NOT NULL  AUTO_INCREMENT,
  titre VARCHAR(45) NULL,
  texte LONGTEXT NULL,
  usager_id INT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (usager_id) REFERENCES usager(id)

);


CREATE TABLE IF NOT EXISTS commentaire (
  id INT NOT NULL  AUTO_INCREMENT,
  texte TEXT(300) NULL,
  date DATE NULL,
  article_id INT NOT NULL,
  usager_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (article_id) REFERENCES article(id),
  FOREIGN KEY (usager_id) REFERENCES usager(id)
);


CREATE TABLE IF NOT EXISTS categorie (
  id INT NOT NULL  AUTO_INCREMENT,
  nom VARCHAR(45) NULL,
  PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS article_has_categorie (
  article_id INT NOT NULL,
  categorie_id INT NOT NULL,
  PRIMARY KEY (article_id, categorie_id),
  FOREIGN KEY (article_id) REFERENCES article(id),
  FOREIGN KEY (categorie_id) REFERENCES categorie(id)
);

INSERT INTO article VALUES (1, "Discover our national parks", "Quebec's national parks offer extraordinary sensory experiences in all seasons. Each has its own personality and boasts an astonishing diversity of landscapes, accommodation and outdoor activities.", 1),
(2, "A getaway from Quebec to Charlevoix", "With its grandiose nature dominated by magnificent sea and mountain landscapes, Charlevoix enchants: steep cliffs, exceptional parks, pretty villages on the mountainside and majestic mansions.
Proclaimed a World Biosphere Reserve by UNESCO, Charlevoix owes its astonishing geography to the fall of a 15 billion ton meteorite 350 million years ago.
During the winter, the backcountry turns into a superb playground for snowmobile raid enthusiasts.", 2), 
(3, "One day of history and nature in Quebec", "Old Quebec, a UNESCO World Heritage treasure, is walkable and safe. Stroll the cobblestone streets of the only fortified city north of Mexico and explore its gorgeous outdoors nearby.", 3),
(4, "Tour of Gaspesie", "Want something extraordinary? It's a start for 885 kilometers of intensity! Immerse yourself in the spectacular panoramas of the Gaspesie, where the sea, beaches, cliffs, mountains and rivers compete for the leading role. Chat with his people, with an easy smile and wide open arms.
Pop into its many restaurants and shops; devour its marine, agricultural and forest treasures. Dance, sing or relax until the wee hours under an infinitely starry sky! Ready for the big adventure?", 1),
(5, "Go to Montreal", "Montreal begins as a large American city, with its immense network of highways that hugs the skyscrapers and plunges into the heart of wide avenues cut at right angles.
But on closer inspection, Montreal is more like a wonderful patchwork (sorry for the anglicism!) of neighborhoods with a very different family atmosphere. No need to walk miles of asphalt to move from one world to another: to taste successively the sweet excitement of a Downtown given over to office workers during the day and almost deserted at night, to the relaxed atmosphere of streets of the Plateau and the Mile-End, or the alternative and bubbling vibrations of the Mile Ex, unless you let yourself be seduced by the Chinese district or are frankly carried away by the festive mood of the Latin Quarter or downright crazy in the Gay Village.", 2), 
(null, "The park Kuururjuaq", "Last but not least! Kuururjuac Park is recognized for its beauty, but also for its mission to protect the Koroc River Valley. To discover this gem, however, you will need time and also a certain amount of money. Expeditions to this territory are rather expensive, but totally worth the cost! Departures are from Montreal and Nunavik.", 2);


INSERT INTO usager VALUES (1, "E.T.", "extraterrestre@mars.univers", "@@##$@@@!^^&"),
(2, "Philippe Tremblay ", "tremblay@gmail.ca", "abc-123"),
(3, "Xiaorui Wang", "xrui@yeah.net", "222222");
