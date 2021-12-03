import mysql.connector
from classes.sejour import Sejour

class Manage_sejour:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def ajouter_sejour(self, patient, service, dateEntree, dateSortie, probleme, numeroDeLit):
        # methode pour ajouter un séjour associé à un patient
        instructionBDD = f"INSERT INTO Sejour (dateEntreeSejour, DateSortieSejour, Probleme, idPatient, NumLit) " \
                         f"VALUES ('{dateEntree}', '{dateSortie}', {probleme}, {patient}, {numeroDeLit};)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

        instructionBDD = f"INSERT INTO Dans (DateEntreeChambre) " \
                         f"VALUES ({dateEntree};)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()
        instructionBDD = f"INSERT INTO AuSein (DateEntreeService, idService) " \
                         f"VALUES ({dateEntree}, {service};)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

    def afficher_liste_sejour(self):
        # methode pour afficher tous les sejour
        instructionBDD = f"SELECT * FROM sejour"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = {}
        index = 1
        # creration variable index = 1 correspond au numero du sejour
        for ligne in self.curseurBDD:
            dictionnaire_ligne = {}
            dictionnaire_ligne["patient"] = index
            dictionnaire_ligne["service"] = ligne[2]
            dictionnaire_ligne["dateEntree"] = ligne[3]
            dictionnaire_ligne["dateSortie"] = ligne[4]
            dictionnaire_ligne["probleme"] = ligne[5]
            dictionnaire_ligne["numeroDeLit"] = ligne[6]
            dictionnaire_retour[index] = dictionnaire_ligne
            index += 1  # incrémente le numero
        return dictionnaire_retour