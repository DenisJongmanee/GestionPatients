import mysql.connector
from service import Service

class Manage_service:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def ajouter_service(self, nom, zone):
        # int id_sejour /str nom et zone géographique
        # methode pour ajouter un service

        instructionBDD = f"INSERT INTO Service (nomService, ZoneGeographique) " \
                         f"VALUES ('{nom}', '{zone}';)"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

    def supprimer_service(self, service):
        # methode pour supprimer un service de la bdd en prenant en compte son id
        instructionBDD = f"DELETE * FROM service Where idService = {service}"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()
        #si on veut aller plus loin, on peut garder les données pour les insérer dans une base de donnée dite "archive"

    def modifier_service(self, service, nom, zone):
        # int id_sejour /str nom et zone géographique
        # methode pour modifier un service
        instructionBDD = f"UPDATE patient set nom = '{nom}', zone = '{zone}' where idService = {service};"
        self.curseurBDD.execute(instructionBDD)
        self.conn.commit()

    def afficher_liste_service(self):
        # methode pour afficher tous les service
        instructionBDD = f"SELECT * FROM personnel"
        self.curseurBDD.execute(instructionBDD)
        dictionnaire_retour = {}
        index = 1
        # creration variable index = 1 correspond au numero du service
        for ligne in self.curseurBDD:
            dictionnaire_ligne = {}
            dictionnaire_ligne["nom"] = index
            dictionnaire_ligne["zone"] = ligne[2]
            dictionnaire_retour[index] = dictionnaire_ligne
            index += 1  # incrémente le numero
        return dictionnaire_retour