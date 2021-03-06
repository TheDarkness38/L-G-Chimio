<?php
/*
Copyright Laurent ROBIN CNRS - Université d'Orléans 2011 
Distributeur : UGCN - http://chimiotheque-nationale.org

Laurent.robin@univ-orleans.fr
Institut de Chimie Organique et Analytique - ICOA UMR7311
Université d’Orléans
Rue de Chartre – BP6759
45067 Orléans Cedex 2

Ce logiciel est un programme informatique servant à la gestion d'une chimiothèque de produits de synthèses. 

Ce logiciel est régi par la licence CeCILL soumise au droit français et respectant les principes de diffusion des logiciels libres.
Vous pouvez utiliser, modifier et/ou redistribuer ce programme sous les conditions de la licence CeCILL telle que diffusée par le CEA,
 le CNRS et l'INRIA sur le site "http://www.cecill.info".

En contrepartie de l'accessibilité au code source et des droits de copie, de modification et de redistribution accordés par cette licence,
 il n'est offert aux utilisateurs qu'une garantie limitée. Pour les mêmes raisons, seule une responsabilité restreinte pèse sur l'auteur du
 programme, le titulaire des droits patrimoniaux et les concédants successifs.

A cet égard l'attention de l'utilisateur est attirée sur les risques associés au chargement, à l'utilisation, à la modification et/ou au développement
 et à la reproduction du logiciel par l'utilisateur étant donné sa spécificité de logiciel libre, qui peut le rendre complexe à manipuler et qui le
réserve donc à des développeurs et des professionnels avertis possédant des connaissances informatiques approfondies. Les utilisateurs sont donc 
invités à charger et tester l'adéquation du logiciel à leurs besoins dans des conditions permettant d'assurer la sécurité de leurs systèmes et ou de
 leurs données et, plus généralement, à l'utiliser et l'exploiter dans les mêmes conditions de sécurité. 

Le fait que vous puissiez accéder à cet en-tête signifie que vous avez pris connaissance de la licence CeCILL, et que vous en avez accepté les
termes.
*/
include_once 'autoload.php';

if(!isset($_POST['nom'])) $_POST['nom']="";
if(!isset($_POST['acronyme'])) $_POST['acronyme']="";
if(!isset($_POST['email'])) $_POST['email']="";
print"<div id=\"dhtmltooltip\"></div>
    <script language=\"javascript\" src=\"../ttip.js\"></script>";
print"<br/>";
if (!empty($erreur)) print'<p align="center" class="messagederreur">'.$erreur.'</p>';
print"<br/>";
$formulaire=new formulaire ("parametrage","etape8.php","POST",true);
$formulaire->affiche_formulaire();
$formulaire->ajout_text (50, $_POST['nom'], 256, "nom", "Nom du Laboratoire :"."<br/>","","");
print"<br/><br/>";
$formulaire->ajout_text (7, $_POST['acronyme'], 7, "acronyme", "Acronyme du laboratoire :"."<br/>","","");
print"<br/><br/>";
$formulaire->ajout_file (30, "logo",true,"Charger le logo du laboratoire :"."<br/>","");
print"<a href=\"#\" onmouseover=\"ddrivetip('<p align=\'center\'>Votre fichier de logo ne doit pas excéder la taille de 19,53Ko et doit être de type JPG ou GIF ou PNG</p>')\" onmouseout=\"hideddrivetip()\"><img border=\"0\" src=\"../images/aide.gif\" /></a>";

print"<br/><br/>";
$formulaire->ajout_text (50, $_POST['email'], 50, "email", "Adresse à utiliser par l'application pour envoyer les courriels :"."<br/>","","");
print"<br/><br/>";
$formulaire->ajout_button (SUBMIT,"","submit","");
//fin du formulaire
$formulaire->fin();
?>