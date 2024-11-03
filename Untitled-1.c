#include <stdio.h>
#include <stdlib.h>

int main()
{
    FILE *etudiant;
    etudiant = fopen("test.csv","r");
etudiant =fopen("etudiant.txt","w");
if (etudiant==NULL)
    { printf("ERREUR:fichier non ouvert !\n");}
    else
        fclose(etudiant);
fprintf(FichierEtudiant, "Matricule: %d \n Prenom %s\n Nom : %s\n Date de Naissance : jour: %d, moin:%d, annee %d"e.matricule,e.prenom,e.nom,e.naissance.j,e.naissance.m,e.naissance.a);

return 0;
}