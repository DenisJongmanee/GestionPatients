import mysql.connector
from personnel import Personnel

class Manage_personnel:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def afficher_liste_personnel(self):
        # methode pour afficher tous les personnels
        instructionBDD = f"SELECT * FROM personnel"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = {}
        index = 1
        # creration variable index = 1 correspond au numero du personnel
        for ligne in self.curseurBDD:
            dictionnaire_ligne = {}
            dictionnaire_ligne["personnel"] = index
            dictionnaire_ligne["nom"] = ligne[2]
            dictionnaire_ligne["prenom"] = ligne[3]
            dictionnaire_ligne["age"] = ligne[4]
            dictionnaire_retour[index] = dictionnaire_ligne
            index += 1  # incrémente le numero
        return dictionnaire_retour

    def ajouter_personnel(self, nom, prenom, date):
        # int id_personnel /str nom et prenom/date datenaissance
        # methode pour ajouter un personnel soignant
        instructionBDD = f"INSERT INTO PersonnelSoignant (nom, prenom, dateNaissance) " \
                         f"VALUES ('{nom}', '{prenom}', {date};)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

    def supprimer_personnel(self, personnel):
        # methode pour supprimer un personnel de la bdd en prenant en compte son id
        instructionBDD = f"DELETE * FROM PersonnelSoignant Where idPersonnel = {personnel}"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()
        #si on veut aller plus loin, on peut garder les données pour les insérer dans une base de donnée dite "archive"

    def modifier_personnel(self, personnel, nom, prenom, date):
        # int id_personnel /str nom et prenom/date datenaissance
        # methode pour modifier un personnel soignant
        instructionBDD = f"UPDATE PersonnelSoignant set nom = '{nom}', prenom = '{prenom}' date = '{date}' where idPersonnel = {personnel};"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()