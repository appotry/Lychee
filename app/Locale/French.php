<?php

namespace App\Locale;

use App\Contracts\Language;

final class French implements Language
{
	public function code(): string
	{
		return 'fr';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'Nom d’utilisateur',
			'PASSWORD' => 'Mot de passe',
			'ENTER' => 'Enter',
			'CANCEL' => 'Annuler',
			'SIGN_IN' => 'Connexion',
			'CLOSE' => 'Fermer',
			'SETTINGS' => 'Paramètres',
			'SEARCH' => 'Rechercher…',
			'MORE' => 'Plus',
			'DEFAULT' => 'Valeur par defaut',
			'ALBUM_SET_ORDER' => 'Changer l\'ordre',
			'ALBUM_ORDERING' => 'Trier par',

			'USERS' => 'Utilisateurs',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Partage',
			'CHANGE_LOGIN' => 'Changer le nom d’utilisateur',
			'CHANGE_SORTING' => 'Changer le tri',
			'SET_DROPBOX' => 'Paramétrer Dropbox',
			'ABOUT_LYCHEE' => 'À propos de Lychee',
			'DIAGNOSTICS' => 'Diagnostiques',
			'DIAGNOSTICS_GET_SIZE' => 'Calculer l’espace utilisé',
			'LOGS' => 'Afficher les logs',
			'SIGN_OUT' => 'Se déconnecter',
			'UPDATE_AVAILABLE' => 'Une mise à jour est disponible !',
			'MIGRATION_AVAILABLE' => 'Une migration disponible !',
			'DEFAULT_LICENSE' => 'License par defaut pour les nouveaux ajouts:',
			'SET_LICENSE' => 'Selectioner une license',
			'SET_OVERLAY_TYPE' => 'Selectioner le type d’Overlay',
			'SET_MAP_PROVIDER' => 'Selectioner le fournisseur de données cartographiques',

			'SMART_ALBUMS' => 'Smart Albums',
			'SHARED_ALBUMS' => 'Albums partagés',
			'ALBUMS' => 'Albums',
			'PHOTOS' => 'Photos',
			'SEARCH_RESULTS' => 'Résultats',

			'RENAME' => 'Renommer',
			'RENAME_ALL' => 'Renommer la sélection',
			'MERGE' => 'Fusionner',
			'MERGE_ALL' => 'Fusionner la sélection',
			'MAKE_PUBLIC' => 'Rendre public',
			'SHARE_ALBUM' => 'Partager l’album',
			'SHARE_PHOTO' => 'Partager la photo',
			'VISIBILITY_ALBUM' => 'Visibilité de l’album',
			'VISIBILITY_PHOTO' => 'Visibilité de la Photo',
			'DOWNLOAD_ALBUM' => 'Télécharger l’album',
			'ABOUT_ALBUM' => 'À propos de l’album',
			'DELETE_ALBUM' => 'Supprimer l’album',
			'MOVE_ALBUM' => 'Déplacer l’album',
			'FULLSCREEN_ENTER' => 'Entrer en mode plein écran',
			'FULLSCREEN_EXIT' => 'Sortir du mode plein écran',

			'SHARING_ALBUM_USERS' => 'Partager l’album avec des utilisateurs',
			'WAIT_FETCH_DATA' => 'Merci de patienter que les données soient récupérées…',
			'SHARING_ALBUM_USERS_NO_USERS' => 'Il n’y pas d’utilisateurs avec qui partager cet album',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Sélectionner les utilisateurs avec qui partager cet album',

			'DELETE_ALBUM_QUESTION' => 'Supprimer l’album et ses photos',
			'KEEP_ALBUM' => 'Garder l’album',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Voulez-vous vraiment supprimer l’album ',
			'DELETE_ALBUM_CONFIRMATION_2' => 'et toutes les photos qu’il contient ? Cette action est irréversible !',

			'DELETE_ALBUMS_QUESTION' => 'Supprimer les albums et leurs photos',
			'KEEP_ALBUMS' => 'Garder les albums',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Voulez-vous vraiment supprimer les ',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'albums selectionnés et toutes leurs photos ? Cette action est irréversible !',

			'DELETE_UNSORTED_CONFIRM' => 'Voulez-vous vraiment supprimer toutes les photos de «Non-triés» ?<br>Cette action est irréversible !',
			'CLEAR_UNSORTED' => 'Vider Non-triés',
			'KEEP_UNSORTED' => 'Garder Non-triés',

			'EDIT_SHARING' => 'Éditer le partage',
			'MAKE_PRIVATE' => 'Rendre privé',

			'CLOSE_ALBUM' => 'Fermer l’album',
			'CLOSE_PHOTO' => 'Fermer la photo',
			'CLOSE_MAP' => 'Fermer la carte',

			'ADD' => 'Ajouter',
			'MOVE' => 'Déplacer',
			'MOVE_ALL' => 'Déplacer la sélection',
			'DUPLICATE' => 'Dupliquer',
			'DUPLICATE_ALL' => 'Dupliquer la sélection',
			'COPY_TO' => 'Copier vers…',
			'COPY_ALL_TO' => 'Copier la sélection vers…',
			'DELETE' => 'Supprimer',
			'DELETE_ALL' => 'Supprimer la sélection',
			'DOWNLOAD' => 'Télécharger',
			'DOWNLOAD_ALL' => 'Télécharger la sélection',
			'UPLOAD_PHOTO' => 'Ajouter une photo ou une vidéo',
			'IMPORT_LINK' => 'Importer depuis un lien',
			'IMPORT_DROPBOX' => 'Importer depuis Dropbox',
			'IMPORT_SERVER' => 'Importer depuis le serveur',
			'NEW_ALBUM' => 'Nouvel album',
			'NEW_TAG_ALBUM' => 'Nouvel album d’étiquette',

			'TITLE_NEW_ALBUM' => 'Entrez le titre du nouvel album :',
			'UNTITLED' => 'Sans titre',
			'UNSORTED' => 'Non triés',
			'STARRED' => 'Favoris',
			'RECENT' => 'Récent',
			'PUBLIC' => 'Public',
			'NUM_PHOTOS' => 'Photos',

			'CREATE_ALBUM' => 'Créer un album',
			'CREATE_TAG_ALBUM' => 'Créer un album d’étiquette',

			'STAR_PHOTO' => 'Mettre en Favoris',
			'STAR' => 'Favori',
			'STAR_ALL' => 'Marquer la sélection comme favoris',
			'TAGS' => 'Tagger',
			'TAGS_ALL' => 'Tagger la sélection',
			'UNSTAR_PHOTO' => 'Retirer des Favoris',
			'SET_COVER' => 'Changer la pochette de l\'album',
			'REMOVE_COVER' => 'Supprimer la pochette de l\'album',

			'FULL_PHOTO' => 'Ouvrir l’original',
			'ABOUT_PHOTO' => 'À propos de la photo',
			'DISPLAY_FULL_MAP' => 'Carte',
			'DIRECT_LINK' => 'Lien direct',
			'DIRECT_LINKS' => 'Liens directs',

			'ALBUM_ABOUT' => 'À propos',
			'ALBUM_BASICS' => 'Informations de base',
			'ALBUM_TITLE' => 'Titre',
			'ALBUM_NEW_TITLE' => 'Entrez un nouveau titre pour cet album :',
			'ALBUMS_NEW_TITLE_1' => 'Entrez un titre pour les',
			'ALBUMS_NEW_TITLE_2' => 'albums sélectionnés :',
			'ALBUM_SET_TITLE' => 'Enregistrer le titre',
			'ALBUM_DESCRIPTION' => 'Description',
			'ALBUM_SHOW_TAGS' => 'Étiquettes à afficher',
			'ALBUM_NEW_DESCRIPTION' => 'Entrez une nouvelle description pour cet album :',
			'ALBUM_SET_DESCRIPTION' => 'Choisir une description',
			'ALBUM_NEW_SHOWTAGS' => 'Entrez les étiquettes des photos qui seront affichées dans cet album :',
			'ALBUM_SET_SHOWTAGS' => 'Afficher ces étiquettes',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Créé',
			'ALBUM_IMAGES' => 'Images',
			'ALBUM_VIDEOS' => 'Videos',
			'ALBUM_SUBALBUMS' => 'Sous-albums',
			'ALBUM_SHARING' => 'Partager',
			'ALBUM_SHR_YES' => 'Oui',
			'ALBUM_SHR_NO' => 'Non',
			'ALBUM_PUBLIC' => 'Public',
			'ALBUM_PUBLIC_EXPL' => 'L’Album est visible publiquement avec les restrictions suivantes.',
			'ALBUM_HIDDEN' => 'Masqué',
			'ALBUM_FULL' => 'Originaux',
			'ALBUM_MARK_NSFW' => 'Mark album as sensitive',
			'ALBUM_UNMARK_NSFW' => 'Unmark album as sensitive',
			'ALBUM_NSFW' => 'Sensitive',
			'ALBUM_NSFW_EXPL' => 'Album is marked to contain sensitive content.',
			'ALBUM_FULL_EXPL' => 'Les images sont disponibles en complète résolution.',
			'ALBUM_HIDDEN_EXPL' => 'Seules les personnes avec le lien peuvent voir cet album.',
			'ALBUM_DOWNLOADABLE' => 'Téléchargeable',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Les visiteurs peuvent télécharger cet album.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Visibilité du bouton de partage.',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Affiche les liens de partage sur les média sociaux.',
			'ALBUM_PASSWORD' => 'Mot de passe',
			'ALBUM_PASSWORD_PROT' => 'Protéger par un mot de passe.',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Cet album est accessible avec un mot de passe.',
			'ALBUM_PASSWORD_REQUIRED' => 'Cet album est protégé par mot de passe. Entrez le mot de passe pour afficher les photos de cet album :',
			'ALBUM_MERGE_1' => 'Voulez-vous vraiment fusionner l’album',
			'ALBUM_MERGE_2' => 'dans l’album', // `dans` est important car il indique la direction du merge
			'ALBUMS_MERGE' => 'Voulez-vous vraiment fusionner les albums selectionnés avec l’album',
			'MERGE_ALBUM' => 'Fusionner les albums',
			'DONT_MERGE' => 'Ne pas fusionner.',
			'ALBUM_MOVE_1' => 'Voulez-vous vraiment déplacer l’album',
			'ALBUM_MOVE_2' => 'dans l’album',
			'ALBUMS_MOVE' => 'Voulez-vous vraiment déplacer les albums selectionnés dans l’album',
			'MOVE_ALBUMS' => 'Déplacer les albums',
			'NOT_MOVE_ALBUMS' => 'Ne pas déplacer',
			'ROOT' => 'Albums',
			'ALBUM_REUSE' => 'Reuse',
			'ALBUM_LICENSE' => 'License',
			'ALBUM_SET_LICENSE' => 'Selectioner une license',
			'ALBUM_LICENSE_HELP' => 'Un doute sur le choix ?',
			'ALBUM_LICENSE_NONE' => 'Aucune',
			'ALBUM_RESERVED' => 'Tous droits réservés',

			'PHOTO_ABOUT' => 'À propos',
			'PHOTO_BASICS' => 'Informations de base',
			'PHOTO_TITLE' => 'Titre',
			'PHOTO_NEW_TITLE' => 'Entrer un nouveau titre pour cette photo :',
			'PHOTO_SET_TITLE' => 'Choisir un titre',
			'PHOTO_UPLOADED' => 'Uploadé', // Frenglish, but I don't care. Telecharge est ambigu en Francais...
			'PHOTO_DESCRIPTION' => 'Description',
			'PHOTO_NEW_DESCRIPTION' => 'Entrez une nouvelle description pour cette photo :',
			'PHOTO_SET_DESCRIPTION' => 'Choisir une description',
			'PHOTO_NEW_LICENSE' => 'Ajouter une License',
			'PHOTO_SET_LICENSE' => 'Sélectionner License',
			'PHOTO_LICENSE' => 'License',
			'PHOTO_REUSE' => 'Reuse',
			'PHOTO_LICENSE_NONE' => 'Aucune',
			'PHOTO_RESERVED' => 'Tous droits réservés',
			'PHOTO_LATITUDE' => 'Latitude',
			'PHOTO_LONGITUDE' => 'Longitude',
			'PHOTO_ALTITUDE' => 'Altitude',
			'PHOTO_IMGDIRECTION' => 'Direction',
			'PHOTO_LOCATION' => 'Location',
			'PHOTO_IMAGE' => 'Image',
			'PHOTO_VIDEO' => 'Vidéo',
			'PHOTO_SIZE' => 'Dimension',
			'PHOTO_FORMAT' => 'Format',
			'PHOTO_RESOLUTION' => 'Résolution',
			'PHOTO_DURATION' => 'Durée',
			'PHOTO_FPS' => 'Frame rate',
			'PHOTO_TAGS' => 'Étiquettes',
			'PHOTO_NOTAGS' => 'Pas d’étiquettes',
			'PHOTO_NEW_TAGS' => 'Entrez vos étiquettes pour cette photo. Vous pouvez ajouter plusieurs étiquettes en les séparant avec une virgule :',
			'PHOTO_NEW_TAGS_1' => 'Entrez vos étiquettes pour toutes les',
			'PHOTO_NEW_TAGS_2' => 'photos selectionnées. Les tags existants seront remplacés. Vous pouvez ajouter plusieurs tags en les séparant avec une virgule :',
			'PHOTO_SET_TAGS' => 'Établir les étiquettes',
			'PHOTO_CAMERA' => 'Appareil',
			'PHOTO_CAPTURED' => 'Date de prise de vue',
			'PHOTO_MAKE' => 'Marque',
			'PHOTO_TYPE' => 'Modèle',
			'PHOTO_LENS' => 'Objectif',
			'PHOTO_SHUTTER' => 'Durée d’exposition',
			'PHOTO_APERTURE' => 'Ouverture',
			'PHOTO_FOCAL' => 'Distance focale',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Partager',
			'PHOTO_SHR_PLUBLIC' => 'Publique',
			'PHOTO_SHR_ALB' => 'Oui (album)',
			'PHOTO_SHR_PHT' => 'Oui (photo)',
			'PHOTO_SHR_NO' => 'Non',
			'PHOTO_DELETE' => 'Supprimer la photo',
			'PHOTO_KEEP' => 'Garder la photo',
			'PHOTO_DELETE_1' => 'Voulez-vous vraiment supprimer la photo ? ',
			'PHOTO_DELETE_2' => 'Cette action est irréversible !',
			'PHOTO_DELETE_ALL_1' => 'Voulez-vous vraiment supprimer toutes les',
			'PHOTO_DELETE_ALL_2' => 'photos sélectionnées ? Cette action est irréversible !',
			'PHOTOS_NEW_TITLE_1' => 'Entrer un titre pour toutes les',
			'PHOTOS_NEW_TITLE_2' => 'photos sélectionnées :',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Cette photo est située dans un album public. Pour rendre cette photo privée ou publique, modifiez la visibilité de l’album associé.',
			'PHOTO_SHOW_ALBUM' => 'Afficher l’album',
			'PHOTO_PUBLIC' => 'Public',
			'PHOTO_PUBLIC_EXPL' => 'La photo est visible publiquement avec les restrictions suivantes.',
			'PHOTO_FULL' => 'Originale',
			'PHOTO_FULL_EXPL' => 'La photo est disponible en résolution complète.',
			'PHOTO_HIDDEN' => 'Cachée.',
			'PHOTO_HIDDEN_EXPL' => 'Seul les personnes avec un lien peuvent voir cette photo.',
			'PHOTO_DOWNLOADABLE' => 'Téléchargeable.',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Les visiteurs peuvent télécharger cette photo.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Visibilité du bouton de partage',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Affiche les liens de partage pour média sociaux.',
			'PHOTO_PASSWORD_PROT' => 'Protéger par un mot de passe.',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Cette photo est accessible uniquement avec un mot de passe.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Les propriété de partages de cette photo seront changé pour les suivantes:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Parce que cette photo est dans un album public, elle hérite des propriété de partage de l’album. Sa visibilité est montrée ci dessous pour votre information.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'La visibilité de cette photo est ajustable avec les parametres generaux de Lychee.  Sa visibilité est montrée ci dessous pour votre information.',
			'PHOTO_SHARING_CONFIRM' => 'Sauvegarder',

			'LOADING' => 'Chargement en cours',
			'ERROR' => 'Erreur',
			'ERROR_TEXT' => 'Il semble qu’une erreur soit survenue. Veuillez rafraichir la page et réessayer !',
			'ERROR_DB_1' => 'Connexion impossible à la base de données car l’accès a été refusé. Vérifiez votre nom d’hôte, nom d’utilisateur et mot de passe, et assurez-vous que l’accès est autorisé à partir de votre emplacement actuel.',
			'ERROR_DB_2' => 'Impossible de creer la base de données. Verifiez votre nom d’hôte, nom d’utilisateur et mot de passe, et assurez-vous que l’utilisateur specifié est autorisé à modifier et ajouter du contenu dans la base de données.',
			'ERROR_CONFIG_FILE' => 'Impossible d’enregistrer cette configuration. Permission refusée dans <b>«data/»</b>. Veuillez paramétrer les droits de lecture, d’ecriture et d’exécution pour les autres utilisateurs dans <b>«data/»</b> et <b>«uploads/»</b>. Consultez le fichier Readme pour obtenir plus d’information.',
			'ERROR_UNKNOWN' => 'Une erreur inattendue est survenue. Veuillez réessayer et vérifier votre installation et votre serveur. Consultez le fichier Readme pour obtenir plus d’information.',
			'ERROR_LOGIN' => 'Impossible d’enregistrer les informations de connexion. Veuillez réessayer avec un autre nom d’utilisateur et mot de passe.',
			'ERROR_MAP_DEACTIVATED' => 'La carte a été désactivée dans les paramètres.',
			'ERROR_SEARCH_DEACTIVATED' => 'La recherche a été désactivée dans les paramètres.',
			'SUCCESS' => 'OK',
			'RETRY' => 'Réessayer',

			'SETTINGS_SUCCESS_LOGIN' => 'Informations de connexions mise à jour.',
			'SETTINGS_SUCCESS_SORT' => 'Ordre d’affichage mis à jour.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Clé Dropbox mise à updated.',
			'SETTINGS_SUCCESS_LANG' => 'Langage mis à jour.',
			'SETTINGS_SUCCESS_LAYOUT' => 'Affichage mis à jour.',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Overlay EXIF mis à jour.',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Recherche publique mise à jour.',
			'SETTINGS_SUCCESS_LICENSE' => 'License par défaut mise à jour.',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Parametres de la carte mis à jour.',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Parametres de la carte pour les albums publics mis à jour.',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Fournisseur de la Carte mis à jour.',

			'U2F_NOT_SUPPORTED' => 'U2F non suporté. Desolé.',
			'U2F_NOT_SECURE' => 'Environment non sécurisé. U2F non disponible.',
			'U2F_REGISTER_KEY' => 'Enregistrer une nouvelle clé.',
			'U2F_REGISTRATION_SUCCESS' => 'Enregistrement réussi!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentication réussie!',
			'U2F_CREDENTIALS' => 'Clés',
			'U2F_CREDENTIALS_DELETED' => 'Clé supprimée!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications.<br />To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => 'Entrez vos identifiants de connexion à la base de données ci-dessous :',
			'DB_INFO_HOST' => 'Hôte de la base de donnees (facultatif)',
			'DB_INFO_USER' => 'Nom d’utilisateur pour la base de données',
			'DB_INFO_PASSWORD' => 'Mot de passe pour la base de données',
			'DB_INFO_TEXT' => 'Lychee va créer sa propre base de données. Si vous le souhaitez, vous pouvez entrer le nom d’une base de données existante à la place :',
			'DB_NAME' => 'Nom de la base de données (facultatif)',
			'DB_PREFIX' => 'Préfixe de la table (facultatif)',
			'DB_CONNECT' => 'Connexion',

			'LOGIN_TITLE' => 'Entrez un nom d’utilisateur et un mot de passe pour votre installation :',
			'LOGIN_USERNAME' => 'Nouvel utilisateur',
			'LOGIN_PASSWORD' => 'Nouveau Mot de passe',
			'LOGIN_PASSWORD_CONFIRM' => 'Confirmez le mot de passe',
			'LOGIN_CREATE' => 'Créer les informations de connexion',

			'PASSWORD_TITLE' => 'Entrez votre mot de passe existant :',
			'USERNAME_CURRENT' => 'Nom d’utilisateur actuel :',
			'PASSWORD_CURRENT' => 'Mot de passe existant :',
			'PASSWORD_TEXT' => 'Votre nom d’utilisateur et votre mot de passe seront modifiés comme suit :',
			'PASSWORD_CHANGE' => 'Modifier les informations de connexion',

			'EDIT_SHARING_TITLE' => 'Modifier le partage',
			'EDIT_SHARING_TEXT' => 'Les propriétés de partage de cet album vont etre modifiées comme suit :',
			'SHARE_ALBUM_TEXT' => 'Cet album sera partagé avec les propriétés suivantes :',
			'ALBUM_SHARING_CONFIRM' => 'Sauvegarder',

			'SORT_ALBUM_BY_1' => 'Trier les albums',
			'SORT_ALBUM_BY_2' => 'dans l’ordre',
			'SORT_ALBUM_BY_3' => '.',

			'SORT_ALBUM_SELECT_1' => 'Heure de création',
			'SORT_ALBUM_SELECT_2' => 'Titre',
			'SORT_ALBUM_SELECT_3' => 'Description',
			'SORT_ALBUM_SELECT_4' => 'Public',
			'SORT_ALBUM_SELECT_5' => 'Prise de vue la plus récente',
			'SORT_ALBUM_SELECT_6' => 'Prise de vue la plus ancienne',

			'SORT_PHOTO_BY_1' => 'Trier les photos',
			'SORT_PHOTO_BY_2' => 'dans l’ordre',
			'SORT_PHOTO_BY_3' => '.',

			'SORT_PHOTO_SELECT_1' => 'Date d’upload',
			'SORT_PHOTO_SELECT_2' => 'Date de prise de vue',
			'SORT_PHOTO_SELECT_3' => 'Titre',
			'SORT_PHOTO_SELECT_4' => 'Description',
			'SORT_PHOTO_SELECT_5' => 'Public',
			'SORT_PHOTO_SELECT_6' => 'Favoris',
			'SORT_PHOTO_SELECT_7' => 'Format de la photo',

			'SORT_ASCENDING' => 'Croissant',
			'SORT_DESCENDING' => 'Décroissant',
			'SORT_CHANGE' => 'Modifier le tri',

			'DROPBOX_TITLE' => 'Définir une clé Dropbox',
			'DROPBOX_TEXT' => 'Pour pouvoir importer des photos à partir de votre Dropbox, vous aurez besoin d’une clé d’application «drop-ins» valide à créer sur <a href="https://www.dropbox.com/developers/apps/create\">leur site</a>. Générez votre clé personnelle et puis entrez-la ci-dessous:',

			'LANG_TEXT' => 'Remplacer la langue de Lychee par :',
			'LANG_TITLE' => 'Changer la langue',
			'PUBLIC_SEARCH_TEXT' => 'Recherche publique autorisée:',
			'OVERLAY_TYPE' => 'Informations à utiliser pour l’overlay:',
			'OVERLAY_NONE' => 'Pas d’overlay',
			'OVERLAY_EXIF' => 'Informations EXIF',
			'OVERLAY_DESCRIPTION' => 'Description de la photo',
			'OVERLAY_DATE' => 'Date de la photo',
			'MAP_DISPLAY_TEXT' => 'Activer les cartes (fourni par OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Activer les cartes pour les albums publics (fourni par OpenStreetMap):',
			'MAP_PROVIDER' => 'Fournisseur de cartes OpenStreetMap:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (no HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (no HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (no HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University de Erlangen, Allemagne (only HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Include les photos des sous-albums sur la carte :',
			'LOCATION_DECODING' => 'Convertir les informations GPS en nom de localisation',
			'LOCATION_SHOW' => 'Montrer le nom de la localisation',
			'LOCATION_SHOW_PUBLIC' => 'Montrer le nom de la localisation en mode public',
			'LAYOUT_TYPE' => 'Affichage des photos :',
			'LAYOUT_SQUARES' => 'Miniatures carrées',
			'LAYOUT_JUSTIFIED' => 'En proportions, justifiés',
			'LAYOUT_UNJUSTIFIED' => 'En proportions, non-justifiés',
			'SET_LAYOUT' => 'Changer l’affichage',

			'NSFW_VISIBLE_TEXT_1' => 'Make Sensitive albums visible by default.',
			'NSFW_VISIBLE_TEXT_2' => 'If the album is public, it is still accessible, just hidden from the view and <b>can be revealed by pressing <hkb>H</hkb></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Default sensitive album visibility updated with success.',

			'VIEW_NO_RESULT' => 'Aucun résultat',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Aucun album public',
			'VIEW_NO_CONFIGURATION' => 'Aucune configuration',
			'VIEW_PHOTO_NOT_FOUND' => 'Photo introuvable',

			'NO_TAGS' => 'Aucun tag',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Vous pouvez désormais gérer vos nouvelles photos.',
			'UPLOAD_COMPLETE' => 'Upload terminé',
			'UPLOAD_COMPLETE_FAILED' => 'L’Upload d’une ou plusieurs photos a échoué.',
			'UPLOAD_IMPORTING' => 'Importation',
			'UPLOAD_IMPORTING_URL' => 'Importation depuis l’URL',
			'UPLOAD_UPLOADING' => 'Upload en cours',
			'UPLOAD_FINISHED' => 'Terminé',
			'UPLOAD_PROCESSING' => 'Traitement',
			'UPLOAD_FAILED' => 'Échec',
			'UPLOAD_FAILED_ERROR' => 'Échec d’upload. Le serveur a retourné une erreur !',
			'UPLOAD_FAILED_WARNING' => 'Échec d’upload. Le serveur a retourné un avertissement !',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => 'Ignoré',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it’s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it’s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => 'Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_UNKNOWN' => 'Le serveur a retourné une reponse inconnue. Veuillez consulter la console de votre navigateur pour obtenir plus de détails.',
			'UPLOAD_ERROR_UNKNOWN' => 'Échec de l’upload. Le serveur a retourné une erreur inconnue !',
			'UPLOAD_ERROR_POSTSIZE' => 'Upload failed. The PHP post_max_size may be too small! Otherwise check the FAQ.',
			'UPLOAD_ERROR_FILESIZE' => 'Upload failed. The PHP upload_max_filesize may be too small! Otherwise check the FAQ.',
			'UPLOAD_IN_PROGRESS' => 'Lychee est en cours de téléchargement !',
			'UPLOAD_IMPORT_WARN_ERR' => 'L’importation est terminée, mais des erreurs ou des avertissements ont été retournés. Veuillez consulter le fichier de Log (Paramètres -> Afficher les logs) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_COMPLETE' => 'Importation terminée',
			'UPLOAD_IMPORT_INSTR' => 'Veuillez entrer un lien direct vers une photo pour l’importer :',
			'UPLOAD_IMPORT' => 'Importer',
			'UPLOAD_IMPORT_SERVER' => 'Importation à partir du serveur',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Dossier vide ou aucun fichier lisible à traiter. Veuillez consulter le journal (Paramètres -> Afficher le journal) pour obtenir plus de détails.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Cette action importera toutes les photos ainsi que tous les dossiers et sous-dossiers situés dans le répertoire suivant.',
			'UPLOAD_ABSOLUTE_PATH' => 'Chemin absolu du répertoire',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Impossible de démarrer l’importation car le dossier était vide !',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Supprimer les originaux',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'Les fichiers originaux seront supprimés après l’importation lorsque cela est possible.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Mémoire faible disponible !',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Le processus d’importation du serveur approche la limite de la mémoire disponible et peut etre terminé prématurément.',
			'UPLOAD_WARNING' => 'Attention',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Le chemin fourni n’est pas un reportoire lisible !',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Le chemin fourni est reservé à Lychee !',
			'UPLOAD_IMPORT_UNREADABLE' => 'Impossible de lire le fichier !',
			'UPLOAD_IMPORT_FAILED' => 'Impossible d’importer le fichier !',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Type de fichier non supporté !',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Impossible de créer l’album !',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => 'Hebergement personalisé de photo à votre façon !',
			'ABOUT_DESCRIPTION' => ' est une outil de gestion de gallerie gratuit qui fonctionne sur votre propre serveur. L’installation est rapide. Uploadez, gérez et partagez vos photos comme avec une application propre. Lychee vous fourni tout ce dont vous avez besoin et vos photos sont stockées en sécurité chez vous.',
			'FOOTER_COPYRIGHT' => 'Toutes les images de ce site Web sont protégées par le droit d’auteur par',
			'HOSTED_WITH_LYCHEE' => 'Herbergé avec Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Copier dans le presse-papier',
			'URL_COPIED_TO_CLIPBOARD' => 'l’URL a été copiée dans le presse-papier !',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Liens directs pour les fichier de l’image :',
			'PHOTO_MEDIUM' => 'Moyenne taille',
			'PHOTO_MEDIUM_HIDPI' => 'Moyenne taille HiDPI',
			'PHOTO_SMALL' => 'Petite taille',
			'PHOTO_SMALL_HIDPI' => 'Petite taille HiDPI',
			'PHOTO_THUMB' => 'Mignature carrée',
			'PHOTO_THUMB_HIDPI' => 'Mignature carrée HiDPI',
			'PHOTO_LIVE_VIDEO' => 'Partie vidéo d’une live-photo',
			'PHOTO_VIEW' => 'Vue photo de Lychee :',

			'PHOTO_EDIT_ROTATECWISE' => 'Pivoter dans le sens des aiguilles d’une montre.',
			'PHOTO_EDIT_ROTATECCWISE' => 'Pivoter dans le sens contraire des aiguilles d’une montre.',
		];

		return $locale;
	}
}
