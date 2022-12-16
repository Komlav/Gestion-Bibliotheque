<?php
    function find_all_user_profil():array{
        return [
            ["id" => 1, "image" => "icon.jpeg", "id_user" => 1],
            ["id" => 2, "image" => "young-girl-3973379_1920.jpg", "id_user" => 2]
        ];
    }

    /*---------------------------------------------------------------------------------------------------------------- ---------------------------------------------------------------*/
    function find_all_auteurs():array{
        return [
            ["IdAuteur" => 1, "NomAuteur" => "SENGHOR", "PrénomAuteur" => "Léopold Sédar", "Profession" => "Ecrivain"],
            ["IdAuteur" => 2, "NomAuteur" => "BETI", "PrénomAuteur" => "Mongo", "Profession" => "Ecrivain"],
            ["IdAuteur" => 3, "NomAuteur" => "LAYE", "PrénomAuteur" => "Camara", "Profession" => "Ecrivain"],
            ["IdAuteur" => 4, "NomAuteur" => "CHINUA", "PrénomAuteur" => "Achebé", "Profession" => "Ecrivain, Romancier et poète"],
            ["IdAuteur" => 5, "NomAuteur" => "BA", "PrénomAuteur" => "Amadou Hampaté", "Profession" => "Ecrivain"],
            ["IdAuteur" => 6, "NomAuteur" => "KANE", "PrénomAuteur" => "Cheick Hamidou", "Profession" => "Ecrivain, haut fonctionnaire"],
            ["IdAuteur" => 7, "NomAuteur" => "DIOP", "PrénomAuteur" => "David", "Profession" => "Ecrivain,enseignant-chercheur "],
            ["IdAuteur" => 8, "NomAuteur" => "DIOP", "PrénomAuteur" => "Cheick Anta", "Profession" => "Ecrivain, scientifique de formation"],
            ["IdAuteur" => 9, "NomAuteur" => "SEBENE", "PrénomAuteur" => "Ousmane", "Profession" => "Ecrivain, réalisateur"],
            ["IdAuteur" => 10, "NomAuteur" => "OYONO", "PrénomAuteur" => "Ferdinand Léopold", "Profession" => "Ecrivain,  ambassadeur"]
        ];
    }


    function find_all_ouvrages():array{
        return [
            ["Id" => 1, "Titre" => "Une Vie De Boy", "DateEdition" => 1956, "Etat" => "Disponible", "Auteur_CodeAuteur" => 2, "IdRayon" => 2],
            ["Id" => 2, "Titre" => "Le Vieux Nègre Et La Médaille", "DateEdition" => 1956, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1, "IdRayon" => 1 ],
            ["Id" => 3, "Titre" => "Chemin d'Europe", "DateEdition" => 1960, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 3],
            ["Id" => 4, "Titre" => "Les Bouts De Bois De Dieu", "DateEdition" => 1960, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1,"IdRayon" => 4 ],
            ["Id" => 5, "Titre" => "Xola", "DateEdition" => 1973, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 6, "Titre" => "Tribals Scares", "DateEdition" => 1962, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 1],
            ["Id" => 7, "Titre" => "Le Docker Noire", "DateEdition" => 1956, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 1],
            ["Id" => 8, "Titre" => "Civilisation Ou Barbarie", "DateEdition" => 1981, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1,"IdRayon" => 3 ],
            ["Id" => 9, "Titre" => "Nations Nègres Et Culture", "DateEdition" => 1979, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 4],
            ["Id" => 10, "Titre" => "Precolonial Black Africa", "DateEdition" => 1979, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1,"IdRayon" => 2 ],
            ["Id" => 11, "Titre" => "Frère d'Ame", "DateEdition" => 2018, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 1],
            ["Id" => 12, "Titre" => "La Porte Du Voyage Sans Retour", "DateEdition" => 2021, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 13, "Titre" => "Reise Ohne Wiederk", "DateEdition" => 2021, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 14, "Titre" => "Les Gardiens Du Temple", "DateEdition" => 1995, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 15, "Titre" => "L'aventure Ambigue", "DateEdition" => 1961, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1,"IdRayon" => 2 ],
            ["Id" => 16, "Titre" => "L'enfant Noire", "DateEdition" => 1953, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 17, "Titre" => "Le Regard Du Roi", "DateEdition" => 1954, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 18, "Titre" => "The Guaridan Of The Word", "DateEdition" => 1980, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 18, "Titre" => "The Guaridan Of The Word", "DateEdition" => 1980, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 19, "Titre" => "Beyond Hunger in Africa: Conventional Wisdom", "DateEdition" => 1990, "Etat" => "Disponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2],
            ["Id" => 20, "Titre" => "The Short Century: Independence and Liberation Of Movement", "DateEdition" => 2001, "Etat" => "Indisponible", "Auteur_CodeAuteur" => 1 ,"IdRayon" => 2]
        ];
    }

    function find_all_prets():array{
        return [
            ["Id_Pret" => 1, "Date" => "01/12/2021", "DateRetour" => "16/12/2021", "DateRéel" => "11/12/2021", "Id_Exemplaire" => 1, "idAdhérent" => 2, "Etat" => "Encours"],
            ["Id_Pret" => 2, "Date" => "09/11/2022", "DateRetour" => "24/11/2022", "DateRéel" => "29/11/2022", "Id_Exemplaire" => 7, "idAdhérent" => 8, "Etat" => "Retard"],
            ["Id_Pret" => 3, "Date" => "15/10/2022", "DateRetour" => "30/10/2022", "DateRéel" => "20/10/2024", "Id_Exemplaire" => 5, "idAdhérent" => 4, "Etat" => "Retourner"],
            ["Id_Pret" => 4, "Date" => "08/10/2021", "DateRetour" => "23/10/2021", "DateRéel" => "29/10/2021", "Id_Exemplaire" => 12, "idAdhérent" => 7, "Etat" => "Retard"],
            ["Id_Pret" => 5, "Date" => "01/02/2021", "DateRetour" => "16/02/2021", "DateRéel" => "18/02/2021", "Id_Exemplaire" => 9, "idAdhérent" => 9, "Etat" =>  "Retard"],
            ["Id_Pret" => 6, "Date" => "15/02/2022", "DateRetour" => "02/03/2022", "DateRéel" => "20/02/2022", "Id_Exemplaire" => 13, "idAdhérent" => 3, "Etat" => "Retourner"],
            ["Id_Pret" => 7, "Date" => "24/03/2020", "DateRetour" => "10/04/2020", "DateRéel" => "28/07/2021", "Id_Exemplaire" => 10, "idAdhérent" => 1, "Etat" => "Retourner"],
            ["Id_Pret" => 8, "Date" => "23/07/2021", "DateRetour" => "07/08/2021", "DateRéel" => "29/02/2022", "Id_Exemplaire" => 2, "idAdhérent" => 6, "Etat" => "Retourner"],
            ["Id_Pret" => 9, "Date" => "05/03/2022", "DateRetour" => "20/03/2022", "DateRéel" => "10/03/2022", "Id_Exemplaire" => 9, "idAdhérent" => 10, "Etat" => "Encours"],
            ["Id_Pret" => 10, "Date" => "02/09/2021", "DateRetour" => "17/09/2021", "DateRéel" => "19/09/2021", "Id_Exemplaire" => 3, "idAdhérent" => 5, "Etat" => "Retard"]
        ];
    }


    function find_all_exemplaires():array{
        return [
            ["idExemplaire" => 1, "Etat" => "Disponible", "id_Ouvrage" => 1, "DateEnre" => 1991, "Nombre" => 100],
            ["idExemplaire" => 2, "Etat" => "En prêt", "id_Ouvrage" => 8, "DateEnre" => 1956, "Nombre" => 100],
            ["idExemplaire" => 3, "Etat" => "Détérioré", "id_Ouvrage" => 14, "DateEnre" => 1954, "Nombre" => 100],
            ["idExemplaire" => 4, "Etat" => "Disponible", "id_Ouvrage" => 15, "DateEnre" => 1981, "Nombre" => 100],
            ["idExemplaire" => 5, "Etat" => "En prêt", "id_Ouvrage" => 7, "DateEnre" => 1985, "Nombre" => 100],
            ["idExemplaire" => 6, "Etat" => "Indisponible", "id_Ouvrage" => 9, "DateEnre" => 1995, "Nombre" => 100],
            ["idExemplaire" => 7, "Etat" => "En prêt", "id_Ouvrage" => 11, "DateEnre" => 1992, "Nombre" => 100],
            ["idExemplaire" => 8, "Etat" => "Détérioré", "id_Ouvrage" => 17, "DateEnre" => 2001, "Nombre" => 100],
            ["idExemplaire" => 9, "Etat" => "Indisponible", "id_Ouvrage" => 20, "DateEnre" => 2004, "Nombre" => 100],
            ["idExemplaire" => 10, "Etat" => "Détérioré", "id_Ouvrage" => 16, "DateEnre" => 1995, "Nombre" => 100],
            ["idExemplaire" => 11, "Etat" => "En prêt", "id_Ouvrage" => 5, "DateEnre" => 1980, "Nombre" => 100],
            ["idExemplaire" => 12, "Etat" => "Disponible", "id_Ouvrage" => 7, "DateEnre" => 2002, "Nombre" => 100],
            ["idExemplaire" => 13, "Etat" => "Détérioré", "id_Ouvrage" => 8, "DateEnre" => 2012, "Nombre" => 100],
            ["idExemplaire" => 14, "Etat" => "Disponible", "id_Ouvrage" => 13, "DateEnre" => 2021, "Nombre" => 100],
            ["idExemplaire" => 15, "Etat" => "En prêt", "id_Ouvrage" => 9, "DateEnre" => 1988, "Nombre" => 100],
            ["idExemplaire" => 16, "Etat" => "Indisponible", "id_Ouvrage" => 3, "DateEnre" => 1999, "Nombre" => 100]
        ];
    }

    function find_all_adhérents():array{
        return [
            ["Id_Adérent" => 1, "NomAdhé" => "TAMAKLOE", "PrénomAdhé" => "Komlavi Nutekpor", "Téléphone" => 781077144, "Adresse" => "Niarry Tally Rue GD 12 Dakar Sénégal"],
            ["Id_Adérent" => 2, "NomAdhé" => "ANDZAYE", "PrénomAdhé" => "Divine Anaclette", "Téléphone" => 767851240, "Adresse" => "Dieupeul, derrière le commissariat"],
            ["Id_Adérent" => 3, "NomAdhé" => "BALARABE", "PrénomAdhé" => "Mariama", "Téléphone" => 785201240, "Adresse" => "Fass Paillote à coté de la pharmacie"],
            ["Id_Adérent" => 4, "NomAdhé" => "AWUME", "PrénomAdhé" => "Kelly Jason", "Téléphone" => 778521456, "Adresse" => "Mermos Immeuble Mamoune"],
            ["Id_Adérent" => 5, "NomAdhé" => "MISSEKPE", "PrénomAdhé" => "Tonton Fulbert", "Téléphone" => 708551456, "Adresse" => "Mermos Immeuble Mamoune"],
            ["Id_Adérent" => 6, "NomAdhé" => "CAMARA", "PrénomAdhé" => "Maimouna", "Téléphone" => 708551456, "Adresse" => "Liberté 4 non loin du rond point"],
            ["Id_Adérent" => 7, "NomAdhé" => "NEGLO", "PrénomAdhé" => "Kekeli Christelle", "Téléphone" => 785652888, "Adresse" => "Grand Dakar"],
            ["Id_Adérent" => 8, "NomAdhé" => "NDOUR", "PrénomAdhé" => "Salimata", "Téléphone" => 757544588, "Adresse" => "Dakar Plateau"],
            ["Id_Adérent" => 9, "NomAdhé" => "BOP", "PrénomAdhé" => "Aïcha", "Téléphone" => 780754588, "Adresse" => "Liberté 6"],
            ["Id_Adérent" => 10, "NomAdhé" => "BOISSY", "PrénomAdhé" => "Audrey Yassira", "Téléphone" => 775481268, "Adresse" => "Grand Yoff non loin de l'aéroport"],
        ];
    }

    function find_all_rayons():array{
        return  [
            ["IdRayon" => 1, "NomRayon" => "Litterature"],
            ["IdRayon" => 2, "NomRayon" => "Géographie"],
            ["IdRayon" => 3, "NomRayon" => "Histoire"],
            ["IdRayon" => 4, "NomRayon" => "Sciences"],
            ["IdRayon" => 5, "NomRayon" => "Mathématiques"]
        ];
    }

    function find_all_demandes():array{
        return [
            ["id_Dem" => 1, "id_adhérent" => 4, "Date" => "12/06/2021", "Etat" => "Encours"],
            ["id_Dem" => 2, "id_adhérent" => 7, "Date" => "21/05/2021", "Etat" => "Rejetté"],
            ["id_Dem" => 3, "id_adhérent" => 5, "Date" => "13/01/2021", "Etat" => "Encours"],
            ["id_Dem" => 4, "id_adhérent" => 9, "Date" => "18/01/2021", "Etat" => "Accepter"],
            ["id_Dem" => 5, "id_adhérent" => 1, "Date" => "18/11/2021", "Etat" => "Accepter"]
        ];
    }

    function find_all_user():array{
        return [
            ["id" => 1, "login" => "user", "password" => "passer", "nom" => "TAMAKLOE", "prenom" => "Komlavi Nutekpor", "role" => "RB"],
            ["id" => 2, "login" => "wane", "password" => "passer", "nom" => "WANE", "prenom" => "Baila", "role" => "AD"],
            ["id" => 3, "login" => "astou", "password" => "passer", "nom" => "Astou", "prenom" => "Choco", "role" => "RP"]
        ];
    }
?>