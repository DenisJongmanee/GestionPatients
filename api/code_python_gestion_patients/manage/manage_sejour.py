import mysql.connector
from classes.sejour import Sejour

class Manage_sejour:
    def __init__(self):
        self.conn = mysql.connector.connect(host="localhost",user="root",password="", database="gestion_Patients")
        # connexion à la base de donnée
        self.curseurBDD = self.conn.cursor()

    def ajouter_sejour(self, sejour : Sejour):
        try:
            # methode pour ajouter un séjour associé à un patient + lit
            instructionBDD = f"INSERT INTO Sejour (date_entree_sejour, date_sortie_sejour, probleme, patient_id, lit_id) " \
                            f"VALUES ('{sejour.dateEntree}', '{sejour.dateSortie}', '{sejour.probleme}', {sejour.patient}, {sejour.idLit});"
            self.curseurBDD.execute(instructionBDD)
            self.conn.commit()

            #id du sejour généré
            idsejour = self.curseurBDD.lastrowid
            
            #chambre
            instructionBDD = f"INSERT INTO sejour_chambre (id_sejour, id_chambre, date_entree_chambre) " \
                            f"VALUES ({idsejour},{sejour.id_chambre}'{sejour.dateEntree}');"
            self.curseurBDD.execute(instructionBDD)
            self.conn.commit()
            
            #service
            instructionBDD = f"INSERT INTO sejour_service (date_entree_service, sejour_id, service_id) " \
                            f"VALUES ({sejour.dateEntree}, {idsejour}, {sejour.service});"
            self.curseurBDD.execute(instructionBDD)
            self.conn.commit()
            
        except:
            return(500);

    def afficher_liste_sejour(self):
        # methode pour afficher tous les sejour
        instructionBDD = f"SELECT sejour.id, nom, prenom, date_entree_sejour, date_sortie_sejour, nom_service, num_chambre, num_lit, probleme FROM ((Patient INNER JOIN Sejour ON patient.id = sejour.patient_id INNER JOIN lit ON sejour.lit_id=lit.id)INNER JOIN sejour_chambre ON sejour.id=sejour_chambre.id_sejour INNER JOIN chambre ON sejour_chambre.id_chambre=chambre.id) INNER JOIN service_sejour ON sejour.id=service_sejour.sejour_id INNER JOIN service ON service_sejour.service_id=service.id"
        self.curseurBDD.execute(instructionBDD)
        resultat = self.curseurBDD.fetchall()
        
        print(resultat)
        
        retour = []
        for sejour in resultat:
            retour.append({"id_sejour":sejour[0], "nom": sejour[1], "prenom": sejour[2], "date_entree_sejour": sejour[3], "date_sortie_sejour": sejour[4], "nom_service": sejour[5], "num_chambre":sejour[6], "num_lit":sejour[7], "probleme": sejour[8]})
        return retour