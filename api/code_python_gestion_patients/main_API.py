from flask import Flask, jsonify, request, abort
from classes.manage_datas import ManageDatas

main_API = Flask(__name__)

@main_API.route('/code_python_gestion_patients/Consulter/<int:patient>')
def consulter(patient):
    try:
        BaseDD = ManageDatas()

        dictionnaire_patient = BaseDD.afficher_donnees_patient(patient)

        return jsonify(dictionnaire_patient)
    except:
        abort(500)
@main_API.route('/code_python_gestion_patients/AjoutPatient', methods={'POST'})
def ajoutPatient():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "patient" in message and "nom" in message and "prenom" in message and "date" in message:
        try :
            BaseDD.ajouter_patient(message["patient"], message["nom"], message["prenom"], message["date"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/ModificationPatient', methods={'POST'})
def modificationPatient() :
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "patient" in message and "nom" in message and "prenom" in message and "date" in message:
        try :
            BaseDD.modifier_patient(message["nom"], message["prenom"], message["date"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/SuppressionPatient', methods={'POST'})
def suppressionPatient():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "patient" in message :
        try:
            BaseDD.supprimer_patient(message["patient"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/AjoutPersonnel', methods={'POST'})
def ajoutPersonnel():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "personnel" in message and "nom" in message and "prenom" in message and "date" in message:
        try :
            BaseDD.ajouter_personnel(message["personnel"], message["nom"], message["prenom"], message["date"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/ModificationPersonnel', methods={'POST'})
def modificationPersonnel() :
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "personnel" in message and "nom" in message and "prenom" in message and "date" in message:
        try :
            BaseDD.modifier_personnel(message["nom"], message["prenom"], message["date"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/SuppressionPersonnel', methods={'POST'})
def suppressionPersonnel():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "personnel" in message :
        try:
            BaseDD.supprimer_personnel(message["personnel"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/AjoutService', methods={'POST'})
def ajoutService():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "service" in message and "nom" in message and "zone" in message:
        try :
            BaseDD.ajouter_service(message["service"], message["nom"], message["zone"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/ModificationService', methods={'POST'})
def modificationService() :
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "service" in message and "nom" in message and "zone" in message:
        try :
            BaseDD.modifier_personnel(message["nom"], message["zone"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/SuppressionService', methods={'POST'})
def suppressionService():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    if "service" in message :
        try:
            BaseDD.supprimer_service(message["service"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)
@main_API.route('/code_python_gestion_patients/AjoutSejour', methods={'POST'})
def ajoutSejour():
    message = request.get_json(force=True)
    BaseDD = ManageDatas()
    #sejour, patient, service, dateEntree, dateSortie, probleme, numeroDeLit
    if "sejour" in message and "patient" in message and "service" in message and "dateEntree" in message and "dateSortie" in message and "probleme" in message and "numeroDeLit" in message:
        try :
            BaseDD.ajouter_sejour(message["sejour"], message["patient"], message["service"], message["dateEntree"], message["dateSortie"], message["probleme"], message["numeroDeLit"])
            return "Ok"
        except:
            abort(500)
    else:
        abort(406)

if __name__ == '__main__':
    main_API.run()