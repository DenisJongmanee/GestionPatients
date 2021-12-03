import mysql.connector
from classes.patient import Patient

class Manage_patient:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def afficher_donnees_patient(self, patient):
        # methode pour afficher les données d'un patient en prenant en compte son id
        instructionBDD = f"SELECT * FROM patient WHERE id_patient = {patient}"
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
        instructionBDD = f"SELECT * FROM patient"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = self.curseurBDD.fetchall()
        return dictionnaire_retour

    def ajouter_patient(self, patient):
        # int id_patient /str nom et prenom/date datenaissance
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

    def modifier_patient(self, patient, nom, prenom, date):
    # int id_patient /str nom et prenom/date datenaissance
    # methode pour modifier un patient en prenant en compte son id
        instructionBDD = f"UPDATE patient set nom = '{nom}', prenom = '{prenom}', dateNaissance = '{date}' where idPatient = {patient};"

        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()


