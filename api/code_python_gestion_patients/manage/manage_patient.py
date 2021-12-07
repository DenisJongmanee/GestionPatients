import mysql.connector
from classes.patient import Patient

class Manage_patient:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def afficher_donnees_patient(self, patient):
        # methode pour afficher les données d'un patient en prenant en compte son id
        instructionBDD = f"SELECT * FROM patient INNER JOIN WHERE id_patient = {patient}"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = {}
        index = 1
        # creration variable index = 1 correspond au numero du patient
        for ligne in self.curseurBDD:
            dictionnaire_ligne = {}
            dictionnaire_ligne["patient"] = index
            dictionnaire_ligne["nom"] = ligne[2]
            dictionnaire_ligne["prenom"] = ligne[3]
            dictionnaire_ligne["age"] = ligne[4]
            dictionnaire_retour[index] = dictionnaire_ligne
            index += 1  # incrémente le numero
        return dictionnaire_retour

    def afficher_liste_patient(self):
        # methode pour afficher tous les patients
        instructionBDD = "SELECT patient.id, nom, prenom, date_naissance, sejour.id, num_chambre, num_lit FROM (Patient INNER JOIN Sejour ON Patient.id=Sejour.patient_id INNER JOIN lit ON Sejour.lit_id=lit.id) INNER JOIN sejour_chambre ON sejour.id=sejour_chambre.id_sejour INNER JOIN chambre ON sejour_chambre.id_chambre=chambre.id WHERE sejour.date_sortie_sejour>NOW() "
        self.curseurBDD.execute(instructionBDD)
        resultat = self.curseurBDD.fetchall()
        
        retour = []
        print(resultat)
        for patient in resultat:
            retour.append({"id":patient[0], "nom": patient[1], "prenom": patient[2], "date": patient[3], "id_sejour": patient[4], "num_chambre": patient[5], "num_lit": patient[6]})
        return retour

    def ajouter_patient(self, patient):
        # methode pour ajouter un patient
        instructionBDD = f"INSERT INTO Patient (nom, prenom, dateNaissance) " \
                         f"VALUES ('{patient.nom}', '{patient.prenom}', {patient.date};)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

    def supprimer_patient(self, patient):
        # methode pour supprimer un patient de la bdd avec en argument l'id du patient
        instructionBDD = f"DELETE * FROM patient Where idPatient = {patient}"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()
        # si on veut aller plus loin, on peut garder les données pour les insérer dans une base de donnée dite "archive"

    def modifier_patient(self, patient, id_patient):
    # int id_patient
    # methode pour modifier un patient en prenant en compte son id
        instructionBDD = f"UPDATE patient set nom = '{patient.nom}', prenom = '{patient.prenom}', date_naissance = '{patient.date}' where id_patient = {id_patient};"

        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()


