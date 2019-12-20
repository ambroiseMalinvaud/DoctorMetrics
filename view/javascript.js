function confirmDelete() {
	var result = confirm("Voulez-vous vraiment supprimer cet utilisateur ?");

	if (result == true) {
		return true;
	} else {
		return false;
	}
}