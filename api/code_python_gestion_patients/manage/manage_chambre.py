import mysql.connector
from classes.chambre import Chambre

class Manage_chambre:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def afficher_liste_chambre(self):
        # methode pour afficher toutes les chambres
        instructionBDD = "SELECT num_chambre, nombre_lits, nom_service FROM Chambre INNER JOIN Service ON chambre.service_id=service.id "
        self.curseurBDD.execute(instructionBDD)

        resultat = self.curseurBDD.fetchall()
        
        retour = []
        print(resultat)
        for chambre in resultat:
            retour.append({"num_chambre":chambre[0], "nblits": chambre[1] ,"service": chambre[2]})
        return retour;