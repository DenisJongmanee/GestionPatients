import mysql.connector
from classes.chambre import Chambre
class Manage_chambre:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def afficher_liste_chambre(self):
        # methode pour afficher toutes les chambres
        instructionBDD = f"SELECT * FROM chambre"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = {}
        index = 1
        # creration variable index = 1 correspond au numero de chambre
        dictionnaire_ligne = {}
        dictionnaire_ligne["numeroLit"] = index
        dictionnaire_retour[index] = dictionnaire_ligne
        return dictionnaire_retour