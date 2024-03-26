package controleur;

public class Avion {
    private int idavion, capacite;
    private String constructeur, modele, photo, nomAeroport; // Ajout de la propriété nomAeroport

    public Avion(int idavion, String constructeur, String modele, int capacite, String photo, String nomAeroport) {
        super();
        this.idavion = idavion;
        this.constructeur = constructeur;
        this.modele = modele;
        this.capacite = capacite;
        this.photo = photo;
        this.nomAeroport = nomAeroport; // Initialisation de la propriété nomAeroport
    }

    public Avion(String constructeur, String modele, int capacite, String photo, String nomAeroport) {
        super();
        this.idavion = 0;
        this.constructeur = constructeur;
        this.modele = modele;
        this.capacite = capacite;
        this.photo = photo;
        this.nomAeroport = nomAeroport; // Initialisation de la propriété nomAeroport
    }

    public int getIdavion() {
        return idavion;
    }

    public void setIdavion(int idavion) {
        this.idavion = idavion;
    }

    public int getCapacite() {
        return capacite;
    }

    public void setCapacite(int capacite) {
        this.capacite = capacite;
    }

    public String getConstructeur() {
        return constructeur;
    }

    public void setConstructeur(String constructeur) {
        this.constructeur = constructeur;
    }

    public String getModele() {
        return modele;
    }

    public void setModele(String modele) {
        this.modele = modele;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    // Ajout de la méthode getter pour nomAeroport
    public String getNomAeroport() {
        return nomAeroport;
    }

    // Ajout de la méthode setter pour nomAeroport
    public void setNomAeroport(String nomAeroport) {
        this.nomAeroport = nomAeroport;
    }
}
